<?php

namespace Bmbyhood\Rest\QueryParams;


class TimeLineSummaryQueryParams extends QueryParams
{
    public function __construct($bmbyInstanceId, $bmbyProjectId, $bmbyUserId)
    {
        $this->params['bmbyInstanceId'] = $bmbyInstanceId;
        $this->params['bmbyProjectId'] = $bmbyProjectId;
        $this->params['bmbyUserId'] = $bmbyUserId;
        $this->params['fromDate'] = NULL;
        $this->params['toDate'] = NULL;
        $this->params['type'] = NULL;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->params['type'];
    }
    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->params['type'] = $type;
    }

    /**
     * @return string
     */
    public function getToDate()
    {
        return $this->params['toDate'];
    }
    /**
     * @param string $toDate
     */
    public function setToDate($toDate)
    {
        $this->params['toDate'] = $toDate;
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
        return $this->params['fromDate'];
    }
    /**
     * @param string $fromDate
     */
    public function setFromDate($fromDate)
    {
        $this->params['fromDate'] = $fromDate;
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
     * @return int
     */
    public function getBmbyProjectId()
    {
        return $this->params['bmbyProjectId'];
    }
    /**
     * @param int $bmbyProjectId
     */
    public function setBmbyProjectId($bmbyProjectId)
    {
        $this->params['bmbyProjectId'] = (int)$bmbyProjectId;
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