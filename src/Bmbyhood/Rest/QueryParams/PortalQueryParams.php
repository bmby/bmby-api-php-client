<?php

namespace Bmbyhood\Rest\QueryParams;
use Bmbyhood\Enumerations\PortalVisitStatus;

class PortalQueryParams extends QueryParams
{
    /**
     * TimeLineSummaryQueryParams constructor.
     * @param $bmbyInstanceId
     * @param $bmbyProjectId
     * @param $bmbyUserIds[]
     */
    public function __construct($bmbyInstanceId, $bmbyProjectId, $bmbyUserIds)
    {
        $this->params['bmbyInstanceId'] = $bmbyInstanceId;
        $this->params['bmbyProjectId'] = $bmbyProjectId;
        $this->params['bmbyUserIds'] = $bmbyUserIds;
        $this->params['fromDate'] = NULL;
        $this->params['toDate'] = NULL;
        $this->params['visitStatus'] = PortalVisitStatus::Unknown;
        $this->params['bmbyClientId'] = 0;
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
     * @return PortalVisitStatus
     */
    public function getVisitStatus()
    {
        return new PortalVisitStatus($this->params['visitStatus']);
    }

    /**
     * @param PortalVisitStatus $status
     */
    public function setVisitStatus(PortalVisitStatus $status)
    {
        $this->params['visitStatus'] = $status->getValue();
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