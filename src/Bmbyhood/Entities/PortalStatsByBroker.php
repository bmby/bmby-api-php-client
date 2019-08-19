<?php
namespace Bmbyhood\Entities;

class PortalStatsByBroker extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'bmby_broker_id' => 0,
            'number_of_portals' => 0,
            'not_visited_clients' => 0,
            'active_clients' => 0,
            'not_active_clients' => 0,
        ];
    }

    /**
     * @param int $value
     */
    public function setBmbyBrokerId($value)
    {
        $this->fields['bmby_broker_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyBrokerId()
    {
        return $this->fields['bmby_broker_id'];
    }

    /**
     * @param int $value
     */
    public function setNumberOfPortals($value)
    {
        $this->fields['number_of_portals'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getNumberOfPortals()
    {
        return $this->fields['number_of_portals'];
    }

    /**
     * @param int $value
     */
    public function setNotVisitedClients($value)
    {
        $this->fields['not_visited_clients'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getNotVisitedClients()
    {
        return $this->fields['not_visited_clients'];
    }

    /**
     * @param int $value
     */
    public function setActiveClients($value)
    {
        $this->fields['active_clients'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getActiveClients()
    {
        return $this->fields['active_clients'];
    }

    /**
     * @param int $value
     */
    public function setNotActiveClients($value)
    {
        $this->fields['not_active_clients'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getNotActiveClients()
    {
        return $this->fields['not_active_clients'];
    }
}