<?php

require_once(dirname(__FILE__) . '/boot.php');
require_once(SG_LIB_PATH . 'SGAuthClient.php');
require_once(SG_PUBLIC_INCLUDE_PATH . 'header-new.php');

$auth     = SGAuthClient::getInstance();
$products = $auth->getAllUserProducts();
?>
<div class="bg-content bg-content-full-width bg-content-dark1">
    <div class="bg-license-container">
        <p class="bg-text-center">
            <img width="180px" src="<?php echo SG_PUBLIC_URL; ?>img/sgBackupVerticalLogo.png">
        </p>
        <div class="bg-license-content sg-wrapper-less">
            <?php if ($auth->isAnyLicenseAvailable($products)) : ?>
                <h1> <?php _backupGuardT('Choose and assign your license') ?></h1>
                <p>
                    <?php _backupGuardT('Maybe you forgot to link a license to this domain. If that is the case, please link one license below:') ?>
                </p>
                <p>
                    <select id="product" class="bg-form-control">
                        <option value="0"><?php _backupGuardT('Choose a license') ?></option>
                        <?php foreach ($products as $product) : ?>
                            <?php $availableLicenses = $product['licenses'] ? $product['licenses'] - $product['used_licenses'] : 'Unlimited'; ?>
                            <option data-licenses="<?php echo $availableLicenses; ?>"
                                    value="<?php echo $product['id']; ?>">
                                <?php echo $product['display_name'] . ' - ' . $availableLicenses; ?> license(s)
                                available
                            </option>
                        <?php endforeach; ?>
                    </select>
                </p>
                <p>
                    <button id="link-btn"
                            class="btn btn-success"><?php _backupGuardT('Link this domain now') ?></button>
                </p>
            <?php else : ?>
                <?php if (empty($products)) : ?>
                    <h1> <?php _backupGuardT('You don’t have any license to assign.') ?></h1>
                    <p>
                        <?php _backupGuardT(' You don’t have any valid license to assign. Please update your plugin package or login to your dashboard to upgrade your subscription.') ?>
                    </p>
                <?php else : ?>
                    <h1> <?php _backupGuardT('You have used all your licenses.') ?></h1>
                    <p>
                        <?php _backupGuardT('You have already assigned all your licenses. Please login to your dashboard to manage the licenses or upgrade your account to higher plan for more licenses.') ?>
                    </p>
                <?php endif; ?>
                <p class="bg-license-btn-wrapper">
                    <a href="<?php echo SG_BACKUP_ADMIN_LOGIN_URL; ?>" target="_blank"
                       class="btn btn-success"><?php _backupGuardT('Login to dashboard') ?></a>
                    <a href="javascript:void(0)" class="btn btn-primary"
                       onclick="sgBackup.logout()"><?php _backupGuardT('Log out') ?></a>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
require_once(SG_PUBLIC_INCLUDE_PATH . 'footer-new.php');
?>
