<?php
namespace Bmbyhood\Rest;

use Bmbyhood;

class RestResponse
{
    const Success = 'success';
    const Error = 'error';

    protected $status = '';
    protected $errorMessage = '';
    protected $id = NULL;
    protected $response = [];

    /**
     * @var Bmbyhood\BmbyhoodClient
     */
    protected $client;

    public function __construct($status, $response = NULL, $errorMessage = '', $idField = 'id')
    {
        $this->status = $status == self::Success ? self::Success : self::Error;
        $this->errorMessage = $errorMessage;
        $this->id = isset($response[$idField]) ? $response[$idField] : '';
        $this->response = $response ? $response : [];
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    public function getJson()
    {
        return \GuzzleHttp\json_encode([
            'status' => $this->status,
            'id' => $this->id,
            'error' => $this->errorMessage
        ]);
    }
}

?>