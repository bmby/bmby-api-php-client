<?php
namespace Bmbyhood\Rest;

use Bmbyhood;

abstract class EntityRest
{
    /**
     * @var Bmbyhood\BmbyhoodClient
     */
    protected $client;

    protected function response(\Psr\Http\Message\ResponseInterface $response, $responseType = '')
    {
        $statusCode = $response->getStatusCode();
        $requestContent = $response->getBody()->getContents();

        $responseData = \json_decode($requestContent, true);

        if (!$responseData) {
            $responseData = $requestContent;
        }

        if ($statusCode == 200 || $statusCode == 201)
        {
            return $responseType ?
                   new $responseType(RestResponse::Success, $responseData) :
                   new RestResponse(RestResponse::Success, $responseData);
        }

        if ($statusCode == 500 || $statusCode == 401)
        {
            return new RestResponse(RestResponse::Error, NULL, $response->getReasonPhrase());
        }

        $error = isset($responseData['error']) ? $responseData['error'] : 'Unspecified error';

        $response = $responseType ?
                    new $responseType(RestResponse::Error, NULL, $error) :
                    new RestResponse(RestResponse::Error, NULL, $error);

        return $response;
    }

    public function __construct(Bmbyhood\BmbyhoodClient $client)
    {
        $this->client = $client;
    }
}

?>