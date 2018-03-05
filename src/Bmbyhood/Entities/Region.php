<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class Region extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'region_id' => 0,
            'country_code' => '',
            'dectionary_key' => 0,
            'region_bmby_id' => 0
        ];
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
    public function setRegionBmbyId($value)
    {
        $this->fields['region_bmby_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getRegionBmbyId()
    {
        return $this->fields['region_bmby_id'];
    }

}