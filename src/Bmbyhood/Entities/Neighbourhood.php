<?php

namespace Bmbyhood\Entities;


class Neighbourhood extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'city_id' => BmbyhoodEntity::EmptyGuid,
            'dictionary_key' => BmbyhoodEntity::EmptyGuid,
            'dictionary' => null,
            'neighbourhood_bmby_id' => 0
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