<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class PropertyOwner extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'property_owner_id' => 0,
            'property_owner_bmby_id' => 0,
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'mobile' => '',
            'creation_time' => '',
            'last_update_time' => '',
            'attributes' => []
        ];
    }

    /**
     * @param int $value
     */
    public function setPropertyOwnerId($value)
    {
        $this->fields['property_owner_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getPropertyOwnerId()
    {
        return $this->fields['property_owner_id'];
    }

    /**
     * @param int $value
     */
    public function setPropertyOwnerBmbyId($value)
    {
        $this->fields['property_owner_bmby_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getPropertyOwnerBmbyId()
    {
        return $this->fields['property_owner_bmby_id'];
    }

    /**
     * @param string $value
     */
    public function setLastName($value)
    {
        $this->fields['first_name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->fields['first_name'];
    }

    /**
     * @param string $value
     */
    public function setFirstName($value)
    {
        $this->fields['last_name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->fields['last_name'];
    }

    /**
     * @param string $value
     */
    public function setEmail($value)
    {
        $this->fields['email'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->fields['email'];
    }

    /**
     * @param string $value
     */
    public function setMobile($value)
    {
        $this->fields['mobile'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->fields['mobile'];
    }

    /**
     * @param string $value
     */
    public function setCreationTime($value)
    {
        $this->fields['creation_time'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getCreationTime()
    {
        return $this->fields['creation_time'];
    }

    /**
     * @param string $value
     */
    public function setLastUpdateTime($value)
    {
        $this->fields['last_update_time'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLastUpdateTime()
    {
        return $this->fields['last_update_time'];
    }

}