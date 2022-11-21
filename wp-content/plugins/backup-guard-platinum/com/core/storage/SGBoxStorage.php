<?php

require_once( SG_STORAGE_PATH . 'SGStorage.php' );
require_once( SG_LIB_PATH . 'Box/BoxClient.php' );

class SGBoxStorage extends SGStorage {
	private $client = null;
	private $parts = array();

	public function init() {
		//check if curl extension is loaded
		SGBoot::checkRequirement( 'curl' );
	}

	public function connect() {
		if ( $this->isConnected() ) {
			return;
		}

		$authCode = $this->getAuthCodeFromURL( $cancel );

		if ( $cancel ) {
			throw new SGExceptionMethodNotAllowed( 'User did not allow access' );
		}

		$this->auth( $authCode );
	}

	public function connectOffline() {

		if ( $this->isConnected() ) {
			return;
		}

		$refreshToken = $this->getRefreshToken();

		if ( ! $refreshToken ) {
			throw new SGExceptionNotFound( 'Refresh token not found' );
		}

		$client                = $this->getClient();
		$client->refresh_token = $refreshToken;
		//refresh access token using the refresh token
		$response = $client->get_token();
		SGConfig::set( 'SG_BOX_REFRESH_TOKEN', $response['refresh_token'], true );

		//set the new access token
		$client->setAccessToken( $response['access_token'] );
		$this->setAccessToken( $response['access_token'], time() + 3600 );

		$this->connected = true;
	}

	/* Check if it is already connected */
	public function checkConnected() {
		$accessToken     = $this->getAccessToken( $expirationTs );
		$this->connected = ( $accessToken && $expirationTs > time() ) ? true : false;

		if ( $this->connected ) {
			$client               = $this->getClient();
			$client->access_token = $accessToken;
		}
	}

	private function getRefreshToken() {
		return SGConfig::get( 'SG_BOX_REFRESH_TOKEN', true );
	}

	private function setAccessToken( $accessToken, $expirationTs ) {
		$_SESSION['sg_box_access_token']  = $accessToken;
		$_SESSION['sg_box_expiration_ts'] = $expirationTs;
	}

	private function getAccessToken( &$expirationTs = 0 ) {
		$expirationTs = (int) @$_SESSION['sg_box_expiration_ts'];

		return @$_SESSION['sg_box_access_token'];
	}

	private function auth( $authCode = '' ) {
		$client = $this->getClient();

		$refUrl = $this->getRefURL();
		$client->setState( base64_encode( $refUrl ) );


		if ( $authCode ) {
			try {

				//exchange authorization code for access token
				$response = $client->get_token( $authCode );
				$this->setAccessToken( $response['access_token'], time() + 3600 );

				$refreshToken = $response['refresh_token'];

				$client->access_token = $response['access_token'];
				$userInfo             = $client->get_user();

				if ( $userInfo ) {
					SGConfig::set( 'SG_BOX_CONNECTION_STRING', json_encode( $userInfo ), true );
				}

				//store refresh token
				SGConfig::set( 'SG_BOX_REFRESH_TOKEN', $refreshToken, true );

				$this->connected = true;

				return;
			} catch ( Exception $ex ) {

			}
		}

		$client->get_code();
	}

	/* Get list of files inside the active directory */
	public function getListOfFiles() {
		$this->connectOffline();
		if ( ! $this->isConnected() ) {
			throw new SGExceptionForbidden( 'Permission denied. Authentication required.' );
		}

		$folderTree = SG_BACKUP_DEFAULT_FOLDER_NAME;

		if ( SGBoot::isFeatureAvailable( 'SUBDIRECTORIES' ) ) {
			$folderTree = SGConfig::get( 'SG_STORAGE_BACKUPS_FOLDER_NAME' );
		}

		$accessToken = $this->getAccessToken();
		$client      = $this->getClient();
		$client->setAccessToken( $accessToken );
		$client->setUploadPath( $folderTree );

		$uploadFolderId = $client->get_upload_folder();

		$list        = $client->get_folder_items( $uploadFolderId );
		$listOfFiles = array();
		foreach ( $list['entries'] as $file ) {

			$fileDetails = $client->get_file_details( $file['id'] );
			$size        = $fileDetails['size'];
			$date        = $this->standardizeFileCreationDate( $fileDetails['modified_at'] );
			$name        = $file['name'];

			$listOfFiles[ $name ] = array(
				'id'   => $fileDetails['id'],
				'name' => $name,
				'size' => $size,
				'date' => $date,
				'path' => $folderTree . '/' . $name
			);
		}

		krsort( $listOfFiles );

		return $listOfFiles;
	}

