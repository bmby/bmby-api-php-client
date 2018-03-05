<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class City extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'city_id' => 0,
            'region_id' => 0,
            'country_code' => '',
            'dectionary_key' => 0,
            'city_bmby_id' => 0
        ];
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
    public function setRegionId($value)
    {
        $this->fields['region_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getRegionId()
    {
        return $this->fields['region_id'];
    }

    /**
     * @param string $value
     */
    public function setCountryCode($value)
    {
        $this->fields['country_code'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->fields['country_code'];
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
    public function setCityBmbyId($value)
    {
        $this->fields['city_bmby_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getCityBmbyId()
    {
        return $this->fields['city_bmby_id'];
    }

}