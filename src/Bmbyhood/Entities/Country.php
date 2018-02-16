<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class Country extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'country_code' => '',
            'dectionary_key' => 0,
            'country_bmby_id' => 0
        ];
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
    public function setCountryBmbyId($value)
    {
        $this->fields['country_bmby_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getCountryBmbyId()
    {
        return $this->fields['country_bmby_id'];
    }
}