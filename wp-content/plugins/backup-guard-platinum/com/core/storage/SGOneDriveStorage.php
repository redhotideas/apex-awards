<?php

require_once(SG_STORAGE_PATH . 'SGStorage.php');
require_once(SG_LIB_PATH . 'OneDrive/OneDriveClient.php');

class SGOneDriveStorage extends SGStorage
{
    private $_client = null;

    public function init()
    {
        //check if curl extension is loaded
        SGBoot::checkRequirement('curl');
    }

    public function connect()
    {
        if ($this->isConnected()) {
            return;
        }

        // phpcs:disable
        $authCode = $this->getAuthCodeFromURL($cancel);

        if ($cancel) {
            throw new SGExceptionMethodNotAllowed('User did not allow access');
        }
        // phpcs:enable

        $this->auth($authCode);
    }

    public function connectOffline()
    {
        if ($this->isConnected()) {
            return;
        }

        $refreshToken = $this->getRefreshToken();

        if (!$refreshToken) {
            throw new SGExceptionNotFound('Refresh token not found');
        }

        $client = $this->getClient();

        //refresh access token using the refresh token
        $response = $client->refreshToken($refreshToken);
        SGConfig::set('SG_ONE_DRIVE_REFRESH_TOKEN', $response['refresh_token'], true);

        //set the new access token
        $client->setAccessToken($response['access_token']);
        $this->setAccessToken($response['access_token'], time() + 3600);

        $this->connected = true;
    }

    /* Check if it is already connected */
    public function checkConnected()
    {
        // phpcs:disable
        $accessToken     = $this->getAccessToken($expirationTs);
        $this->connected = ($accessToken && $expirationTs > time()) ? true : false;
        // phpcs:enable

        if ($this->connected) {
            $client = $this->getClient();
            $client->setAccessToken($accessToken);
        }
    }

    private function getRefreshToken()
    {
        return SGConfig::get('SG_ONE_DRIVE_REFRESH_TOKEN', true);
    }

    private function setAccessToken($accessToken, $expirationTs)
    {
        $_SESSION['sg_one_drive_access_token']  = $accessToken;
        $_SESSION['sg_one_drive_expiration_ts'] = $expirationTs;
    }

    private function getAccessToken(&$expirationTs = 0)
    {
        $expirationTs = (int)@$_SESSION['sg_one_drive_expiration_ts'];
        return @$_SESSION['sg_one_drive_access_token'];
    }

    private function auth($authCode = '')
    {
        $client = $this->getClient();

        $refUrl = $this->getRefURL();
        $client->setState(base64_encode($refUrl));

        $authUrl = $client->createAuthUrl();

        if ($authCode) {
            try {
                //exchange authorization code for access token
                $response = $client->authenticate($authCode);
                $this->setAccessToken($response['access_token'], time() + 3600);

                $refreshToken = $response['refresh_token'];

                $client->setAccessToken($response['access_token']);
                $userInfo = $client->getUserInfo();

                if ($userInfo) {
                    SGConfig::set('SG_ONE_DRIVE_CONNECTION_STRING', $userInfo['owner']['user']['displayName']);
                }

                //store refresh token
                SGConfig::set('SG_ONE_DRIVE_REFRESH_TOKEN', $refreshToken, true);

                $this->connected = true;
                return;
            } catch (Exception $ex) {
            }
        }

        header('Location: ' . $authUrl);
        exit;
    }

    /* Get list of files inside the active directory */
    public function getListOfFiles()
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $folderTree = SG_BACKUP_DEFAULT_FOLDER_NAME;

        if (SGBoot::isFeatureAvailable('SUBDIRECTORIES')) {
            $folderTree = SGConfig::get('SG_STORAGE_BACKUPS_FOLDER_NAME');
        }

        $accessToken = $this->getAccessToken();
        $client      = $this->getClient();
        $client->setAccessToken($accessToken);
        $list = $client->listFolder($folderTree);

        $listOfFiles = array();
        foreach ($list['value'] as $file) {
            $size = $file['size'];
            $date = $this->standardizeFileCreationDate($file['lastModifiedDateTime']);
            $name = $file['name'];

            $path = $file['parentReference']['path'];

            $listOfFiles[$name] = array(
                'name' => $name,
                'size' => $size,
                'date' => $date,
                'path' => $path . '/' . $name
            );
        }