	/* Create a folder inside the active directory. If folder already exists, do nothing. */
	public function createFolder( $folderPath ) {
		// Folder tree will be created during upload

		$client = $this->getClient();
		$client->create_folder( $folderPath, 0 );
		$client->setUploadPath( $folderPath );

	}

	/* Download file from Storage*/
	public function downloadFile( $filePath, $size, $backupId = null ) {
		$this->connectOffline();
		if ( ! $this->isConnected() ) {
			throw new SGExceptionForbidden( 'Permission denied. Authentication required.' );
		}

		$accessToken = $this->getAccessToken();
		$client      = $this->getClient();
		$client->setAccessToken( $accessToken );
		$result = $client->download_file( $backupId, SG_BACKUP_DIRECTORY );

		return $result;
	}

	private function saveStateData( $uploadId, $offset, $chunkSize ) {
		$token                    = $this->delegate->getToken();
		$actionId                 = $this->delegate->getActionId();
		$pendingStorageUploads    = $this->delegate->getPendingStorageUploads();
		$currentUploadChunksCount = $this->delegate->getCurrentUploadChunksCount();
		$progress                 = $this->delegate->getProgress();

		$this->state->setProgress( $progress );
		$this->state->setCurrentUploadChunksCount( $currentUploadChunksCount );
		$this->state->setStorageType( SG_STORAGE_BOX );
		$this->state->setPendingStorageUploads( $pendingStorageUploads );
		$this->state->setToken( $token );
		$this->state->setUploadId( $uploadId );
		$this->state->setOffset( $offset );
		$this->state->setAction( SG_STATE_ACTION_UPLOADING_BACKUP );
		$this->state->setActiveDirectory( $this->getActiveDirectory() );
		$this->state->setActionId( $actionId );
		$this->state->setParts(array_merge($this->state->getParts(), $this->parts));
		$this->state->setChunkSize( $chunkSize );
		$this->state->save();
	}

	public function chunkedUploadStart() {
		$this->connectOffline();
		if ( ! $this->isConnected() ) {
			throw new SGExceptionForbidden( 'Permission denied. Authentication required.' );
		}

		$accessToken = $this->getAccessToken();
		$client      = $this->getClient();
		$client->setAccessToken( $accessToken );
		$client->chunkedUploadStart();
	}

