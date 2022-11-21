<?php
require_once(SG_STORAGE_PATH.'SGStorage.php');
require_once(SG_LIB_PATH.'GoogleDrive/BackupGuardGoogle_Client.php');
require_once(SG_LIB_PATH.'GoogleDrive/contrib/BackupGuardGoogle_DriveService.php');
require_once(SG_LIB_PATH.'GoogleDrive/contrib/BackupGuardGoogle_Oauth2Service.php');
require_once(SG_LIB_PATH.'GoogleDrive/io/BackupGuardGoogle_HttpRequest.php');
require_once(SG_LIB_PATH.'GoogleDrive/io/BackupGuardGoogle_HttpStreamIO.php');

class SGGoogleDriveStorage extends SGStorage
{
	private $client = null;
	private $service = null;
	private $userInfoService = null;

	public function init()
	{
		//check if curl extension is loaded
		SGBoot::checkRequirement('curl');

		$this->setActiveDirectory('root');
	}

	public function checkConnected()
	{
		$accessToken = $this->getAccessToken($expirationTs);
		$this->connected = ($accessToken&&$expirationTs>time())?true:false;

		if ($this->connected)
		{
			$client = $this->getClient();
			$client->setAccessToken($accessToken);
		}
	}

	public function connect()
	{
		if ($this->isConnected()) {
			return;
		}

		$authCode = $this->getAuthCodeFromURL($cancel);

		if ($cancel) {
			throw new SGExceptionMethodNotAllowed('User did not allow access');
		}

		$this->auth($authCode);
	}

	public function connectOffline()
	{
		if ($this->isConnected()) {
			return;
		}

		$refreshToken = $this->getRefreshToken();

		if (!$refreshToken) {
			throw new SGExceptionNotFound('Refresh token not found');
		}

		$client = $this->getClient();

		//refresh access token using the refresh token
		$client->refreshToken($refreshToken);

		//set the new access token
		$accessToken = $client->getAccessToken();
		$client->setAccessToken($accessToken);
		$this->setAccessToken($accessToken, time()+3600);

		$this->connected = true;
	}

	private function getRefreshToken()
	{
		return SGConfig::get('SG_GOOGLE_DRIVE_REFRESH_TOKEN', true);
	}

	private function auth($authCode = '')
	{
		$client = $this->getClient();
		$client->setApprovalPrompt('force');

		$redirectUri = SG_STORAGE_GOOGLE_DRIVE_REDIRECT_URI;
		$client->setRedirectUri($redirectUri);

		$refUrl = $this->getRefURL();
		$client->setState(base64_encode($refUrl));

		$authUrl = $client->createAuthUrl();

		if ($authCode) {
			try {
				//exchange authorization code for access token
				$accessToken = $client->authenticate($authCode);
				$this->setAccessToken($accessToken, time()+3600);
				$client->setAccessToken($accessToken);
				$refreshToken = json_decode($accessToken, true);
				$refreshToken = $refreshToken['refresh_token'];

				//store refresh token
				SGConfig::set('SG_GOOGLE_DRIVE_REFRESH_TOKEN', $refreshToken, true);

				$userInfo = $this->userInfoService->userinfo->get();

				if ($userInfo != null && $userInfo->getId() != null) {
					SGConfig::set('SG_GOOGLE_DRIVE_CONNECTION_STRING', $userInfo->getEmail());
				}

				$this->connected = true;
				return;
			}
			catch (Exception $ex) {

			}
		}

		header('Location: '.$authUrl);
		exit;
	}

	private function getRefURL()
	{
		$refUrl = $this->getCurrentURL();
		if (!$_SERVER['QUERY_STRING']) {
			$refUrl .= '?code=';
		}
		else {
			$refUrl .= '&code=';
		}

		return $refUrl;
	}

	private function getService()
	{
		return $this->service;
	}

	private function getClient()
	{
		if (!$this->client) {
			$client = new BackupGuardGoogle_Client();
			$client->setUseObjects(true);
			$client->setClientId(SG_STORAGE_GOOGLE_DRIVE_CLIENT_ID);
			$client->setClientSecret(SG_STORAGE_GOOGLE_DRIVE_SECRET);
			$client->setScopes(array('https://www.googleapis.com/auth/drive.file', 'email'));
			$client->setAccessType('offline');
			$client->setApprovalPrompt('auto');
			$this->client = $client;

			$this->service = new BackupGuardGoogle_DriveService($client);

			$this->userInfoService = new BackupGuardGoogle_Oauth2Service($client);
		}

		return $this->client;
	}

