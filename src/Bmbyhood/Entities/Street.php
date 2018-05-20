<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class Street extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'street_id' => '',
            'city_id' => '',
            'dictionary_key' => BmbyhoodEntity::EmptyGuid,
            'dictionary' => null,
            'street_bmby_id' => 0
        ];
    }

    public function setDictionary(MetaDictionary $dictionary)
    {
        $this->fields['dictionary'] = $dictionary->toArray();
    }

    /**
     * @param int $value
     */
    public function setStreetId($value)
    {
        $this->fields['street_id'] = $value;
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
        $this->fields['city_id'] = $value;
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