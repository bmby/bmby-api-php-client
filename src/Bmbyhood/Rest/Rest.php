<?php
namespace Bmbyhood\Rest;

use Bmbyhood;

abstract class EntityRest
{
    /**
     * @var Bmbyhood\BmbyhoodClient
     */
    protected $client;

    protected function response(\Psr\Http\Message\ResponseInterface $response, $idField = '')
    {
        $statusCode = $response->getStatusCode();
        $requestContent = $response->getBody()->getContents();
        $responseData = \GuzzleHttp\json_decode($requestContent, true);

        if ($statusCode == 200 || $statusCode == 201)
        {
            $id = isset($responseData[$idField]) ? $responseData[$idField] : NULL;

            return new RestResponse(RestResponse::Success, $id);
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