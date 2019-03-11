<?php

namespace Bmbyhood\Rest\QueryParams;


class ClientQueryParams extends QueryParams
{
    public function __construct($bmbyClientId, $bmbyUserId, $bmbyInstanceId)
    {
        $this->params['bmbyInstanceId'] = $bmbyInstanceId;
        $this->params['bmbyUserId'] = $bmbyUserId;
        $this->params['bmbyClientId'] = $bmbyClientId;
    }

    /**
     * @return int
     */
    public function getBmbyClientId()
    {
        return $this->params['bmbyClientId'];
    }
    /**
     * @param int $bmbyClientId
     */
    public function setBmbyClientId($bmbyClientId)
    {
        $this->params['bmbyClientId'] = (int)$bmbyClientId;
    }

    /**
     * @return int
     */
    public function getBmbyUserId()
    {
        return $this->params['bmbyUserId'];
    }
    /**
     * @param int $bmbyUserId
     */
    public function setBmbyUserId($bmbyUserId)
    {
        $this->params['bmbyUserId'] = (int)$bmbyUserId;
    }

    /**
     * @return string
     */
    public function getBmbyInstanceId()
    {
        return $this->params['bmbyInstanceId'];
    }
    /**
     * @param string $bmbyInstanceId
     */
    public function setBmbyInstanceId($bmbyInstanceId)
    {
        $this->params['bmbyInstanceId'] = $bmbyInstanceId;
    }
}