        krsort($listOfFiles);
        return $listOfFiles;
    }

    /* Create a folder inside the active directory. If folder already exists, do nothing. */
    public function createFolder($folderPath)
    {
        // Folder tree will be created during upload

        $client = $this->getClient();
        $client->setUploadPath($folderPath);
    }

    /* Download file from Storage*/
    public function downloadFile($filePath, $size, $backupId = null)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $accessToken = $this->getAccessToken();
        $client      = $this->getClient();
        $client->setAccessToken($accessToken);
        $result = $client->downloadFile($filePath);

        return $result;
    }

    private function saveStateData($uploadId, $offset)
    {
        $token                    = $this->delegate->getToken();
        $actionId                 = $this->delegate->getActionId();
        $pendingStorageUploads    = $this->delegate->getPendingStorageUploads();
        $currentUploadChunksCount = $this->delegate->getCurrentUploadChunksCount();
        $progress                 = $this->delegate->getProgress();

        $this->state->setProgress($progress);
        $this->state->setCurrentUploadChunksCount($currentUploadChunksCount);
        $this->state->setStorageType(SG_STORAGE_ONE_DRIVE);
        $this->state->setPendingStorageUploads($pendingStorageUploads);
        $this->state->setToken($token);
        $this->state->setUploadId($uploadId);
        $this->state->setOffset($offset);
        $this->state->setAction(SG_STATE_ACTION_UPLOADING_BACKUP);
        $this->state->setActiveDirectory($this->getActiveDirectory());
        $this->state->setActionId($actionId);
        $this->state->save();
    }

    public function chunkedUploadStart()
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $accessToken = $this->getAccessToken();
        $client      = $this->getClient();
        $client->setAccessToken($accessToken);
        $client->chunkedUploadStart();
    }

    /* Upload local file to Storage */
    public function uploadFile($filePath)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        if (!file_exists($filePath) || !is_readable($filePath)) {
            throw new SGExceptionNotFound('File does not exist or is not readable: ' . $filePath);
        }

        //$chunkSizeBytes = 4 * 320 * 1024;
        $chunkSizeBytes = (int)getCloudUploadChunkSize() * 1024 * 1024;
        $client         = $this->getClient();
        $accessToken    = $this->getAccessToken();
        $client->setAccessToken($accessToken);

        $fileSize = backupGuardRealFilesize($filePath);
        $this->delegate->willStartUpload((int)ceil($fileSize / $chunkSizeBytes));

        $handle     = fopen($filePath, "rb");
        $byteOffset = $this->state->getOffset();
        fseek($handle, $byteOffset);

        if ($this->state->getAction() == SG_STATE_ACTION_PREPARING_STATE_FILE) {
            $byteOffset = 0;
            $filename   = basename($filePath);
            $uploadId   = $client->chunkedUploadStart($filename);
        } else {
            $uploadId = $this->state->getUploadId();
        }

        SGPing::update();
        while ($byteOffset < $fileSize) {
            $data = fread($handle, $chunkSizeBytes);
            $client->chunkedUploadContinue($uploadId, $byteOffset, $data, $fileSize);
            $byteOffset += strlen($data);

            if (!$this->delegate->shouldUploadNextChunk()) {
                fclose($handle);
                return;
            }

            SGPing::update();

            $shouldReload = $this->shouldReload();
            if ($shouldReload && backupGuardIsReloadEnabled()) {
                $this->saveStateData($uploadId, $byteOffset);
                @fclose($handle);
                $this->reload();
            }
        }
    }

    /* Delete file from active directory */
    public function deleteFile($fileName)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $accessToken = $this->getAccessToken();
        $client      = $this->getClient();
        $client->setAccessToken($accessToken);
        $client->deleteFile(trim($fileName, '/'));
    }

    /* Delete folder and it's contents from active directory */
    public function deleteFolder($folderName)
    {
        $this->connectOffline();
        if (!$this->isConnected()) {
            throw new SGExceptionForbidden('Permission denied. Authentication required.');
        }

        $accessToken = $this->getAccessToken();
        $client      = $this->getClient();
        $client->setAccessToken($accessToken);
        $client->deleteFile($folderName);
    }

    /* Search if file or folder exists in given path */
    public function fileExists($path)
    {
    }

    private function getRefURL()
    {
        $refUrl = $this->getCurrentURL();
        if (!$_SERVER['QUERY_STRING']) {
            $refUrl .= '?code=';
        } else {
            $refUrl .= '&code=';
        }

        return $refUrl;
    }

    private function getCurrentURL()
    {
        $http = backupGuardGetCurrentUrlScheme();
        $url  = $http . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        return $url;
    }

    private function getClient()
    {
        if (!$this->_client) {
            $client = new BackupGuard\OneDriveClient();

            $client->setResponseType('code');
            $client->setScopes(array(
                                   'files.readwrite',
                                   'offline_access'
                               ));

            $this->_client = $client;
        }

        return $this->_client;
    }

    private function getAuthCodeFromURL(&$cancel = false)
    {
        $query = $_SERVER['QUERY_STRING'];
        if (!$query) {
            return '';
        }

        $query = explode('&', $query);
        $code  = '';
        foreach ($query as $q) {
            $q = explode('=', $q);
            if ($q[0] == 'code') {
                $code = $q[1];
            } else if ($q[0] == 'cancel' && $q[1] == '1') {
                $cancel = true;
                break;
            }
        }

        return $code;
    }
}
