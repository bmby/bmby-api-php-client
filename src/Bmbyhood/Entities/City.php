<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class City extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'city_id' => '',
            'region_id' => '',
            'country_code' => '',
            'dictionary_key' => BmbyhoodEntity::EmptyGuid,
            'dictionary' => null,
            'city_bmby_id' => 0
        ];
    }

    public function setDictionary(MetaDictionary $dictionary)
    {
        $this->fields['dictionary'] = $dictionary->toArray();
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
        $this->fields['region_id'] = $value;
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
    public function setDictionaryKey($value)
    {
        $this->fields['dictionary_key'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getDictionaryKey()
    {
        return $this->fields['dictionary_key'];
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