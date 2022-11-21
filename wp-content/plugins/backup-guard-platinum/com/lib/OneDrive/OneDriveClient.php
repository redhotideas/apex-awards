<?php

namespace BackupGuard;

class OneDriveClient
{
	const ONE_DRIVE_LOGIN_URL = "https://login.microsoftonline.com/common/oauth2/v2.0";
	const ONE_DRIVE_ITMES_URL = "https://graph.microsoft.com/v1.0";

	private $state;
	private $responseType;
	private $scopes;
	private $refreshToken;
	private $accessToken;
	private $uploadPath;

	public function setState($state)
	{
		$this->state = $state;
	}

	public function setResponseType($responseType)
	{
		$this->responseType = $responseType;
	}

	public function setScopes($scopes = array())
	{
		$this->scopes = $scopes;
	}

	public function setAccessToken($accessToken)
	{
		$this->accessToken = $accessToken;
	}

	public function setUploadPath($path)
	{
		$path = trim($path, '/');
		$this->uploadPath = $path;
	}

	private function getAccessToken()
	{
		return $this->accessToken;
	}

	public function createAuthUrl()
	{
		$query = array(
			'client_id'     => SG_STORAGE_ONE_DRIVE_CLIENT_ID,
			'redirect_uri'  => SG_STORAGE_ONE_DRIVE_REDIRECT_URI,
			'response_type' => 'code',
			'scope'         => array(
				'files.readwrite',
				'offline_access'
			),
			'state'         => $this->state,
		);

		return self::ONE_DRIVE_LOGIN_URL.'/authorize' . '?' . $this->buildQuery($query);
	}

