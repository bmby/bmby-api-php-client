<?php
namespace Bmbyhood\Entities;

class PropertyMatchFromBmby extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'bmby_project_id' => 0,
            'bmby_instance_id' => '',
            'bmby_user_id' => 0,
            'bmby_owner_id' => 0,
            'bmby_client_id' => 0,
            'is_signed' => false
        ];
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

    /**
     * @param int $value
     */
    public function setBmbyUserId($value)
    {
        $this->fields['bmby_user_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyUserId()
    {
        return $this->fields['bmby_user_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyOwnerId($value)
    {
        $this->fields['bmby_owner_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyOwnerId()
    {
        return $this->fields['bmby_owner_id'];
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
     * @param bool $value
     */
    public function setIsSigned($value)
    {
        $this->fields['is_signed'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getIsSigned()
    {
        return $this->fields['is_signed'];
    }
}


?>