<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class Street extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'street_id' => 0,
            'city_id' => 0,
            'dectionary_key' => 0,
            'street_bmby_id' => 0
        ];
    }

    /**
     * @param int $value
     */
    public function setStreetId($value)
    {
        $this->fields['street_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getStreetId()
    {
        return $this->fields['street_id'];
    }

    /**
     * @param int $value
     */
    public function setCityId($value)
    {
        $this->fields['city_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->fields['city_id'];
    }

     /**
     * @param int $value
     */
    public function setDectionaryKey($value)
    {
        $this->fields['dectionary_key'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getDectionaryKey()
    {
        return $this->fields['dectionary_key'];
    }

    /**
     * @param int $value
     */
    public function setStreetBmbyId($value)
    {
        $this->fields['street_bmby_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getStreetBmbyId()
    {
        return $this->fields['street_bmby_id'];
    }

}