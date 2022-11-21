<?php

require_once SG_STORAGE_PATH . 'SGStorage.php';

use BackupGuard\Aws\S3\S3Client;

class SGAmazonStorage extends SGStorage
{
    private $_client = null;
    private $_bucket = '';
    private $_key = '';
    private $_secret = '';
    private $_region = '';
    private $_parts = array();

    public function init()
    {
        include_once SG_STORAGE_PATH . 'SGAmazon.php';
        //check if ftp extension is loaded
        SGBoot::checkRequirement('curl');
        $this->_key = SGConfig::get('SG_AMAZON_KEY');
        $this->_secret = SGConfig::get('SG_AMAZON_SECRET_KEY');
        $this->_region = SGConfig::get('SG_AMAZON_BUCKET_REGION');
        $this->_bucket = SGConfig::get('SG_AMAZON_BUCKET');
        $config = array(
            'signature' => 'v4',
            'version' => 'latest',
            'region' => $this->_region,
            'key' => $this->_key,
            'secret' => $this->_secret
        );

        $isAmazon = false;
        $isGoogle = false;
        for ($i = 0; $i < count($GLOBALS['SG_BACKUP_AMAZON_REGIONS']); $i++) {
            if ($GLOBALS['SG_BACKUP_AMAZON_REGIONS'][$i]["region"] == $this->_region) {
                $isAmazon = true;
                break;
            }
        }
        if (!$isAmazon) {
            for ($i = 0; $i < count($GLOBALS['SG_BACKUP_GOOGLE_REGIONS']); $i++) {
                if ($GLOBALS['SG_BACKUP_GOOGLE_REGIONS'][$i]["region"] == $this->_region) {
                    $isGoogle = true;
                    $config["base_url"] = "https://storage.googleapis.com";
                    $config['scheme'] = 'https';
                    break;
                }
            }

            if (!$isGoogle) {
                $config["base_url"] = $this->_region;
                $config["region"] = "";
            }
        }

        $this->_client = S3Client::factory($config);
    }

    public function connect()
    {
        try {
            // This will check if given credentials are valid or not. In case of not valid credentials it will throw an exception.
            $this->_client->listBuckets();
            $this->connected = true;

            return true;
        } catch (Exception $e) {
            throw new SGExceptionForbidden($e->getMessage());
        }
    }

    public function connectOffline()
    {
        $this->connect();
    }

    public function checkConnected()
    {
        $this->connected = $this->isConnected() ? true : false;
    }

    public function getListOfFiles()
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $listOfFiles = array();
        $backupFolderName = trim(SGConfig::get('SG_STORAGE_BACKUPS_FOLDER_NAME')) . "/";

        $objects = $this->_client->listObjects(
            array(
                'Bucket' => $this->_bucket,
                "Prefix" => $backupFolderName
            )
        );

        for ($i = 1; $i < count($objects['Contents']); $i++) {
            $size = $objects['Contents'][$i]['Size'];
            $date = $this->standardizeFileCreationDate($objects['Contents'][$i]['LastModified']);
            $name = basename($objects['Contents'][$i]['Key']);

            $listOfFiles[$name] = array(
                'name' => $name,
                'size' => $size,
                'date' => $date,
                'path' => $objects['Contents'][$i]['Key']
            );
        }

