<?php

require_once(SG_STORAGE_PATH.'SGStorage.php');
require_once (SG_LIB_PATH."pCloud/autoload.php");


class SGPCloudStorage extends SGStorage
{
	private $client = null;

	public function init()
	{
		//check if curl extension is loaded
		SGBoot::checkRequirement('curl');
	}

	public function connect()
	{
		if ($this->isConnected()) {
			return;
		}

		$authCode = $this->getAuthCodeFromURL($cancel);
		$locationID = $this->getLocationIdFromURL();
		if ($cancel) {
			throw new SGExceptionMethodNotAllowed('User did not allow access');
		}

		$this->auth($locationID, $authCode);
	}

	public function connectOffline()
	{
		if ($this->isConnected()) {
			return;
		}

		/* refresh token not provided by pCloud, because of that we use access token to connect */

		$refreshToken = $this->getRefreshToken();

		if (!$refreshToken) {
			throw new SGExceptionNotFound('Refresh token not found');
		}

		$client = $this->getClient();
		$locationID = $this->getLocationId();
		$client->setLocationId($locationID);
		$client->setAccessToken($refreshToken);

		$this->setAccessToken($refreshToken, time()+3600);

		$this->connected = true;
	}

	/* Check if it is already connected */
	public function checkConnected()
	{
		$accessToken = $this->getAccessToken($expirationTs);
		$this->connected = ($accessToken&&$expirationTs>time())?true:false;

		if ($this->connected) {
			$client = $this->getClient();
			$client->setLocationId($this->getLocationId());
			$client->setAccessToken($accessToken);
		}
	}

	private function getRefreshToken()
	{
		return SGConfig::get('SG_P_CLOUD_ACCESS_TOKEN', true);
	}

	private function setAccessToken($accessToken, $expirationTs)
	{
		$_SESSION['sg_p_cloud_access_token'] = $accessToken;
		$_SESSION['sg_p_cloud_expiration_ts'] = $expirationTs;
	}

	private function getAccessToken(&$expirationTs = 0)
	{
		$expirationTs = (int)@$_SESSION['sg_p_cloud_expiration_ts'];
		return @$_SESSION['sg_p_cloud_access_token'];
	}

	private function getLocationId() {
		if ( SGConfig::get( 'SG_P_CLOUD_LOCATION_ID' ) ) {
			return SGConfig::get( 'SG_P_CLOUD_LOCATION_ID' );
		} else {
			return '';
		}
	}



	private function auth( $locationID, $authCode = '')
	{
		$pCloudApp = $this->getClient();
		$pCloudApp->setAppKey(SG_STORAGE_P_CLOUD_CLIENT_ID);
		$pCloudApp->setAppSecret(SG_STORAGE_P_CLOUD_SECRET);
		$pCloudApp->setRedirectURI(SG_STORAGE_P_CLOUD_REDIRECT_URI);
		$pCloudApp->setState(base64_encode($this->getRefURL()));
		$pCloudApp->setLocationId($locationID);

		$authUrl = $pCloudApp->getAuthorizeCodeUrl();

		if ($authCode) {

			try {
				//exchange authorization code for access token
				$response = $pCloudApp->getTokenFromCode($authCode, $locationID);

				if ($response['access_token']) {

					$pCloudApp->setAccessToken($response['access_token']);
					$this->setAccessToken($response['access_token'], time()+3600);

					SGConfig::set('SG_P_CLOUD_ACCESS_TOKEN', $response['access_token'], true);
					SGConfig::set('SG_P_CLOUD_LOCATION_ID', $locationID);

					$user = new \pCloud\User($pCloudApp);
					$userInfo = $user->getUserInfo();
					SGConfig::set('SG_P_CLOUD_CONNECTION_STRING', json_encode($userInfo), true);


					$this->connected = true;

					return;
				}

			}
			catch (Exception $ex) {

			}
		}

		header('Location: '.$authUrl);
		exit;
	}

