<?php

namespace Dropbox;

/**
 * The base class for the two auth options.
 */
class WebAuthBase extends AuthBase
{
    protected function _getRefreshedAccessToken($key, $secrect, $refreshToken) // phpcs:ignore
    {
        $array = array();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.dropbox.com/oauth2/token');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=refresh_token&refresh_token=" . $refreshToken);
        curl_setopt($ch, CURLOPT_USERPWD, $key . ':' . $secrect);
        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = json_decode(curl_exec($ch), true);

        if (curl_errno($ch)) {
            $array = ['status' => 400, 'access_token' => null];
        } elseif (isset($response['access_token'])) {
            $array = ['status' => 200, 'access_token' => $response['access_token']];
        }
        curl_close($ch);

        return $array;
    }

    /* Dropbox api 2*/
    protected function _getAuthorizeUrl($redirectUri, $state) // phpcs:ignore
    {
        return RequestUtil::buildUrlForGetOrPut(
            $this->userLocale,
            $this->appInfo->getHost()->getWeb(),
            "oauth2/authorize",
            array(
                "token_access_type" => "offline",
                "client_id" => $this->appInfo->getKey(),
                "response_type" => "code",
                "redirect_uri" => $redirectUri,
                "state" => $state,
            )
        );
    }

    protected function _finish($code, $originalRedirectUri) // phpcs:ignore
    {
        // This endpoint requires "Basic" auth.
        $clientCredentials = $this->appInfo->getKey() . ":" . $this->appInfo->getSecret();
        $authHeaderValue = "Basic " . base64_encode($clientCredentials);

        $response = RequestUtil::doPostWithSpecificAuth(
            $this->clientIdentifier,
            $authHeaderValue,
            $this->userLocale,
            $this->appInfo->getHost()->getApi(),
            "oauth2/token",
            array(
                "grant_type" => "authorization_code",
                "code" => $code,
                "redirect_uri" => $originalRedirectUri,
            )
        );

        if ($response->statusCode !== 200) {
            throw RequestUtil::unexpectedStatus($response);
        }

        $parts = RequestUtil::parseResponseJson($response->body);

        if (!array_key_exists('token_type', $parts) || !is_string($parts['token_type'])) {
            throw new Exception_BadResponse("Missing \"token_type\" field.");
        }
        $tokenType = $parts['token_type'];
        if (!array_key_exists('access_token', $parts) || !is_string($parts['access_token'])) {
            throw new Exception_BadResponse("Missing \"access_token\" field.");
        }
        $accessToken = $parts['access_token'];
        if (!array_key_exists('uid', $parts) || !is_string($parts['uid'])) {
            throw new Exception_BadResponse("Missing \"uid\" string field.");
        }
        $refreshToken = $parts['refresh_token'];
        if (!array_key_exists('refresh_token', $parts) || !is_string($parts['refresh_token'])) {
            throw new Exception_BadResponse("Missing \"refresh_token\" string field.");
        }
        $userId = $parts['uid'];

        if ($tokenType !== "Bearer" && $tokenType !== "bearer") {
            throw new Exception_BadResponse("Unknown \"token_type\"; expecting \"Bearer\", got  "
                                            . Util::q($tokenType));
        }

        return array($accessToken, $refreshToken, $userId);
    }
}