        krsort($listOfFiles);
        return $listOfFiles;
    }

    public function createFolder($folderName)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $result = $this->_client->putObject(
            array(
                'Bucket' => $this->_bucket,
                'Key' => $folderName . "/",
                'Body' => ""
                //            'ACL' => 'public-read'
            )
        );

        return $result['ObjectURL'];
    }

    public function downloadFile($filePath, $fileSize, $backupId = null)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $result = array();
        if ($filePath) {
            $chunk = 1.0 * 1024 * 1024;
            $start = 0;
            $end = $chunk;

            $fd = fopen(SG_BACKUP_DIRECTORY . basename($filePath), "w");
            $result = array();
            $ret = false;

            while (true) {
                if (!file_exists(SG_BACKUP_DIRECTORY . basename($filePath))) {
                    $ret = false;
                    break;
                }

                if ($start >= $fileSize) {
                    $ret = true;
                    break;
                }

                if ($end > $fileSize) {
                    $end = $fileSize;
                }

                $result = $this->_client->getObject(
                    array(
                        'Bucket' => $this->_bucket,
                        'Key' => $filePath,
                        'Range' => "bytes=$start-$end",
                    )
                );
                $data = $result['Body'];

                if (strlen($data)) {
                    fwrite($fd, $data);
                }

                $start = $end + 1;
                $end += $chunk;
            }
        }

        fclose($fd);
        return $ret;
    }

    private function saveStateData($uploadId, $offset, $partNumber)
    {
        $token = $this->delegate->getToken();
        $actionId = $this->delegate->getActionId();
        $pendingStorageUploads = $this->delegate->getPendingStorageUploads();
        $progress = $this->delegate->getProgress();

        $this->state->setProgress($progress);
        $this->state->setCurrentUploadChunksCount($partNumber);
        $this->state->setStorageType(SG_STORAGE_AMAZON);
        $this->state->setPendingStorageUploads($pendingStorageUploads);
        $this->state->setToken($token);
        $this->state->setUploadId($uploadId);
        $this->state->setOffset($offset);
        $this->state->setAction(SG_STATE_ACTION_UPLOADING_BACKUP);
        $this->state->setActiveDirectory($this->_bucket);
        $this->state->setActionId($actionId);
        $this->state->setParts($this->_parts);
        $this->state->save();
    }

    public function uploadFile($filePath)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $fileSize = backupGuardRealFilesize($filePath);
        $keyname = basename($filePath);
        $this->delegate->willStartUpload(1);

        if ($this->state->getAction() == SG_STATE_ACTION_PREPARING_STATE_FILE) {
            $result = $this->_client->createMultipartUpload(
                array(
                    'Bucket' => $this->_bucket,
                    'Key' => SGConfig::get('SG_STORAGE_BACKUPS_FOLDER_NAME') . '/' . $keyname
                )
            );
            $uploadId = $result['UploadId'];
        } else {
            $uploadId = $this->state->getUploadId();
        }

        try {
            $file = fopen($filePath, 'r');

            $byteOffset = $this->state->getOffset();
            fseek($file, $byteOffset);

            $partNumber = 1;
            if ($this->state->getAction() == SG_STATE_ACTION_PREPARING_STATE_FILE) {
                $this->_parts = array();
                $partNumber = 1;
            } else {
                $this->_parts = $this->state->getParts();
                $partNumber = $this->state->getCurrentUploadChunksCount();
                $this->_bucket = $this->state->getActiveDirectory();
            }

            $uploadChunkSize = (int)getCloudUploadChunkSize();
            if ($uploadChunkSize == 4) {
                $uploadChunkSize = 5;
            }

            $chunkSizeBytes = (int)$uploadChunkSize * 1024 * 1024;
            SGPing::update();

            while ($byteOffset < $fileSize) {
                $result = $this->_client->uploadPart(
                    array(
                        'Bucket' => $this->_bucket,
                        'Key' => SGConfig::get('SG_STORAGE_BACKUPS_FOLDER_NAME') . '/' . $keyname,
                        'UploadId' => $uploadId,
                        'PartNumber' => $partNumber,
                        'Body' => fread($file, $chunkSizeBytes),
                    )
                );

                $this->_parts[] = array(
                    'ETag' => $result['ETag'],
                    'PartNumber' => $partNumber++
                );

                $byteOffset = ftell($file);
                $progress = $byteOffset * 100.0 / $fileSize;
                $this->delegate->updateProgressManually($progress);

                SGPing::update();

                $shouldReload = $this->shouldReload();
                if ($shouldReload && backupGuardIsReloadEnabled()) {
                    $this->saveStateData($uploadId, $byteOffset, $partNumber);
                    @fclose($file);
                    $this->reload();
                }
            }

            fclose($file);

            $result = $this->_client->completeMultipartUpload(
                array(
                    'Bucket' => $this->_bucket,
                    'Key' => SGConfig::get('SG_STORAGE_BACKUPS_FOLDER_NAME') . '/' . $keyname,
                    'UploadId' => $uploadId,
                    'Parts' => $this->_parts
                )
            );
        } catch (S3Exception $e) {
            $result = $this->_client->abortMultipartUpload(
                array(
                    'Bucket' => $this->_bucket,
                    'Key' => SGConfig::get('SG_STORAGE_BACKUPS_FOLDER_NAME') . '/' . $keyname,
                    'UploadId' => $uploadId
                )
            );
        }
    }

    public function fileExists($path)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $filesList = $this->getListOfFiles();
        if (count($filesList)) {
            if (array_key_exists(basename($path), $filesList)) {
                return true;
            }
        }

        return false;
    }

    public function deleteFile($path)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $result = $this->_client->deleteObject(
            array(
                'Bucket' => $this->_bucket,
                'Key' => $path
            )
        );

        return $result;
    }

    public function deleteFolder($folderName)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $result = $this->_client->deleteMatchingObjects($this->_bucket, $folderName);

        return $result;
    }
}
