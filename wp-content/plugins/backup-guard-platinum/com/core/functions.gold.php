<?php

function backupGuardGetCustomPrefix()
{
	$sgBackupPrefix = SGConfig::get('SG_BACKUP_FILE_NAME_PREFIX')?SGConfig::get('SG_BACKUP_FILE_NAME_PREFIX'):SG_BACKUP_FILE_NAME_DEFAULT_PREFIX;

	return $sgBackupPrefix;
}

function backupGuardOutdatedBackupsCleanup($path)
{
	if (SGBoot::isFeatureAvailable('NUMBER_OF_BACKUPS_TO_KEEP')) {
		$amountOfBackupsToKeep = SGConfig::get('SG_AMOUNT_OF_BACKUPS_TO_KEEP')?SGConfig::get('SG_AMOUNT_OF_BACKUPS_TO_KEEP'):SG_NUMBER_OF_BACKUPS_TO_KEEP;
		$backups = backupGuardScanBackupsDirectory($path);
		while (count($backups) > $amountOfBackupsToKeep) {
			$backup = key($backups);
			array_shift($backups);
			SGBackup::deleteBackup($backup);
		}
	}
}

function backupGuardGetAmazonS3HTML()
{
	?>

	<div class="form-group form-group-amazon">
		<label class="col-md-3 control-label" for="amazonBucketRegion"><?php _backupGuardT('Region *')?></label>
		<div class="col-md-8">
			<select class="form-control input-md" id="amazonBucketRegion" name="amazonBucketRegion">
				<?php
				for($i = 0; $i < count($GLOBALS['SG_BACKUP_AMAZON_REGIONS']); $i++){
					?>
					<option value="<?php echo $GLOBALS['SG_BACKUP_AMAZON_REGIONS'][$i]["region"] ?>"><?php echo $GLOBALS['SG_BACKUP_AMAZON_REGIONS'][$i]["name"] ?></option>
					<?php
				}
				?>
			</select>
		</div>
	</div>


	<?php
}
