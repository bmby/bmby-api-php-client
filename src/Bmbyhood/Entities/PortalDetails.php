<?php

namespace Bmbyhood\Entities;


class PortalDetails extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'portal_url_for_broker' => '',
            'last_visit_date' => '',
            'query_is_active' => false,
            'portal_id' => ''
        ];
    }

    /**
     * @param string $value
     */
    public function setPortalUrlForBroker($value)
    {
        $this->fields['portal_url_for_broker'] = (int)$value;
    }
    /**
     * @return string
     */
    public function getPortalUrlForBroker()
    {
        return $this->fields['portal_url_for_broker'];
    }

    /**
     * @param string $value
     */
    public function setLastVisitDate($value)
    {
        $this->fields['last_visit_date'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLastVisitDate()
    {
        return $this->fields['last_visit_date'];
    }

    /**
     * @param string $value
     */
    public function setPortalId($value)
    {
        $this->fields['portal_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPortalId()
    {
        return $this->fields['portal_id'];
    }

    /**
     * @param bool $value
     */
    public function setQueryIsActive($value)
    {
        $this->fields['query_is_active'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getQueryIsActive()
    {
        return $this->fields['query_is_active'];
    }
}