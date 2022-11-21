<?php
add_action('wp_ajax_backup_guard_cloudGdrive', 'backup_guard_cloud_gdrive');
add_action('wp_ajax_backup_guard_cloudOneDrive', 'backup_guard_cloud_oneDrive');
add_action('wp_ajax_backup_guard_cloudPCloud', 'backup_guard_cloud_pCloud');
add_action('wp_ajax_backup_guard_cloudBox', 'backup_guard_cloud_box');
add_action('wp_ajax_backup_guard_cloudFtp', 'backup_guard_cloud_ftp');
add_action('wp_ajax_backup_guard_cloudAmazon', 'backup_guard_cloud_amazon');

add_action('admin_post_backup_guard_cloudGdrive', 'backup_guard_cloud_gdrive');
add_action('admin_post_backup_guard_cloudOneDrive', 'backup_guard_cloud_oneDrive');
add_action('admin_post_backup_guard_cloudPCloud', 'backup_guard_cloud_pCloud');
add_action('admin_post_backup_guard_cloudBox', 'backup_guard_cloud_box');


function backup_guard_cloud_ftp()
{
    require_once(SG_PUBLIC_AJAX_PATH.'cloudFtp.php');
}

function backup_guard_cloud_amazon()
{
    require_once(SG_PUBLIC_AJAX_PATH.'cloudAmazon.php');
}

function backup_guard_cloud_gdrive()
{
    check_ajax_referer('backupGuardAjaxNonce', 'token');
    require_once(SG_PUBLIC_AJAX_PATH.'cloudGdrive.php');
}

function backup_guard_cloud_oneDrive()
{
    require_once(SG_PUBLIC_AJAX_PATH.'cloudOneDrive.php');
}

function backup_guard_cloud_pCloud()
{
	require_once(SG_PUBLIC_AJAX_PATH.'cloudPCloud.php');
}
function backup_guard_cloud_box()
{
	require_once(SG_PUBLIC_AJAX_PATH.'cloudBox.php');
}