	/* Upload local file to Storage */
	public function uploadFile( $filePath ) {
		$this->connectOffline();
		if ( ! $this->isConnected() ) {
			throw new SGExceptionForbidden( 'Permission denied. Authentication required.' );
		}

		if ( ! file_exists( $filePath ) || ! is_readable( $filePath ) ) {
			throw new SGExceptionNotFound( 'File does not exist or is not readable: ' . $filePath );
		}

		//$chunkSizeBytes = 4 * 320 * 1024;
		$chunkSizeBytes = (int)getCloudUploadChunkSize() * 1024 * 1024;

		$client      = $this->getClient();
		$accessToken = $this->getAccessToken();
		$client->setAccessToken( $accessToken );

		$fileSize = backupGuardRealFilesize( $filePath );
		$this->delegate->willStartUpload( (int) ceil( $fileSize / $chunkSizeBytes ) );

		$handle     = fopen( $filePath, "rb" );
		$byteOffset = $this->state->getOffset();
		fseek( $handle, $byteOffset );
		$isUploadWithSession = true;
		if ( $this->state->getAction() == SG_STATE_ACTION_PREPARING_STATE_FILE ) {
			$byteOffset = 0;
			$filename   = basename( $filePath );
			$folderID   = $client->get_upload_folder();
			if ( $fileSize > 20000000 ) {
				$isUploadWithSession = true;
				$upload  = $client->create_upload_session( $filename, $fileSize, $folderID );
				$uploadId = $upload['session_endpoints']['upload_part'];
				$chunkSizeBytes = $upload['part_size'];
			} else {
				$isUploadWithSession = false;
				$uploadId   = $client->put_file( $filePath, $filename, $folderID );
				$byteOffset = $fileSize;
			}
		} else {
			$isUploadWithSession = true;
			$uploadId = $this->state->getUploadId();
		}

		SGPing::update();

		while ( $byteOffset < $fileSize ) {
			if ( $this->state->getChunkSize() > 0 ) {
				$chunkSizeBytes = $this->state->getChunkSize();
			}
			$data = fread( $handle, $chunkSizeBytes );

			$uploadData  = $client->upload_file_part( $uploadId, $byteOffset, $data, $fileSize );
			$this->parts[] = $uploadData['part'];
			$byteOffset  += strlen( $data );

			if (!$this->delegate->shouldUploadNextChunk()) {
				fclose( $handle );
				return;
			}

			SGPing::update();

			$shouldReload = $this->shouldReload();
			if ( $shouldReload && backupGuardIsReloadEnabled() ) {
				$this->saveStateData( $uploadId, $byteOffset, $chunkSizeBytes);
				@fclose( $handle );
				$this->reload();
			}
		}

		if ( $isUploadWithSession === true ) {
			$client->commit_upload_session( $uploadId, array_merge($this->state->getParts(), $this->parts), $filePath );
		}

	}

	/* Delete file from active directory */
	public function deleteFile( $fileName ) {

		$this->connectOffline();
		if ( ! $this->isConnected() ) {
			throw new SGExceptionForbidden( 'Permission denied. Authentication required.' );
		}

		$accessToken = $this->getAccessToken();
		$client      = $this->getClient();
		$client->setAccessToken( $accessToken );


		$uploadFolder = trim( SGConfig::get( 'SG_STORAGE_BACKUPS_FOLDER_NAME' ), '/' );
		$client->setUploadPath( $uploadFolder );

		$uploadFolderContent = $client->get_folder_items( $client->get_upload_folder() );

		foreach ( $uploadFolderContent['entries'] as $item ) {
			if ( $item['name'] == basename( $fileName ) ) {
				$client->delete_file( $item['id'] );
				break;
			}
		}

	}

	/* Delete folder and it's contents from active directory */
	public function deleteFolder( $folderName ) {
		$this->connectOffline();
		if ( ! $this->isConnected() ) {
			throw new SGExceptionForbidden( 'Permission denied. Authentication required.' );
		}

		$accessToken = $this->getAccessToken();
		$client      = $this->getClient();
		$client->setAccessToken( $accessToken );
		$client->deleteFile( $folderName );
	}

	/* Search if file or folder exists in given path */
	public function fileExists( $path ) {
	}

	private function getRefURL() {
		$refUrl = $this->getCurrentURL();

		return $refUrl;
	}

	private function getCurrentURL() {
		$http = backupGuardGetCurrentUrlScheme();
		$url  = $http . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

		return $url;
	}

	private function getClient() {
		if ( ! $this->client ) {
			$client = new BackupGuard\BoxClient( SG_STORAGE_BOX_CLIENT_ID, SG_STORAGE_BOX_SECRET, SG_STORAGE_BOX_REDIRECT_URI );

			$this->client = $client;
		}

		return $this->client;
	}

	private function getAuthCodeFromURL( &$cancel = false ) {
		$query = $_SERVER['QUERY_STRING'];
		if ( ! $query ) {
			return '';
		}

		$query = explode( '&', $query );
		$code  = '';
		foreach ( $query as $q ) {
			$q = explode( '=', $q );
			if ( $q[0] == 'code' ) {
				$code = $q[1];
			} else if ( $q[0] == 'cancel' && $q[1] == '1' ) {
				$cancel = true;
				break;
			}
		}

		return $code;
	}
}
