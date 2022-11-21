<?php

require_once(dirname(__FILE__) . '/../boot.php');
require_once(SG_BACKUP_PATH . 'SGBackup.php');

$directories = SG_BACKUP_FILE_PATHS;
$directories = explode(',', $directories);
$dropbox     = SGConfig::get('SG_DROPBOX_ACCESS_TOKEN');
$gdrive      = SGConfig::get('SG_GOOGLE_DRIVE_REFRESH_TOKEN');
$ftp         = SGConfig::get('SG_STORAGE_FTP_CONNECTED');
$amazon      = SGConfig::get('SG_AMAZON_KEY');
$oneDrive    = SGConfig::get('SG_ONE_DRIVE_REFRESH_TOKEN');
$pCloud      = SGConfig::get('SG_P_CLOUD_ACCESS_TOKEN');
$box         = SGConfig::get('SG_BOX_REFRESH_TOKEN');
$backupGuard = SGConfig::get('SG_BACKUPGUARD_UPLOAD_ACCESS_TOKEN');
$id          = '';

$hoursSelectElement = array(
    '0' => '12 Midnight',
    '1' => '1 AM',
    '2' => '2 AM',
    '3' => '3 AM',
    '4' => '4 AM',
    '5' => '5 AM',
    '6' => '6 AM',
    '7' => '7 AM',
    '8' => '8 AM',
    '9' => '9 AM',
    '10' => '10 AM',
    '11' => '11 AM',
    '12' => '12 Noon',
    '13' => '1 PM',
    '14' => '2 PM',
    '15' => '3 PM',
    '16' => '4 PM',
    '17' => '5 PM',
    '18' => '6 PM',
    '19' => '7 PM',
    '20' => '8 PM',
    '21' => '9 PM',
    '22' => '10 PM',
    '23' => '11 PM'
);

$intervalSelectElement = array(
    BG_SCHEDULE_INTERVAL_HOURLY => 'Hour',
    BG_SCHEDULE_INTERVAL_DAILY => 'Day',
    BG_SCHEDULE_INTERVAL_WEEKLY => 'Week',
    BG_SCHEDULE_INTERVAL_MONTHLY => 'Month',
    BG_SCHEDULE_INTERVAL_YEARLY => 'Year'
);

$selectDayOfWeek = array(
    1 => 'Mon',
    2 => 'Tue',
    3 => 'Wed',
    4 => 'Thu',
    5 => 'Fri',
    6 => 'Sat',
    7 => 'Sun'
);

$selectMonthsOfYear = array(
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December'
);

$sgb = new SGBackup();

if (isset($_GET['param'])) {
    $id = (int) $_GET['param'];
}

$scheduleParams = $sgb->getScheduleParamsById($id);
$scheduleParams = backupGuardParseBackupOptions($scheduleParams);