	/* Get list of files inside the active directory */
	public function getListOfFiles()
	{
		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		$folderTree = SG_BACKUP_DEFAULT_FOLDER_NAME;

		if (SGBoot::isFeatureAvailable('SUBDIRECTORIES')){
			$folderTree = SGConfig::get('SG_STORAGE_BACKUPS_FOLDER_NAME');
		}

		$accessToken = $this->getAccessToken();
		$client = $this->getClient();
		$client->setAccessToken($accessToken);
		$client->setLocationId($this->getLocationId());
		$folder = new \pCloud\Folder($client);

		$list = $folder->listFolder($folderTree);
		$list = $folder->getContent($list['folderid']);

		$listOfFiles = array();
		foreach($list as $k => $file) {
			$size = $file->size;
			$date = $this->standardizeFileCreationDate($file->modified);
			$name = $file->name;
			//$path = $file['parentReference']['path'];


			$listOfFiles[$name] = array(
				'id' => $file->fileid,
				'name' => $name,
				'size' => $size,
				'date' => $date,
				'path' => $folderTree.'/'.$name
			);
		}

		krsort($listOfFiles);
		return $listOfFiles;
	}

	/* Create a folder inside the active directory. If folder already exists, do nothing. */
	public function createFolder($folderPath)
	{
		// Folder tree will be created during upload
		$pCloudApp = new pCloud\App();
		$pCloudApp->setAccessToken($this->getAccessToken());
		$pCloudApp->setLocationId($this->getLocationId());
		try {
			$pCloudFolder = new pCloud\Folder($pCloudApp);
			$folderId = $pCloudFolder->create($folderPath);
		} catch (Exception $e) {
			$pCloudFolder = new pCloud\Folder($pCloudApp);
			$listFolder = $pCloudFolder->listFolder($folderPath);

			SGBackupLog::write($folderPath.' folder exists');
			$folderId = $listFolder['folderid'];
		}

		return $folderId;
	}

	/* Download file from Storage*/
	public function downloadFile($filePath, $size, $backupId = null)
	{

		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		$accessToken = $this->getAccessToken();
		$client = $this->getClient();
		$client->setAccessToken($accessToken);
		$client->setLocationId($this->getLocationId());

		$file = new \pCloud\File($client);
		$result = $file->download((int)$backupId, SG_BACKUP_DIRECTORY);

		return $result;
	}


	/* Upload local file to Storage */
	public function uploadFile($filePath)
	{
		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		if (!file_exists($filePath) || !is_readable($filePath)) {
			throw new SGExceptionNotFound('File does not exist or is not readable: '.$filePath);
		}

		//$chunkSizeBytes = 4 * 320 * 1024;
		$chunkSizeBytes = (int)getCloudUploadChunkSize() * 1024 * 1024;
		$fileSize = backupGuardRealFilesize($filePath);
		$this->delegate->willStartUpload((int)ceil($fileSize/$chunkSizeBytes));
		$filename   = basename( $filePath );

		$handle = fopen($filePath, "r");
		$byteOffset = $this->state->getOffset();
		fseek($handle, $byteOffset);

		$pCloudApp = $this->getClient();
		$pCloudApp->setAccessToken( $this->getAccessToken() );
		$pCloudApp->setLocationId( $this->getLocationId() );
		$pCloudFile = new \pCloud\File( $pCloudApp );

		if ( $this->state->getAction() == SG_STATE_ACTION_PREPARING_STATE_FILE ) {
			$byteOffset = 0;
			$uploadData = $pCloudFile->createUpload();
			$uploadId = $uploadData->uploadid;
			$params = array(
				"uploadid" => $uploadId,
				"uploadoffset" => $byteOffset
			);

		} else {
			$uploadId = $this->state->getUploadId();
			$params = array(
				"uploadid" => $uploadId,
			);
		}

		SGPing::update();

		while ($byteOffset < $fileSize) {
			$data = fread($handle, $chunkSizeBytes);
			$params['uploadoffset'] = $byteOffset;
			$pCloudFile->chunk_write($params, $data);
			SGBackupLog::write('file part uploaded');
			SGBackupLog::write('byteOffset: '.$byteOffset);
			SGBackupLog::write('------');
			$byteOffset += strlen($data);

			if (!$this->delegate->shouldUploadNextChunk()) {
				fclose($handle);
				return;
			}

			SGPing::update();

			$shouldReload = $this->shouldReload();
			if ($shouldReload && backupGuardIsReloadEnabled()) {
				SGBackupLog::write('chunk upload reload');
				$this->saveStateData($uploadId, $byteOffset);
				@fclose($handle);
				$this->reload();
			}
		}

		$pCloudFile->save($uploadId, $filename, $this->getActiveDirectory());
	}


