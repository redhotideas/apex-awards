<?php

require_once(dirname(__FILE__) . '/../boot.php');

if (backupGuardIsAjax()) {
    $_POST = backupGuardRemoveSlashes($_POST);
    if (isset($_POST['cloudFolder'])) {
        $cloudFolderName = trim($_POST['cloudFolder']);
        if (!empty($cloudFolderName)) {
            if (!preg_match("#^[a-zA-Z0-9_]+$#", $cloudFolderName)) {
                die('{"error":"' . _backupGuardT('Destination folder: type only letters, numbers and "_".', true) . '"}');
            }
            $cloudFolderName = backupGuardSanitizeTextField($cloudFolderName);
            SGConfig::set('SG_STORAGE_BACKUPS_FOLDER_NAME', $cloudFolderName);
            die('{"success":1}');
        }
    }
    die('{"error":"' . _backupGuardT('Destination folder is required.', true) . '"}');
}
