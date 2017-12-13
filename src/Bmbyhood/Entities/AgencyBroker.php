<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class AgencyBroker extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'agency_id' => 0,
            'user_id' => 0,
            'broker_license' => '',
            'notification_scope' => Enumerations\NotificationScope::Unknown,
            'enable_client_service' => 0,
            'enable_broker_service' => 0,
            'is_external_broker' => 0
        ];
    }

    /**
     * @param int $value
     */
    public function setAgencyId($value)
    {
        $this->fields['agency_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getAgencyId()
    {
        return $this->fields['agency_id'];
    }

    /**
     * @param int $value
     */
    public function setUserId($value)
    {
        $this->fields['user_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->fields['user_id'];
    }

    /**
     * @param string $value
     */
    public function setBrokerLicense($value)
    {
        $this->fields['broker_license'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getBrokerLicense()
    {
        return $this->fields['broker_license'];
    }

    /**
     * @param Enumerations\NotificationScope $value
     */
    public function setNotificationScope(Enumerations\NotificationScope $value)
    {
        $this->fields['notification_scope'] = $value ? $value : new Enumerations\NotificationScope(Enumerations\NotificationScope::Unknown);
    }
    /**
     * @return Enumerations\NotificationScope
     */
    public function getNotificationScope()
    {
        return new Enumerations\NotificationScope($this->fields['notification_scope']);
    }

    /**
     * @param bool $value
     */
    public function setEnableClientService($value)
    {
        $this->fields['enable_client_service'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getEnableClientService()
    {
        return $this->fields['enable_client_service'];
    }

    /**
     * @param bool $value
     */
    public function setEnableBrokerService($value)
    {
        $this->fields['enable_broker_service'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getEnableBrokerService()
    {
        return $this->fields['enable_broker_service'];
    }

    /**
     * @param bool $value
     */
    public function setIsExternalBroker($value)
    {
        $this->fields['is_external_broker'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getIsExternalBroker()
    {
        return $this->fields['is_external_broker'];
    }

}


?>