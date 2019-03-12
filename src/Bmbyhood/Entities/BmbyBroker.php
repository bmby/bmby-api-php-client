<?php
namespace Bmbyhood\Entities;

class BmbyBroker extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'project_id' => 0,
            'user_id' => 0,
            'enable_client_service' => false,
            'enable_broker_service' => false,
            'is_external_broker' => false,
            'bmby_instance_id' => ''
        ];
    }

    /**
     * @param string $value
     */
    public function setBmbyInstanceId($value)
    {
        $this->fields['bmby_instance_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getBmbyInstanceId()
    {
        return $this->fields['bmby_instance_id'];
    }

    /**
     * @param int $value
     */
    public function setProjectId($value)
    {
        $this->fields['project_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->fields['project_id'];
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