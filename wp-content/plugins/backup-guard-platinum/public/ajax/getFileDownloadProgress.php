<?php
	require_once(dirname(__FILE__).'/../boot.php');

	if(backupGuardIsAjax() && count($_POST))
	{
		$file = basename($_POST['file']);
		$size = $_POST['size'];

		if(file_exists(SG_BACKUP_DIRECTORY.$file)) {
			$currentFileSize = backupGuardRealFilesize(SG_BACKUP_DIRECTORY.$file);
			$progress = ($currentFileSize/($size))*100;
		}
		else {
			$progress = 0;
		}

		die(json_encode(array(
			'progress' => $progress
		)));
	}
