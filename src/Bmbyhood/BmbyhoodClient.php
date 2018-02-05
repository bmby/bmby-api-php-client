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
    const AUTH_BASE_PATH = 'https://identity.bmby.com/';
    const API_BASE_PATH = 'https://api.bmby.com/';

    /**
     * @var ClientInterface $http
     */
    private $apiHttp;

    /**
     * @var ClientInterface $http
     */
    private $authHttp;

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
        if (!$this->token || !isset($this->token['exp'])) {
            return true;
        }

        $time = $this->getUtcTime();
        $tokenParts = explode('.', $this->token);
        $payload = $tokenParts[1];
        $payloadData = GuzzleHttp\json_decode(base64_decode($payload));

        $tokenExpirationTime = (int)$payloadData['exp'];

        if ($tokenExpirationTime - $time < 30) {//30 seconds left
            return true;
        }

        return false;
    }

    private function getToken()
    {
        $response = $this->authHttp->request('POST', self::TOKEN_URI, [
            'form_params' => $this->config
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
                'scope' => 'bmbyAPI.users.read',
            ],
            $config
        );

        $this->apiHttp = new GuzzleHttp\Client([
            'base_uri' => self::API_BASE_PATH,
            'verify' => false,
            'http_errors' => false
        ]);

        $this->authHttp = new GuzzleHttp\Client([
            'base_uri' => self::AUTH_BASE_PATH,
            'verify' => false,
            'http_errors' => false
        ]);
    }

    private function request($method, $uri, $data, $files = [])
    {
        $this->checkToken();

        $params = [
            'headers' => $this->getHeaders()
        ];

        if ($files) {
            $params['multipart'] = [
                [
                    'name' => 'metaData',
                    'contents' => GuzzleHttp\json_encode($data)
                ]
            ];

            foreach ($files as $field => $fileList) {
                if (count($fileList) == 1) {
                    $params['multipart'][] = [
                        'name' => $field,
                        'contents' => \fopen($fileList[0], 'r')
                    ];
                } else {
                    $i = 0;

                    foreach ($fileList as $filePath) {
                        $params['multipart'][] = [
                            'name' => $field.'['.$i.']',
                            'contents' => \fopen($filePath, 'r')
                        ];

                        $i++;
                    }
                }
            }
        }
        elseif ($data) {
            $params['json'] = $data;
        }

        return $this->apiHttp->request($method, $uri, $params);
    }

    /**
     * @param string $uri
     * @param array $data
     * @param array $files
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function post($uri, $data, $files = [])
    {
        return $this->request('POST', $uri, $data, $files);
    }

    /**
     * @param string $uri
     * @param array $data
     * @param array $files
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function put($uri, $data, $files = [])
    {
        return $this->request('PUT', $uri, $data, $files);
    }

    /**
     * @param string $uri
     * @param array $data
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function patch($uri, $data)
    {
        return $this->request('PATCH', $uri, $data);
    }

    /**
     * @param string $uri
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function delete($uri)
    {
        return $this->request('DELETE', $uri, []);
    }
}
?>