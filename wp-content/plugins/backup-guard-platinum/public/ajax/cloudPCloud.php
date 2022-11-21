<?php
require_once(dirname(__FILE__).'/../boot.php');
require_once(SG_STORAGE_PATH.'SGPCloudStorage.php');
@session_start();
unset($_SESSION['sg_p_cloud_access_token']);
unset($_SESSION['sg_p_cloud_expiration_ts']);

if ( backupGuardIsAjax() ) {
	SGConfig::set( 'SG_P_CLOUD_ACCESS_TOKEN', '' );
	SGConfig::set( 'SG_P_CLOUD_CONNECTION_STRING', '' );
	SGConfig::set( 'SG_P_CLOUD_LOCATION_ID', '' );

	if ( isset( $_POST['cancel'] ) ) {
		die( '{"success":1}' );
	}
}

$pCloud = new SGPCloudStorage();
try {
	$pCloud->connect();
}
catch(Exception $e) {
	header("Location: ".SG_PUBLIC_CLOUD_URL);
}

if($pCloud->isConnected()) {
	header("Location: ".SG_PUBLIC_CLOUD_URL);
	exit();
}
