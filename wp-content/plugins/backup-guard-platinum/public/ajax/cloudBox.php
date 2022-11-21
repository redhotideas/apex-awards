<?php
require_once(dirname(__FILE__).'/../boot.php');
require_once(SG_STORAGE_PATH.'SGBoxStorage.php');
@session_start();
unset($_SESSION['sg_box_access_token']);
unset($_SESSION['sg_box_expiration_ts']);

if ( backupGuardIsAjax() ) {
	SGConfig::set( 'SG_BOX_REFRESH_TOKEN', '' );
	SGConfig::set( 'SG_BOX_CONNECTION_STRING', '' );

	if ( isset( $_POST['cancel'] ) ) {
		die( '{"success":1}' );
	}
}

$box = new SGBoxStorage();
try {
	$box->connect();
}
catch(Exception $e) {
	header("Location: ".SG_PUBLIC_CLOUD_URL);
}

if($box->isConnected()) {
	header("Location: ".SG_PUBLIC_CLOUD_URL);
	exit();
}