	private function getAccessToken(&$expirationTs = 0)
	{
		$expirationTs = (int)@$_SESSION['sg_google_drive_expiration_ts'];
		return @$_SESSION['sg_google_drive_access_token'];
	}

	private function setAccessToken($accessToken, $expirationTs)
	{
		$_SESSION['sg_google_drive_access_token'] = $accessToken;
		$_SESSION['sg_google_drive_expiration_ts'] = $expirationTs;
	}

	public function getListOfFiles()
	{
		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		$refreshToken = $this->getRefreshToken();
		$this->client->refreshToken($refreshToken);

		$subDirs = $this->getSubFolders(SGConfig::get('SG_STORAGE_BACKUPS_FOLDER_NAME'));

		foreach ($subDirs as $folder) {
			$folderId = $this->getFileId($folder, true);
			$this->setActiveDirectory($folderId);
		}

		$listOfFiles = array();
		$parameters = array();
		$parameters['q'] = "'".$folderId."' in parents and trashed = false";
		$return = $this->search($parameters);

		for ($i=0; $i<count($return); $i++) {
			$size = $return[$i]->getFileSize();
			$date = $this->standardizeFileCreationDate($return[$i]->getCreatedDate());
			$name = $return[$i]->getTitle();

			$listOfFiles[$name] = array(
				'name' => $name,
				'size' => $size,
				'date' => $date,
				'path' => $return[$i]->getId(),
			);
		}
		
		krsort($listOfFiles);
		return $listOfFiles;
	}

	private function search($parameters)
	{
		$result = array();
		$pageToken = NULL;

		$service = $this->getService();

		do {
			try {
				if ($pageToken) {
					$parameters['pageToken'] = $pageToken;
				}
				else {
					unset($parameters['pageToken']);
				}

				$files = $service->files->listFiles($parameters);
				$result = array_merge($result, $files->getItems());

				$pageToken = $files->getNextPageToken();
			}
			catch (Exception $e) {
				$pageToken = NULL;
			}
		}
		while ($pageToken);

		return $result;
	}

	private function searchFile($path)
	{
		$path = trim($path, '/');
		$folderTree = $this->getSubFolders($path);

		$id = '';
		foreach ($folderTree as $folder) {
			$isFolder = true;
			if ($folder == end($folderTree)) {
				$isFolder = false;
			}

			$id = $this->getFileId($folder, $isFolder);
			if ($id) {
				$this->setActiveDirectory($id);
			}
			else {
				return false;
			}
		}

		return $id;
	}

	public function fileExists($path)
	{
		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		$id = $this->searchFile($path);
		if ($id) {
			return true;
		}

		return false;
	}

	private function getFileId($fileName, $isFolder = false)
	{
		$parameters = array();
		$parameters['q'] = "'".$this->getActiveDirectory()."' in parents";

		if ($isFolder) {
			$parameters['q'] .= " and mimeType = 'application/vnd.google-apps.folder'";
		}

		$parameters['q'] .= " and title = '$fileName'";
		$parameters['q'] .= " and trashed = false";
		$res = $this->search($parameters);

		if (count($res)) {
			return $res[0]->id;
		}

		return false;
	}

	private function getSubFolders($path)
	{
		return explode('/', $path);
	}

	public function createFolder($folderName)
	{
		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		$folderTree = $this->getSubFolders($folderName);

		foreach ($folderTree as $folder) {
			$folderId = $this->getFileId($folder, true);
			if ($folderId) {
				$this->setActiveDirectory($folderId);
				continue;
			}

			$file = new BackupGuardGoogle_DriveFile();
			$file->setTitle($folder);
			$file->setMimeType('application/vnd.google-apps.folder');

			$parent = new BackupGuardGoogle_ParentReference();
			$parent->setId($this->getActiveDirectory());
			$file->setParents(array($parent));

			$createdFile = $this->service->files->insert($file, array(
				'mimeType' => 'application/vnd.google-apps.folder',
			));

			$this->setActiveDirectory($createdFile->id);
		}

		return $this->getActiveDirectory();
	}

	public function deleteFile($path)
	{
		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		$id = $this->searchFile($path);
		if ($id) {
			$service = $this->getService();
			$service->files->delete($id);
		}
	}

	public function deleteFolder($folderName)
	{
		return $this->deleteFile($folderName);
	}