?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><?php _backupGuardT('Schedule settings') ?></h4>
        </div>
        <form class="form-horizontal" method="post" data-sgform="ajax" data-type="schedule">
            <input id="sg-schedule-id" name="sg-schedule-id" value="<?php echo $id ?>" hidden>
            <div class="modal-body sg-modal-body">
                <div class="sg-schedule-settings">
                    <!-- Schedule label -->
                    <div class="form-group">
                        <label class="col-md-4 sg-control-label"
                               for="sg-schedule-label"><?php _backupGuardT('Schedule label') ?></label>
                        <div class="col-md-8">
                            <input class="form-control sg-backup-input" name="sg-schedule-label" id="sg-schedule-label"
                                   value="<?php echo esc_html($scheduleParams['label']) ?>">
                        </div>
                    </div>
                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 sg-control-label"
                               for="sg-schedule-interval"><?php _backupGuardT('Perform backup every') ?></label>
                        <div class="col-md-8">
                            <?php echo selectElement($intervalSelectElement, array('id' => 'sg-schedule-interval', 'name' => 'scheduleInterval', 'class' => 'form-control'), '', esc_html($scheduleParams['interval'])); ?>
                        </div>
                    </div>
                    <!-- Month of year -->
                    <div class="form-group" id="sg-schedule-month-of-year-select">
                        <label class="col-md-4 sg-control-label"
                               for="sg-schedule-month-of-year"><?php _backupGuardT('Month of year') ?></label>
                        <div class="col-md-8">
                            <?php echo selectElement($selectMonthsOfYear, array('id' => 'sg-schedule-month-of-year', 'name' => 'sg-schedule-month-of-year', 'class' => 'form-control', 'onchange' => 'sgBackup.updateDaysOfMonth()'), '', (int) $scheduleParams['monthOfInterval']); ?>
                        </div>
                    </div>
                    <!-- Day of month -->
                    <div class="form-group" id="sg-schedule-day-of-month-select">
                        <label class="col-md-4 sg-control-label"
                               for="sg-schedule-day-of-month"><?php _backupGuardT('Day of month') ?></label>
                        <div class="col-md-8">
                            <select id="sg-schedule-day-of-month" name="sg-schedule-day-of-month" class="form-control">
                                <?php for ($i = 1; $i <= 31; $i++) : ?>
                                    <option value="<?php echo $i ?>" <?php echo $i == (int) $scheduleParams['dayOfInterval'] ? 'selected' : '' ?>><?php echo $i ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <!-- Day of week -->
                    <div class="form-group" id="sg-schedule-day-of-week-select">
                        <label class="col-md-4 sg-control-label"
                               for="sg-schedule-day-of-week"><?php _backupGuardT('Day of week') ?></label>
                        <div class="col-md-8">
                            <?php echo selectElement($selectDayOfWeek, array('id' => 'sg-schedule-day-of-week', 'name' => 'sg-schedule-day-of-week', 'class' => 'form-control'), '', (int) $scheduleParams['dayOfInterval']); ?>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group" id="sg-schedule-timezone">
                        <label class="col-md-4 sg-control-label"
                               for="sg-schedule-hour"><?php _backupGuardT('At') ?></label>
                        <div class="col-md-8">
                            <?php echo selectElement($hoursSelectElement, array('id' => 'sg-schedule-hour', 'name' => 'scheduleHour', 'class' => 'form-control'), '', (int) $scheduleParams['intervalHour']); ?>
                        </div>
                    </div>
                    <!-- Multiple Radios -->
                    <div class="form-group sg-custom-backup-schedule">
                        <div class="col-md-8 col-md-offset-4">
                            <label><?php _backupGuardT('Backup options'); ?></label>
                            <div class="radio sg-no-padding-top">
                                <label for="fullbackup-radio">
                                    <input type="radio" name="backupType" id="fullbackup-radio" value="1" checked>
                                    <?php _backupGuardT('Full backup'); ?>
                                </label>
                            </div>
                            <div class="radio sg-no-padding-top">
                                <label for="custombackup-radio">
                                    <input type="radio" name="backupType" id="custombackup-radio"
                                           value="2" <?php echo $scheduleParams['isCustomBackup'] ? 'checked' : '' ?>>
                                    <?php _backupGuardT('Custom backup'); ?>
                                </label>
                            </div>
                            <div class="col-md-12 sg-custom-backup <?php echo $scheduleParams['isCustomBackup'] ? 'sg-open' : '' ?>">

                                <?php backupGuardGetBackupTablesHTML($scheduleParams['isDatabaseSelected']); ?>
                                <div class="checkbox">
                                    <label for="custombackupfiles-chbx">
                                        <input type="checkbox" name="backupFiles" class="sg-custom-option"
                                               id="custombackupfiles-chbx" <?php echo $scheduleParams['isFilesSelected'] ? 'checked' : '' ?>>
                                        <span class="sg-checkbox-label-text"><?php _backupGuardT('Backup files'); ?></span>
                                    </label>
                                    <!--Files-->
                                    <div class="col-md-12 sg-checkbox sg-custom-backup-files <?php echo $scheduleParams['isFilesSelected'] ? 'sg-open' : '' ?>">
                                        <?php foreach ($directories as $directory) : ?>
                                            <div class="checkbox">
                                                <label for="<?php echo 'sg' . $directory ?>">
                                                    <input type="checkbox" name="directory[]"
                                                           id="<?php echo 'sg' . $directory; ?>"
                                                           value="<?php echo $directory; ?>"
                                                        <?php if ($directory == 'wp-content' && in_array($directory, $scheduleParams['selectedDirectories'])) {
                                                            echo 'checked=checked';
                                                        } elseif ($directory != 'wp-content' && !in_array($directory, $scheduleParams['excludeDirectories'])) {
                                                            echo 'checked=checked';
                                                        } ?> >
                                                    <span class="sg-checkbox-label-text"><?php echo basename($directory); ?></span>
                                                </label>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!--Cloud-->
                            <?php if (SGBoot::isFeatureAvailable('STORAGE')) : ?>
                                <div class="checkbox">
                                    <label for="custombackupcloud-chbx">
                                        <input type="checkbox" name="backupCloud"
                                               id="custombackupcloud-chbx" <?php echo count($scheduleParams['selectedClouds']) ? 'checked' : '' ?>>
                                        <span class="sg-checkbox-label-text"><?php _backupGuardT('Upload to cloud'); ?></span>
                                    </label>
                                    <!--Storages-->
                                    <div class="col-md-12 sg-checkbox sg-custom-backup-cloud <?php echo count($scheduleParams['selectedClouds']) ? 'sg-open' : ''; ?>">
                                        <?php if (SGBoot::isFeatureAvailable('BACKUP_GUARD') && SG_SHOW_BACKUPGUARD_CLOUD) : ?>
                                            <div class="checkbox">
                                                <label for="cloud-backup-guard" <?php echo empty($backupGuard) ? 'data-toggle="tooltip" data-placement="right" title="' . _backupGuardT('BackupGuard is not active.', true) . '"' : '' ?>>
                                                    <input type="checkbox" name="backupStorages[]"
                                                           id="cloud-backup-guard"
                                                           value="<?php echo SG_STORAGE_BACKUP_GUARD ?>" <?php echo in_array(SG_STORAGE_BACKUP_GUARD, $scheduleParams['selectedClouds']) ? 'checked="checked"' : '' ?> <?php echo empty($backupGuard) ? 'disabled="disabled"' : '' ?>>
                                                    <?php echo 'BackupGuard' ?>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (SGBoot::isFeatureAvailable('FTP')) : ?>
                                            <div class="checkbox">
                                                <label for="cloud-ftp" <?php echo empty($ftp) ? 'data-toggle="tooltip" data-placement="right" title="' . _backupGuardT('FTP is not active.', true) . '"' : '' ?>>
                                                    <input type="checkbox" name="backupStorages[]" id="cloud-ftp"
                                                           value="<?php echo SG_STORAGE_FTP ?>" <?php echo in_array(SG_STORAGE_FTP, $scheduleParams['selectedClouds']) ? 'checked="checked"' : '' ?> <?php echo empty($ftp) ? 'disabled="disabled"' : '' ?>>
                                                    <span class="sg-checkbox-label-text"><?php echo 'FTP' ?></span>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (SGBoot::isFeatureAvailable('DROPBOX')) : ?>
                                            <div class="checkbox">
                                                <label for="cloud-dropbox" <?php echo empty($dropbox) ? 'data-toggle="tooltip" data-placement="right" title="' . _backupGuardT('Dropbox is not active.', true) . '"' : '' ?>>
                                                    <input type="checkbox" name="backupStorages[]" id="cloud-dropbox"
                                                           value="<?php echo SG_STORAGE_DROPBOX ?>" <?php echo in_array(SG_STORAGE_DROPBOX, $scheduleParams['selectedClouds']) ? 'checked="checked"' : '' ?> <?php echo empty($dropbox) ? 'disabled="disabled"' : '' ?>>
                                                    <span class="sg-checkbox-label-text"><?php echo 'Dropbox' ?></span>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (SGBoot::isFeatureAvailable('GOOGLE_DRIVE')) : ?>
                                            <div class="checkbox">
                                                <label for="cloud-gdrive" <?php echo empty($gdrive) ? 'data-toggle="tooltip" data-placement="right" title="' . _backupGuardT('Google  Drive is not active.', true) . '"' : '' ?>>
                                                    <input type="checkbox" name="backupStorages[]" id="cloud-gdrive"
                                                           value="<?php echo SG_STORAGE_GOOGLE_DRIVE ?>" <?php echo in_array(SG_STORAGE_GOOGLE_DRIVE, $scheduleParams['selectedClouds']) ? 'checked="checked"' : '' ?> <?php echo empty($gdrive) ? 'disabled="disabled"' : '' ?>>
                                                    <span class="sg-checkbox-label-text"><?php echo 'Google Drive' ?></span>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (SGBoot::isFeatureAvailable('AMAZON')) : ?>
                                            <div class="checkbox">
                                                <label for="cloud-amazon" <?php echo empty($amazon) ? 'data-toggle="tooltip" data-placement="right" title="' . _backupGuardT((backupGuardIsAccountGold() ? 'Amazon ' : '') . 'S3 Drive is not active.', true) . '"' : '' ?>>
                                                    <input type="checkbox" name="backupStorages[]" id="cloud-amazon"
                                                           value="<?php echo SG_STORAGE_AMAZON ?>" <?php echo in_array(SG_STORAGE_AMAZON, $scheduleParams['selectedClouds']) ? 'checked="checked"' : '' ?> <?php echo empty($amazon) ? 'disabled="disabled"' : '' ?>>
                                                    <span class="sg-checkbox-label-text"><?php echo (backupGuardIsAccountGold() ? 'Amazon ' : '') . 'S3' ?></span>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (SGBoot::isFeatureAvailable('ONE_DRIVE')) : ?>
                                            <div class="checkbox">
                                                <label for="cloud-one-drive" <?php echo empty($oneDrive) ? 'data-toggle="tooltip" data-placement="right" title="' . _backupGuardT('One Drive is not active.', true) . '"' : '' ?>>
                                                    <input type="checkbox" name="backupStorages[]" id="cloud-one-drive"
                                                           value="<?php echo SG_STORAGE_ONE_DRIVE ?>" <?php echo in_array(SG_STORAGE_ONE_DRIVE, $scheduleParams['selectedClouds']) ? 'checked="checked"' : '' ?> <?php echo empty($oneDrive) ? 'disabled="disabled"' : '' ?>>
                                                    <span class="sg-checkbox-label-text"><?php echo 'One Drive' ?></span>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (SGBoot::isFeatureAvailable('P_CLOUD')) : ?>
                                            <div class="checkbox">
                                                <label for="cloud-p-cloud" <?php echo empty($pCloud) ? 'data-toggle="tooltip" data-placement="right" title="' . _backupGuardT('pCloud is not active.', true) . '"' : '' ?>>
                                                    <input type="checkbox" name="backupStorages[]" id="cloud-p-cloud"
                                                           value="<?php echo SG_STORAGE_P_CLOUD ?>" <?php echo in_array(SG_STORAGE_P_CLOUD, $scheduleParams['selectedClouds']) ? 'checked="checked"' : '' ?> <?php echo empty($pCloud) ? 'disabled="disabled"' : '' ?>>
                                                    <span class="sg-checkbox-label-text"><?php echo 'pCloud' ?></span>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (SGBoot::isFeatureAvailable('BOX')) : ?>
                                            <div class="checkbox">
                                                <label for="cloud-box" <?php echo empty($box) ? 'data-toggle="tooltip" data-placement="right" title="' . _backupGuardT('box.com is not active.', true) . '"' : '' ?>>
                                                    <input type="checkbox" name="backupStorages[]" id="cloud-box"
                                                           value="<?php echo SG_STORAGE_BOX ?>" <?php echo in_array(SG_STORAGE_BOX, $scheduleParams['selectedClouds']) ? 'checked="checked"' : '' ?> <?php echo empty($box) ? 'disabled="disabled"' : '' ?>>
                                                    <span class="sg-checkbox-label-text"><?php echo 'box.com' ?></span>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php endif; ?>
                            <!-- Background mode -->
                            <?php if (SGBoot::isFeatureAvailable('BACKGROUND_MODE')) : ?>
                                <div class="checkbox">
                                    <label for="background-chbx">
                                        <input type="checkbox" name="backgroundMode"
                                               id="background-chbx" <?php echo $scheduleParams['isBackgroundMode'] ? 'checked' : '' ?>>
                                        <span class="sg-checkbox-label-text"><?php _backupGuardT('Background mode'); ?></span>
                                    </label>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="modal-close-button schedule-modal-close" data-dismiss="modal">Close</span>
                <button type="button" id="sg-save-schedule" onclick="sgBackup.schedule()"
                        class="btn btn-success pull-right"><?php _backupGuardT('Save'); ?></button>
            </div>
        </form>
    </div>
</div>
