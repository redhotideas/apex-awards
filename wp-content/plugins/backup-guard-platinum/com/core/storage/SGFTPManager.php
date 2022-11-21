<?php

require_once SG_STORAGE_PATH . 'SGStorage.php';
require_once SG_STORAGE_PATH . 'SGFTPStorage.php';
require_once SG_STORAGE_PATH . 'SGSFTPStorage.php';

class SGFTPManager extends SGStorage
{
    private $_method;
    private $_proxy;

    public function init()
    {
        $this->_method = SGConfig::get('SG_STORAGE_CONNECTION_METHOD');
        if ($this->_method == 'ftp') {
            //check if ftp extension is loaded
            SGBoot::checkRequirement('ftp');
        }

        $this->setActiveDirectory(SGConfig::get('SG_FTP_ROOT_FOLDER'));
    }

    public function connect()
    {
        if ($this->isConnected()) {
            return;
        }

        if ($this->_method == 'ftp' || $this->_method == 'ftp-ssl') {
            $this->_proxy = new SGFTPStorage();
        } else {
            $this->_proxy = new SGSFTPStorage();
        }

        $this->_proxy->setMethod($this->_method);
        $this->_proxy->setDelegate($this);
        $this->_proxy->setStateData($this->state);
        $this->_proxy->connect();

        $this->connected = true;
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
        $this->connect();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $this->rootPath = rtrim($this->getActiveDirectory(), '/') . '/' . rtrim(SGConfig::get('SG_STORAGE_BACKUPS_FOLDER_NAME'), '/');
        $files          = $this->_proxy->getListOfFiles($this->rootPath);

        $path        = $this->rootPath . '/';
        $listOfFiles = array();

        foreach ($files as $file) {
            if ($file == '.' || $file == '..') {
                continue;
            }

            $size       = $this->_proxy->getFileSize($path . $file);
            $createDate = $this->_proxy->getCreateDate($path . $file);

            $listOfFiles[$file] = array(
                'name' => $file,
                'size' => $size,
                'date' => backupGuardConvertDateTimezone(date('Y-m-d H:i:s', $createDate), true),
                'path' => $path . $file
            );
        }

        krsort($listOfFiles);

        return $listOfFiles;
    }

    public function setActiveDirectory($directory)
    {
        parent::setActiveDirectory($directory);
        if ($this->isConnected()) {
            if (!@$this->_proxy->changeDirectory($directory)) {
                throw new SGExceptionForbidden('Could not change directory');
            }
        }
    }

    public function createFolder($folderName)
    {
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $folders = explode('/', $folderName);

        for ($i = 0; $i < count($folders); $i++) {
            $path = rtrim($this->getActiveDirectory(), '/') . '/' . $folders[$i];
            $this->_proxy->createFolder($path);
            $this->setActiveDirectory($path);
        }

        return $path;
    }

    public function downloadFile($file, $size, $backupId = null)
    {
        $this->connect();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        return $this->_proxy->downloadFile($file, $size);
    }

    public function saveStateData($uploadId, $offset)
    {
        $token                    = $this->delegate->getToken();
        $actionId                 = $this->delegate->getActionId();
        $pendingStorageUploads    = $this->delegate->getPendingStorageUploads();
        $currentUploadChunksCount = 0;
        $progress                 = $this->delegate->getProgress();

        $this->state->setProgress($progress);
        $this->state->setCurrentUploadChunksCount($currentUploadChunksCount);
        $this->state->setStorageType(SG_STORAGE_FTP);
        $this->state->setPendingStorageUploads($pendingStorageUploads);
        $this->state->setToken($token);
        $this->state->setUploadId($uploadId);
        $this->state->setOffset($offset);
        $this->state->setAction(SG_STATE_ACTION_UPLOADING_BACKUP);
        $this->state->setActiveDirectory($this->getActiveDirectory());
        $this->state->setActionId($actionId);
        $this->state->save();
    }

    public function uploadFile($filePath)
    {
        $this->connect();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        if (!file_exists($filePath) || !is_readable($filePath)) {
            throw new SGExceptionNotFound('File does not exist or is not readable: ' . $filePath);
        }

        $this->_proxy->uploadFile($filePath);
    }

    public function willStartUpload()
    {
        $this->delegate->willStartUpload(1);
    }

    public function updateProgressManually($progress)
    {
        $this->delegate->updateProgressManually($progress);
    }

    public function fileExists($path)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $fileList = $this->_proxy->getListOfFiles(dirname($path));
        if (count($fileList)) {
            if (in_array(basename($path), $fileList)) {
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

        return $this->_proxy->deleteFile(trim($path, '/'));
    }

    public function deleteFolder($folderName)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        return $this->_proxy->deleteFolder($folderName);
    }
}
