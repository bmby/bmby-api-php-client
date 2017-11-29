<?php

namespace Bmbyhood;

use GuzzleHttp\ClientInterface;

class BmbyhoodClient
{
    const USER_AGENT = "bmbyhood-api-php-client";
    const REVOKE_URI = '/connect/revoke';
    const TOKEN_URI = '/connect/token';
    const AUTH_URI = '/connect/auth';
    const API_BASE_PATH = 'https://bmbyhoodapi.bmby.com';


    /**
     * @var ClientInterface $http
     */
    private $http;


    /**
     * @var array access token
     */
    private $token;
}
?>