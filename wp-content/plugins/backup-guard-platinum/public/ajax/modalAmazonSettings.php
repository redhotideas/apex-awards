<?php
    require_once(dirname(__FILE__).'/../boot.php');
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title"><?php echo (backupGuardIsAccountGold()? 'Amazon ':'').'S3 settings'?></h4>
        </div>
        <form class="form-horizontal" data-sgform="ajax" data-type="storeAmazonSettings">
            <div class="modal-body sg-modal-body">
                <div class="col-md-12">

					<?php
						if(function_exists("backupGuardGetS3HTML")){
							backupGuardGetS3HTML();
						}
                        else{
							backupGuardGetAmazonS3HTML();
						}
					?>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="amazonBucket"><?php _backupGuardT('Bucket *')?></label>
                        <div class="col-md-8">
                            <input id="amazonBucket" name="amazonBucket" type="text" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="amazonAccessKey"><?php _backupGuardT('Access Key *')?></label>
                        <div class="col-md-8">
                            <input id="amazonAccessKey" name="amazonAccessKey" type="text" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="amazonSecretAccessKey"><?php _backupGuardT('Secret Access Key *')?></label>
                        <div class="col-md-8">
                            <input id="amazonSecretAccessKey" name="amazonSecretAccessKey" type="text" class="form-control input-md">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <span class="modal-close-button" data-dismiss="modal"><?php _backupGuardT('Close')?></span>
                <button type="button" class="btn btn-primary" onclick="sgBackup.storeAmazonSettings()"><?php _backupGuardT('Save')?></button>
            </div>
        </form>
    </div>
</div>
