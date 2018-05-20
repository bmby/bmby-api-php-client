<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class Country extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'country_code' => '',
            'dictionary_key' => BmbyhoodEntity::EmptyGuid,
            'dictionary' => null,
            'country_bmby_id' => 0
        ];
    }

    public function setDictionary(MetaDictionary $dictionary)
    {
        $this->fields['dictionary'] = $dictionary->toArray();
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