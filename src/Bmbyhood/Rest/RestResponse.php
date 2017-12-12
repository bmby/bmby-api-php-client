<?php
namespace Bmbyhood\Rest;

use Bmbyhood;

class RestResponse
{
    const Success = 'success';
    const Error = 'error';

    private $status = '';
    private $errorMessage = '';
    private $id = NULL;

    /**
     * @var Bmbyhood\BmbyhoodClient
     */
    protected $client;

    public function __construct($status, $id = NULL, $errorMessage = '')
    {
        $this->status = $status == self::Success ? self::Success : self::Error;
        $this->errorMessage = $errorMessage;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getId()
    {
        return $this->id;
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