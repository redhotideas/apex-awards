<?php
require_once(dirname(__FILE__).'/../boot.php');
require_once(SG_LIB_PATH.'SGAuthClient.php');

if (backupGuardIsAjax() && count($_POST)) {
	$email = $_POST['email'];
	// we added slash ex for this password dT5*jn'F5y-Rm@7Gv
	$password = sha1(stripslashes($_POST['password']));

	$auth = SGAuthClient::getInstance();
	$res = $auth->login($email, $password);
	if ($res) {
		$user = $auth->getCurrentUser();
		SGConfig::set('SG_LOGGED_USER', serialize($user), true);
		die('{"status":0}');
	}

	die('{"status":1}');
}
