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
    const MESSAGING_ENDPOINT = 'https://messaging.bmby.com';
    const UPLOAD_SERVICE_ENDPOINT = 'https://uploadservice.bmby.com';

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

    public function __construct(array $config = [], $apiEndpoint = '', $authEndpoint = '')
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

        $apiEndpoint = $apiEndpoint ? $apiEndpoint : self::API_BASE_PATH;
        $authEndpoint = $authEndpoint ? $authEndpoint : self::AUTH_BASE_PATH;

        $this->apiHttp = new GuzzleHttp\Client([
            'base_uri' => $apiEndpoint,
            'verify' => false,
            'http_errors' => false
        ]);

        $this->authHttp = new GuzzleHttp\Client([
            'base_uri' => $authEndpoint,
            'verify' => false,
            'http_errors' => false
        ]);
    }

    private function request($method, $uri, $data, $files = [], $isMultipart = false, $dataField = 'metaData')
    {
        $this->checkToken();

        $params = [
            'headers' => $this->getHeaders(),
            'verify' => false,
            'curl' => array( CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false)
        ];

        if ($method == "GET") {
            $params['query'] = $data;
        }
        elseif ($files || $isMultipart) {
            $params['multipart'] = [
                [
                    'name' => $dataField,
                    'contents' => GuzzleHttp\json_encode($data)
                ]
            ];

            if (is_array($files)) {
                foreach ($files as $field => $fileList) {
                    if (!is_array($fileList)) {
                        if (!$fileList) {
                            continue;
                        }

                        $params['multipart'][] = [
                            'name' => $field,
                            'contents' => \fopen($fileList, 'r')
                        ];
                    } elseif (count($fileList) == 1) {
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
        }
        elseif ($data) {
            $params['json'] = $data;
        }

        return $this->apiHttp->request($method, $uri, $params);
    }

    /**
     * @param string $uri
     * @param $params
     * @return mixed|\Psr\Http\Message\ResponseInterface
     * @internal param array $data
     *
     */
    public function get($uri, $params)
    {
        return $this->request('GET', $uri, $params);
    }

    /**
     * @param string $uri
     * @param array $data
     * @param array $files
     * @param bool $isMultipart
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function post($uri, $data, $files = [], $isMultipart = false)
    {
        return $this->request('POST', $uri, $data, $files, $isMultipart);
    }

    /**
     * @param string $uri
     * @param array $data
     * @param array $files
     * @param bool $isMultipart
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function put($uri, $data, $files = [], $isMultipart = false)
    {
        return $this->request('PUT', $uri, $data, $files, $isMultipart);
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