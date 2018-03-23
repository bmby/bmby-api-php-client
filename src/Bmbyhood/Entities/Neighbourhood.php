<?php

namespace Bmbyhood\Entities;


class Neighbourhood extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'city_id' => 0,
            'dectionary_key' => 0,
            'neighbourhood_bmby_id' => 0
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
    public function setNeighbourhoodBmbyId($value)
    {
        $this->fields['neighbourhood_bmby_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getNeighbourhoodBmbyId()
    {
        return $this->fields['neighbourhood_bmby_id'];
    }

}