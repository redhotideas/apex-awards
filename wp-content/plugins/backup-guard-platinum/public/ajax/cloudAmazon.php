<?php
    require_once(dirname(__FILE__).'/../boot.php');
    require_once(SG_STORAGE_PATH.'SGAmazonStorage.php');

    if(backupGuardIsAjax() && count($_POST)) {
        $_POST = backupGuardRemoveSlashes($_POST);
        $_POST = backupGuardSanitizeTextField($_POST);

        if(isset($_POST['cancel'])) {
            SGConfig::set('SG_AMAZON_BUCKET',false);
            SGConfig::set('SG_AMAZON_KEY',false);
            SGConfig::set('SG_AMAZON_SECRET_KEY',false);
            SGConfig::set('SG_AMAZON_BUCKET_REGION', false);
            SGConfig::set('SG_STORAGE_AMAZON_CONNECTED', false);
            die('{"success":1}');
        }

        $options = $_POST;
        $error = array();
        $success = array('success'=>1);

        if(!isset($options['amazonBucket'])) {
            array_push($error,_backupGuardT('Bucket field is required.', true));
        }
        if(!isset($options['amazonAccessKey'])) {
            array_push($error,_backupGuardT('Access key field is required.', true));
        }
        if(!isset($options['amazonSecretAccessKey'])) {
            array_push($error,_backupGuardT('Secret access key field is required.', true));
        }

        if(!isset($options['bucketType'])) {
			$options['bucketType'] = "amazon";
		}

        $regionName = $options['bucketType']."BucketRegion";

        if(!isset($options[$regionName])) {
            array_push($error,_backupGuardT('Bucket region field is required.', true));
        }

        //If there are errors do not continue
        if(count($error)) {
            die(json_encode($error));
        }

        //Try to connect
        try {
            SGConfig::set('SG_AMAZON_BUCKET', $options['amazonBucket']);
            SGConfig::set('SG_AMAZON_KEY', $options['amazonAccessKey']);
            SGConfig::set('SG_AMAZON_SECRET_KEY', $options['amazonSecretAccessKey']);
            SGConfig::set('SG_AMAZON_BUCKET_REGION', $options[$regionName]);

            $amazon = new SGAmazonStorage();
            if ($amazon->connect()) {
                SGConfig::set('SG_STORAGE_AMAZON_CONNECTED', true);
            }
            else {
                SGConfig::set('SG_STORAGE_AMAZON_CONNECTED', false);
                array_push($error, _backupGuardT('Could not connect to the server. Please check given details', true));
                die(json_encode($error));
            }
            die(json_encode($success));
        }
        catch(SGException $exception) {
            array_push($error,$exception->getMessage());
            die(json_encode($error));
        }
    }
