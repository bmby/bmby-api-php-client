<?php
namespace Bmbyhood\Entities;

class UserBmbyClient extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'user_id' => 0,
            'bmby_client_id' => 0,
            'bmby_project_id' => 0,
            'bmby_instance_id' => '',
        ];
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
     * @param int $value
     */
    public function setBmbyClientId($value)
    {
        $this->fields['bmby_client_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyClientId()
    {
        return $this->fields['bmby_client_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyProjectId($value)
    {
        $this->fields['bmby_project_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyProjectId()
    {
        return $this->fields['bmby_project_id'];
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
}


?>