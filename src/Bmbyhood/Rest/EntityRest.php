<?php
namespace Bmbyhood\Rest;

use Bmbyhood;

abstract class EntityRest
{
    /**
     * @var Bmbyhood\BmbyhoodClient
     */
    protected $client;

    protected function response(\Psr\Http\Message\ResponseInterface $response)
    {
        $statusCode = $response->getStatusCode();
        $requestContent = $response->getBody()->getContents();
        $responseData = \GuzzleHttp\json_decode($requestContent, true);

        if ($statusCode == 200 || $statusCode == 201)
        {
            return new RestResponse(RestResponse::Success, $responseData);
        }

        if ($statusCode == 500 || $statusCode == 401)
        {
            return new RestResponse(RestResponse::Error, NULL, $response->getReasonPhrase());
        }

        $error = isset($responseData['error']) ? $responseData['error'] : 'Unspecified error';

        return new RestResponse(RestResponse::Error, NULL, $error);
    }

    public function __construct(Bmbyhood\BmbyhoodClient $client)
    {
        $this->client = $client;
    }
}

?>