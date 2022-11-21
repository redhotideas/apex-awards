<?php
require_once(dirname(__FILE__) . '/../boot.php');
require_once(SG_BACKUP_PATH.'SGBackup.php');

$backup = new SGBackup();
$success = array('success' => 1);
$error = array('error' => _backupGuardT("Something went wrong. Please try again later.", true));

if (backupGuardIsAjax() && count($_POST)) {
	$_POST = backupGuardRemoveSlashes($_POST);
	$_POST = backupGuardSanitizeTextField($_POST);

	try {
		$res = $backup->downloadBackupArchiveFromCloud(
			$_POST['path'],
			$_POST['storage'],
			$_POST['size'],
			$_POST['backupId']
		);
	}
	catch (Exception $exp) {
		die(json_encode(array(
			"error" => $exp->getMessage()
		)));
	}

	if (!$res) {
		die(json_encode($error));
	}

	die(json_encode($success));
}