	public function downloadFile($fileId, $size, $backupId = null)
	{
		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		$content = $this->service->files->get($fileId);
		$fileSize = $content->getFileSize();
		$downloadUrl = $content->getDownloadUrl();

		$fd = fopen(SG_BACKUP_DIRECTORY.$content->getOriginalFilename(), "w");
		$ret = false;

		if ($downloadUrl) {
			$chunk = 1.0*1024*1024;
			$start = 0;
			$end = $chunk;

			$request = new BackupGuardGoogle_HttpRequest($downloadUrl, 'GET', null, null);
			$stream = new BackupGuardGoogle_HttpStreamIO();

			while (true) {
				$fExists = file_exists(SG_BACKUP_DIRECTORY.$content->getOriginalFilename());
				if (!$fExists) {
					break;
				}

				if ($start >= $fileSize) {
					$ret = true;
					break;
				}

				if ($end > $fileSize) {
					$end = $fileSize;
				}

				$request->setRequestHeaders(array('Range' => "bytes=$start-$end"));
				$httpRequest = $stream->authenticatedRequest($request);

				if (!$httpRequest->getResponseBody()) {
					$ret = true;
					break;
				}

				fwrite($fd, $httpRequest->getResponseBody());

				$start = $end+1;
				$end += $chunk;
			}
		}

		fclose($fd);
		return $ret;
	}

	private function saveStateData($uploadId, $offset, $progress)
	{
		$token = $this->delegate->getToken();
		$actionId = $this->delegate->getActionId();
		$pendingStorageUploads = $this->delegate->getPendingStorageUploads();
		$currentUploadChunksCount = $this->delegate->getCurrentUploadChunksCount();

		$this->state->setProgress($progress);
		$this->state->setCurrentUploadChunksCount($currentUploadChunksCount);
		$this->state->setStorageType(SG_STORAGE_GOOGLE_DRIVE);
		$this->state->setPendingStorageUploads($pendingStorageUploads);
		$this->state->setToken($token);
		$this->state->setUploadId($uploadId);
		$this->state->setOffset($offset);
		$this->state->setAction(SG_STATE_ACTION_UPLOADING_BACKUP);
		$this->state->setActiveDirectory($this->getActiveDirectory());
		$this->state->setActionId($actionId);
		$this->state->save();
	}

	public function uploadFile($filePath)
	{
		$this->connectOffline();
		if (!$this->isConnected()) {
			throw new SGExceptionForbidden('Permission denied. Authentication required.');
		}

		if (!file_exists($filePath) || !is_readable($filePath)) {
			throw new SGExceptionNotFound('File does not exist or is not readable: '.$filePath);
		}

		//$chunkSizeBytes = 4 * 1024 * 1024;
		$chunkSizeBytes = (int)getCloudUploadChunkSize()* 1024 * 1024;

		$mime = 'application/octet-stream';

		$file = new BackupGuardGoogle_DriveFile();
		$file->setTitle(basename($filePath));
		$file->setMimeType($mime);

		$parent = new BackupGuardGoogle_ParentReference();
		$parent->setId($this->getActiveDirectory());
		$file->setParents(array($parent));

		$fileSize = backupGuardRealFilesize($filePath);

		$media = new BackupGuardGoogle_MediaFileUpload($mime, null, true, $chunkSizeBytes);
		$media->setFileSize($fileSize);

		$this->client->setUseObjects(false);
		$result = $this->service->files->insert($file, array('mediaUpload' => $media));

		$status = false;
		$handle = fopen($filePath, "rb");

		$this->delegate->willStartUpload((int)ceil($fileSize/$chunkSizeBytes));

		if ($this->state->getAction() != SG_STATE_ACTION_PREPARING_STATE_FILE) {
			$media->progress = $this->state->getProgress();
			$media->resumeUri = $this->state->getUploadId();
		}

		SGPing::update();

		$byteOffset = $this->state->getOffset();
		fseek($handle, $byteOffset);

		while (!$status && $byteOffset < $fileSize) {
			$chunk = fread($handle, $chunkSizeBytes);
			$status = $media->nextChunk($result, $chunk);
			$byteOffset += strlen($chunk);

			if (!$this->delegate->shouldUploadNextChunk()) {
				break;
			}
			
			SGPing::update();

			$shouldReload = $this->shouldReload();
			if ($shouldReload && backupGuardIsReloadEnabled()) {
				$this->saveStateData($media->resumeUri, $byteOffset, $media->progress);
				@fclose($handle);
				$this->reload();
			}
		}

		fclose($handle);
	}

	private function getCurrentURL()
	{
		$http = backupGuardGetCurrentUrlScheme();
		$url = $http.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		return $url;
	}

	private function getAuthCodeFromURL(&$cancel = false)
	{
		$query = $_SERVER['QUERY_STRING'];
		if (!$query) return '';

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
}
