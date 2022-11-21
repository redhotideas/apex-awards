<?php

class SGFTPStorage
{
    private $_connectionId = null;
    private $_host;
    private $_method;
    private $_port;
    private $_user;
    private $_password;
    private $_activeDirectory;
    private $_delegate;
    private $_state;
    private $_offset = 0;
    const BUFFER_SIZE = 4194304; // 4mb

    public function __construct()
    {
        $this->_host            = SGConfig::get('SG_FTP_HOST');
        $this->_port            = SGConfig::get('SG_FTP_PORT');
        $this->_user            = SGConfig::get('SG_FTP_USER');
        $this->_password        = SGConfig::get('SG_FTP_PASSWORD');
        $this->_activeDirectory = SGConfig::get('SG_FTP_ROOT_FOLDER');
    }

    public function setDelegate($delegate)
    {
        $this->delegate = $delegate;
    }

    public function setStateData($state)
    {
        $this->state = $state;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function connect()
    {
        if ($this->method == 'ftp') {
            $connId = @ftp_connect($this->_host, $this->_port);
        } else if ($this->method == 'ftp-ssl') {
            $connId = @ftp_ssl_connect($this->_host, $this->_port);
        }

        if (!$connId) {
            throw new SGExceptionForbidden('Could not connect to the FTP server: ' . $this->_host);
        }

        $login = @ftp_login($connId, $this->_user, $this->_password);
        if (!$login) {
            throw new SGExceptionForbidden('Could not connect to the FTP server: ' . $this->_host);
        }

        //change default timeout to 60 seconds
        @ftp_set_option($connId, FTP_TIMEOUT_SEC, 60);

        //turn passive mode on
        $ftpPassiveMode = SGConfig::get('SG_FTP_PASSIVE_MODE') ? true : false;
        @ftp_pasv($connId, $ftpPassiveMode);

        SGConfig::set('SG_FTP_CONNECTION_STRING', $this->_user . '@' . $this->_host . ':' . $this->_port);
        $this->connectionId = $connId;
    }

    public function getListOfFiles($rootPath)
    {
        $files = ftp_nlist($this->connectionId, $rootPath);

        $listFiles = array();
        foreach ($files as $file) {
            $listFiles[] = ltrim(str_replace($rootPath, '', $file), '/');
        }

        return $listFiles;
    }

    public function getFileSize($path)
    {
        return ftp_size($this->connectionId, $path);
    }

    public function getCreateDate($path)
    {
        return ftp_mdtm($this->connectionId, $path);
    }

    public function changeDirectory($directory)
    {
        return ftp_chdir($this->connectionId, $directory);
    }

    public function createFolder($path)
    {
        return @ftp_mkdir($this->connectionId, $path);
    }

    public function downloadFile($file, $size, $backupId = null)
    {
        $loaclFilePath  = SG_BACKUP_DIRECTORY . basename($file);
        $serverFilePath = $file;

        $result = ftp_nb_get($this->connectionId, $loaclFilePath, $serverFilePath, FTP_BINARY);

        while ($result == FTP_MOREDATA) {
            if (!file_exists($loaclFilePath)) {
                break;
            }
            $result = ftp_nb_continue($this->connectionId);
        }

        return $result == FTP_FINISHED ? true : false;
    }

    private function saveStateData($uploadId, $offset)
    {
        $this->delegate->saveStateData($uploadId, $offset);
    }

    public function uploadFile($filePath)
    {
        $rootPath = rtrim($this->_activeDirectory, '/') . '/' . SGConfig::get('SG_STORAGE_BACKUPS_FOLDER_NAME');
        $path     = rtrim($rootPath, '/') . '/' . basename($filePath);

        $fileSize = backupGuardRealFilesize($filePath);

        $this->delegate->willStartUpload();

        $fp = @fopen($filePath, 'rb');

        ftp_set_option($this->connectionId, FTP_AUTOSEEK, true);

        $ret = ftp_nb_fput($this->connectionId, $path, $fp, FTP_BINARY, FTP_AUTORESUME);
        SGPing::update();

        //get how many bytes were uploaded
        $this->offset = $this->state->getOffset();
        while ($ret == FTP_MOREDATA) {
            $ret = ftp_nb_continue($this->connectionId);

            $progress = ftell($fp) * 100.0 / $fileSize;
            try {
                $this->delegate->updateProgressManually($progress);
            } catch (SGException $e) {
                @fclose($fp);
                ftp_close($this->connectionId);
                throw $e;
            }

            SGPing::update();

            $shouldReload = $this->delegate->shouldReload();
            if ($shouldReload && backupGuardIsReloadEnabled()) {
                $this->saveStateData(null, $this->offset);
                @fclose($fp);
                ftp_close($this->connectionId);
                $this->reload();
            }
        }

        @fclose($fp);
        ftp_close($this->connectionId);

        if ($ret != FTP_FINISHED) {
            throw new SGExceptionServerError('The file was not uploaded correctly.');
        }
    }

    public function reload()
    {
        $this->delegate->reload();
    }

    public function deleteFile($fileName)
    {
        return @ftp_delete($this->connectionId, $fileName);
    }

    public function deleteFolder($folderName)
    {
        return $this->deleteFolderWithFiles($folderName);
    }

    private function deleteFolderWithFiles($directory)
    {
        if (empty($directory)) {
            return false;
        }

        if (!(@ftp_rmdir($this->connectionId, $directory) || @ftp_delete($this->connectionId, $directory))) {
            //if the attempt to delete fails, get the file listing
            $fileList = @ftp_nlist($this->connectionId, $directory);

            //loop through the file list and recursively delete the file in the list
            foreach ($fileList as $file) {
                if ($file == '.' || $file == '..') {
                    continue;
                }

                $this->deleteFolderWithFiles($directory . '/' . $file);
            }

            //if the file list is empty, delete the directory we passed
            $this->deleteFolderWithFiles($directory);
        }

        return true;
    }
}
