<?php
class SGBackupCloudFtp
{
	public static function filterHost($host)
	{
		$host = str_replace('sftp://', '', $host);
		
		return $host;
	}
}
    require_once(dirname(__FILE__).'/../boot.php');
    require_once(SG_STORAGE_PATH.'SGFTPManager.php');

    if(backupGuardIsAjax() && count($_POST)) {
        $_POST = backupGuardRemoveSlashes($_POST);
        $_POST = backupGuardSanitizeTextField($_POST);

        if(isset($_POST['cancel'])) {
            SGConfig::set('SG_SFTP_KEY_FILE_NAME', false);
            SGConfig::set('SG_FTP_HOST',false);
            SGConfig::set('SG_FTP_PORT',false);
            SGConfig::set('SG_FTP_USER',false);
            SGConfig::set('SG_FTP_PASSWORD',false);
            SGConfig::set('SG_FTP_ROOT_FOLDER',false);
            SGConfig::set('SG_STORAGE_FTP_CONNECTED',false);
            SGConfig::set('SG_FTP_CONNECTION_STRING',false);
            SGConfig::set('SG_STORAGE_CONNECTION_METHOD', false);

            die('{"success":1}');
        }

        $options = $_POST;
        $error = array();
        $success = array('success'=>1);

        if(!isset($options['connectionMethod'])) {
            array_push($error,_backupGuardT('Connection method field is required.',true));
        }
        if(!isset($options['ftpHost'])) {
            array_push($error,_backupGuardT('Host field is required.',true));
        }
        if(!isset($options['ftpPort'])) {
            array_push($error,_backupGuardT('Port field is required.',true));
        }
        if(!isset($options['ftpUser'])) {
            array_push($error,_backupGuardT('User field is required.',true));
        }
        if(!isset($options['ftpRoot'])) {
            array_push($error,_backupGuardT('Root directory field is required.',true));
        }
        if(isset($options['sg-connect-with-key-file']) && !isset($options['sg-key-file'])) {
            array_push($error,_backupGuardT('Private key field is required.',true));
        }
        if(!isset($options['ftpPass']) || ($options['connectionMethod'] == "sftp" && !isset($options['sg-key-file']))) {
            array_push($error,_backupGuardT('Password field is required.',true));
        }

        //If there are errors do not continue
        if(count($error)) {
            die(json_encode($error));
        }

        //Try to connect
        try {
            SGConfig::set('SG_SFTP_KEY_FILE_NAME', '');
            if (isset($options['sg-connect-with-key-file']) && isset($options['sg-key-file'])) {
                SGConfig::set('SG_SFTP_KEY_FILE_NAME', $options['sg-key-file']);
            }
			
            $host = SGBackupCloudFtp::filterHost($options['ftpHost']);
            SGConfig::set('SG_FTP_HOST', $host);
            SGConfig::set('SG_FTP_PORT',$options['ftpPort']);
            SGConfig::set('SG_FTP_USER',$options['ftpUser']);
            SGConfig::set('SG_FTP_PASSWORD',$options['ftpPass']);
            SGConfig::set('SG_FTP_ROOT_FOLDER',$options['ftpRoot']);
            SGConfig::set('SG_STORAGE_CONNECTION_METHOD', $options['connectionMethod']);

            $storage = new SGFTPManager();
            $storage->connect();

            SGConfig::set('SG_STORAGE_FTP_CONNECTED',true);
            die(json_encode($success));
        }
        catch(SGException $exception) {
            array_push($error,$exception->getMessage());
            die(json_encode($error));
        }
    }
