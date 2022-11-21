<?php
require_once(dirname(__FILE__) . '/../boot.php');
require_once(SG_BACKUP_PATH.'SGBackup.php');

$backup = new SGBackup();
$error = array(
	'error' => 1
);

if (backupGuardIsAjax() && count($_POST)) {
	try {
		$listOfFiles = $backup->listStorage($_POST['storage']);
	}
	catch (Exception $exp) {
		die(json_encode($error));
	}
	
	die(json_encode($listOfFiles));
}