	private function sendRequest($type, $url, $params, $headers = array())
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $type);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0');

		if (!empty($params)) {
			curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		}

		$response = curl_exec($ch);
		$curl_info = curl_getinfo($ch);
		curl_close($ch);

		$header_size = $curl_info['header_size'];
		$header = substr($response, 0, $header_size);
		$body = substr($response, $header_size);

		$result["http_code"] = (int)$curl_info['http_code'];
		$result["body"] = $body;

		return $result;
	}

	public function getUserInfo()
	{
		$response = $this->sendRequest(
			"GET",
			self::ONE_DRIVE_ITMES_URL.'/me/drive',
			'',
			array(
				'Authorization: Bearer '.$this->getAccessToken()
			)
		);

		if($response['http_code'] != 200) {
			$response = json_decode($response['body'], true);
			$errorMessage = $response['error']['message'];
			throw new Exception($errorMessage);
		}

		return json_decode($response['body'], true);
	}

	public function authenticate($code)
	{
		$response = $this->sendRequest(
			"POST",
			self::ONE_DRIVE_LOGIN_URL."/token",
			http_build_query(array(
				'client_id'     => SG_STORAGE_ONE_DRIVE_CLIENT_ID,
				'redirect_uri'  => SG_STORAGE_ONE_DRIVE_REDIRECT_URI,
				'client_secret' => SG_STORAGE_ONE_DRIVE_SECRET,
				'code'          => $code,
				'grant_type'    => 'authorization_code'
			)),
			array(
				'Content-Type: application/x-www-form-urlencoded'
			)
		);

		if($response['http_code'] != 200) {
			$response = json_decode($response['body'], true);
			$errorMessage = $response['error']['message'];
			throw new Exception($errorMessage);
		}

		return json_decode($response['body'], true);
	}

	public function refreshToken($refreshToken)
	{
		$response = $this->sendRequest(
			"POST",
			self::ONE_DRIVE_LOGIN_URL."/token",
			http_build_query(array(
				'client_id'     => SG_STORAGE_ONE_DRIVE_CLIENT_ID,
				'redirect_uri'  => SG_STORAGE_ONE_DRIVE_REDIRECT_URI,
				'client_secret' => SG_STORAGE_ONE_DRIVE_SECRET,
				'refresh_token' => $refreshToken,
				'grant_type'    => 'refresh_token'
			)),
			array(
				'Content-Type: application/x-www-form-urlencoded'
			)
		);

		if($response['http_code'] != 200) {
			$response = json_decode($response['body'], true);
			$errorMessage = $response['error']['message'];
			throw new Exception($errorMessage);
		}

		return json_decode($response['body'], true);
	}

	public function deleteFile($filePath)
	{
		$response = $this->sendRequest(
			"DELETE",
			self::ONE_DRIVE_ITMES_URL."/me/drive/special/approot:/".$filePath,
			array(),
			array(
				'Authorization: Bearer '.$this->getAccessToken()
			)
		);

		if($response['http_code'] != 204) {
			$response = json_decode($response['body'], true);
			$errorMessage = $response['error']['message'];
			throw new Exception($errorMessage);
		}

		return true;
	}

	public function listFolder($folder)
	{
		$response = $this->sendRequest(
			"GET",
			self::ONE_DRIVE_ITMES_URL.'/me/drive/special/approot:/'.$folder.':/children',
			array(),
			array(
				'Authorization: Bearer '.$this->getAccessToken()
			)
		);

		if($response['http_code'] != 200) {
			$response = json_decode($response['body'], true);
			$errorMessage = $response['error']['message'];
			throw new Exception($errorMessage);
		}

		$listOfFiles = json_decode($response['body'], true);
		return $listOfFiles;
	}

	public function downloadFile($filePath)
	{
		if (!$filePath) {
			return false;
		}

		$filePath = trim($filePath, '/');

		$response = $this->sendRequest(
			"GET",
			self::ONE_DRIVE_ITMES_URL."/me/".$filePath,
			array(),
			array(
				'Authorization: Bearer '.$this->getAccessToken()
			)
		);

		if($response['http_code'] != 200) {
			$response = json_decode($response['body'], true);
			$errorMessage = $response['error']['message'];
			throw new Exception($errorMessage);
		}

		$body = json_decode($response['body'], true);
		$downloadUrl = $body['@microsoft.graph.downloadUrl'];

		$this->downloadFileFromUrl($downloadUrl, SG_BACKUP_DIRECTORY.basename($filePath));

		return true;
	}

	private function downloadFileFromUrl($url, $path)
	{
		$newfname = $path;
		$file = fopen ($url, 'rb');
		if ($file) {
			$newf = fopen ($newfname, 'wb');
			if ($newf) {
				while(!feof($file)) {
					fwrite($newf, fread($file, 1024 * 8), 1024 * 8);
				}
			}
		}
		if ($file) {
			fclose($file);
		}
		if ($newf) {
			fclose($newf);
		}
	}

	public function chunkedUploadStart($filename)
	{
		$response = $this->sendRequest(
			"POST",
			self::ONE_DRIVE_ITMES_URL."/me/drive/special/approot:/".$this->uploadPath.'/'.$filename.":/createUploadSession",
			json_encode(array(
				"item" => array(
					"@microsoft.graph.conflictBehavior" => "rename"
				)
			)),
			array(
				'Content-Type: application/json',
				'Authorization: Bearer '.$this->getAccessToken()
			)
		);

		if($response['http_code'] != 200) {
			$response = json_decode($response['body'], true);
			$errorMessage = $response['error']['message'];
			throw new Exception($errorMessage);
		}

		$response = json_decode($response['body'], true);

		return $response['uploadUrl'];
	}

	public function chunkedUploadContinue($uploadId, $byteOffset, $data, $size)
	{
		$range = $byteOffset + strlen($data) - 1;

		$response = $this->sendRequest(
			"PUT",
			$uploadId,
			$data,
			array(
				'Content-Length: '.strlen($data),
				'Content-Range: bytes '.$byteOffset.'-'.$range.'/'.$size
			)
		);

		if($response['http_code'] != 202 && $response['http_code'] != 201) {
			$response = json_decode($response['body'], true);
			$errorMessage = $response['error']['message'];
			throw new Exception($errorMessage);
		}

		sleep(2);

		return true;
	}

	private function buildQuery(array $data)
	{
		$queryString = '';

		foreach ($data as $param => $value) {
			if ($param == 'redirec_uri' || $param == 'state') {
				$value = $this->encodeUrl($value);
			}

			if ($param == 'scope') {
				$value = $this->encodeScope($value);
			}

			$queryString .= $param . '=' . $value . '&';
		}

		return rtrim($queryString, '&');
	}

	protected function encodeUrl($url)
	{
		$replace = array(
			'/' => '%2F',
			':' => '%3A',
			' ' => '%20',
		);

		return @strtr($url, $replace);
	}

	protected function encodeSecret($secret)
	{
		// Disable notice. PHP 5.5 bug.
		// http://php.net//manual/ru/function.strtr.php#112930
		return @strtr($secret, array(
			'+' => '%2B',
		));
	}

	protected function encodeScope($scope)
	{
		if (is_array($scope)) {
			$scope = implode(' ', $scope);
		}

		return @strtr($scope, array(
			' ' => '%20',
		));
	}
}
