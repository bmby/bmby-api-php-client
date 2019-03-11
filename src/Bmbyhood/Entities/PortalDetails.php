<?php

namespace Bmbyhood\Entities;


class PortalDetails extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'portal_url_for_broker' => '',
            'last_visit_date' => '',
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
        $this->fields['last_visit_date'] = (int)$value;
    }
    /**
     * @return string
     */
    public function getLastVisitDate()
    {
        return $this->fields['last_visit_date'];
    }

}