<?php

namespace Bmbyhood;

use GuzzleHttp;
use GuzzleHttp\ClientInterface;
use Firebase\JWT;

class BmbyhoodClient
{
    const USER_AGENT = "bmbyhood-api-php-client";
    const REVOKE_URI = '/connect/revoke';
    const TOKEN_URI = '/connect/token';
    const AUTH_URI = '/connect/auth';
    const API_BASE_PATH = 'https://bmbyhoodapi.bmby.com/';

    /**
     * @var ClientInterface $http
     */
    private $http;

    /**
     * @var string access token
     */
    private $token;

    /**
     * @var array
     */
    private $config;

    private function getUtcTime()
    {
        $default_time_zone = date_default_timezone_get();
        date_default_timezone_set('UTC');
        $time = time();
        date_default_timezone_set($default_time_zone);

        return $time;
    }

    private function getHeaders()
    {
        return [
            'Authorization' => 'Bearer '.$this->token
        ];
    }

    /**
     * @return bool
     */
    private function tokenIsExpired()
    {
        if ($this->token == NULL || !isset($this->token['exp'])) {
            return false;
        }

        $time = $this->getUtcTime();
        $tokenParts = explode('.', $this->token);
        $payload = $tokenParts[1];
        $payloadData = GuzzleHttp\json_decode(base64_decode($payload));

        $tokenExpirationTime = (int)$payloadData['exp'];

        if ($tokenExpirationTime - $time < 30) {//30 seconds left
            return false;
        }

        return false;
    }

    private function getToken()
    {
        $response = $this->http->request('POST', self::TOKEN_URI, [
            'json' => $this->config
        ]);

        if ($response->getStatusCode() != 200)
        {
            return false;
        }

        $responseData = GuzzleHttp\json_decode($response->getBody()->getContents(), true);

        $this->token = $responseData['access_token'];

        return true;
    }

    private function checkToken()
    {
        if ($this->tokenIsExpired()) {
            $this->getToken();
        }
    }

    public function __construct(array $config = [])
    {
        $this->config = array_merge(
            [
                'client_id' => '',
                'client_secret' => '',
                'grant_type' => 'client_credentials',
                'scope' => 'portalAPI.users.read',
            ],
            $config
        );

        $this->http = new GuzzleHttp\Client(['base_uri' => self::API_BASE_PATH]);
    }

    /**
     * @param string $uri
     * @param array $data
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function post($uri, $data)
    {
        $this->checkToken();

        return $this->http->request('POST', $uri, [
            'headers'     => $this->getHeaders(),
            'json' => $data
        ]);
    }

    /**
     * @param string $uri
     * @param array $data
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function put($uri, $data)
    {
        $this->checkToken();

        return $this->http->request('PUT', $uri, [
            'headers'     => $this->getHeaders(),
            'json' => $data
        ]);
    }

    /**
     * @param string $uri
     * @param array $data
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function patch($uri, $data)
    {
        $this->checkToken();

        return $this->http->request('PATCH', $uri, [
            'headers'     => $this->getHeaders(),
            'json' => $data
        ]);
    }

    /**
     * @param string $uri
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function delete($uri)
    {
        $this->checkToken();

        return $this->http->request('DELETE', $uri, [
            'headers'     => $this->getHeaders()
        ]);
    }
}
?>