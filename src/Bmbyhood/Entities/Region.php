<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class Region extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'region_id' => '',
            'country_code' => '',
            'dictionary_key' => BmbyhoodEntity::EmptyGuid,
            'dictionary' => null,
            'region_bmby_id' => 0
        ];
    }

    public function setDictionary(MetaDictionary $dictionary)
    {
        $this->fields['dictionary'] = $dictionary->toArray();
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