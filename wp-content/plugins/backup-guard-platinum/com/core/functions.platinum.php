<?php
function backupGuardGetS3HTML()
{
	?>
	<div class="form-group">
		<label class="col-md-3 control-label" for="bucketType"><?php _backupGuardT('Server *')?></label>
		<div class="col-md-8">
			<select class="form-control input-md" id="bucketType" name="bucketType">
				<option value="amazon">Amazon</option>
				<!--option value="google">Google</option-->
				<option value="custom"><?php _backupGuardT('Custom')?></option>

			</select>
		</div>
	</div>

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

	<div class="form-group form-group-google">
		<label class="col-md-3 control-label" for="googleBucketRegion"><?php _backupGuardT('Region *')?></label>
		<div class="col-md-8">
			<select class="form-control input-md" id="googleBucketRegion" name="googleBucketRegion">
				<?php
				for($i = 0; $i < count($GLOBALS['SG_BACKUP_GOOGLE_REGIONS']); $i++){
					?>
					<option value="<?php echo $GLOBALS['SG_BACKUP_GOOGLE_REGIONS'][$i]["region"] ?>"><?php echo $GLOBALS['SG_BACKUP_GOOGLE_REGIONS'][$i]["name"] ?></option>
					<?php
				}
				?>
			</select>
		</div>
	</div>

	<div class="form-group form-group-custom">
		<label class="col-md-3 control-label" for="customBucketRegion"><?php _backupGuardT('URL *')?></label>
		<div class="col-md-8">
			<input id="customBucketRegion" name="customBucketRegion" type="text" class="form-control">
		</div>
	</div>
	<?php
}
