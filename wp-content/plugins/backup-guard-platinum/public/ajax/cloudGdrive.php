<?php
require_once(dirname(__FILE__).'/../boot.php');
require_once(SG_STORAGE_PATH.'SGGoogleDriveStorage.php');

@session_start();
unset($_SESSION['sg_google_drive_access_token']);
unset($_SESSION['sg_google_drive_expiration_ts']);

if(backupGuardIsAjax()) {
	SGConfig::set('SG_GOOGLE_DRIVE_REFRESH_TOKEN','');
	SGConfig::set('SG_GOOGLE_DRIVE_CONNECTION_STRING','');

	if(isset($_POST['cancel'])) {
		die('{"success":1}');
	}
}

$dp = new SGGoogleDriveStorage();
try {
	$dp->connect();
}
catch(Exception $e) {
	header("Location: ".SG_PUBLIC_CLOUD_URL);
}

if($dp->isConnected()) {
	header("Location: ".SG_PUBLIC_CLOUD_URL);
	exit();
}