	/* Delete file from active directory */
	public function deleteFile($fileName)
	{
		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		$accessToken = $this->getAccessToken();
		$pCloudApp = $this->getClient();
		$pCloudApp->setAccessToken($accessToken);
		$pCloudApp->setLocationId($this->getLocationId());

		$pCloudFile = new pCloud\File($pCloudApp);
		$pCloudFolder = new \pCloud\Folder($pCloudApp);
		$folderId = $pCloudFolder->search($fileName)->metadata->folderid;

		$listFolder = $pCloudFolder->getContent($folderId);
		$fileId = 0;
		foreach ($listFolder as $item) {

			if($item->name == basename($fileName)) {
				$fileId = $item->fileid;
			}
		}

		if ($fileId != 0 ) {
			$pCloudFile->delete($fileId);
		}

	}

	/* Delete folder and it's contents from active directory */
	public function deleteFolder($folderName)
	{
		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		$accessToken = $this->getAccessToken();
		$pCloudApp = $this->getClient();
		$pCloudApp->setAccessToken($accessToken);
		$pCloudApp->setLocationId($this->getLocationId());

		$pCloudFolder = new \pCloud\Folder($pCloudApp);
		$listFolder = $pCloudFolder->listFolder($folderName);

		if ( !empty( $listFolder['folderid'] ) ) {
			$folderId = $listFolder['folderid'];

			$pCloudFolder->delete($folderId);
		}

	}

	/* Search if file or folder exists in given path */
	public function fileExists($path)
	{
	}

	private function getRefURL()
	{
		$refUrl = $this->getCurrentURL();
		if (!$_SERVER['QUERY_STRING'])
		{
			$refUrl .= '?code=';
		}
		else
		{
			$refUrl .= '&code=';
		}

		return $refUrl;
	}

	private function getCurrentURL()
	{
		$http = backupGuardGetCurrentUrlScheme();
		$url = $http.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return $url;
	}

	private function getClient()
	{
		if (!$this->client) {
			$client = new pCloud\App();

			$this->client = $client;
		}

		return $this->client;
	}

	private function getAuthCodeFromURL(&$cancel = false)
	{
		$query = $_SERVER['QUERY_STRING'];
		if (!$query) {
			return '';
		}

		$query = explode('&', $query);
		$code = '';
		foreach ($query as $q) {
			$q = explode('=', $q);
			if ($q[0]=='code') {
				$code = $q[1];
			}
			else if ($q[0]=='cancel' && $q[1]=='1') {
				$cancel = true;
				break;
			}
		}

		return $code;
	}



	private function getLocationIdFromURL()
	{


		$query = $_SERVER['QUERY_STRING'];
		if (!$query) {
			return '';
		}
		$query = explode('&', $query);
		$locationID = '';
		foreach ($query as $q) {
			$q = explode('=', $q);
			if ($q[0]=='locationid') {
				$locationID = $q[1];
			}
		}

		return $locationID;
	}

	private function saveStateData( $uploadId, $offset ) {
		$token                    = $this->delegate->getToken();
		$actionId                 = $this->delegate->getActionId();
		$pendingStorageUploads    = $this->delegate->getPendingStorageUploads();
		$currentUploadChunksCount = $this->delegate->getCurrentUploadChunksCount();
		$progress                 = $this->delegate->getProgress();

		$this->state->setProgress( $progress );
		$this->state->setCurrentUploadChunksCount( $currentUploadChunksCount );
		$this->state->setStorageType( SG_STORAGE_P_CLOUD );
		$this->state->setPendingStorageUploads( $pendingStorageUploads );
		$this->state->setToken( $token );
		$this->state->setUploadId( $uploadId );
		$this->state->setOffset( $offset );
		$this->state->setAction( SG_STATE_ACTION_UPLOADING_BACKUP );
		$this->state->setActiveDirectory( $this->getActiveDirectory() );
		$this->state->setActionId( $actionId );
		$this->state->save();
	}
}
