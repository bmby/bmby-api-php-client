<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class PropertyType extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'property_type_id' => '',
            'agency_id' => null,
            'dictionary_key' => BmbyhoodEntity::EmptyGuid,
            'dictionary' => null,
            'category' => Enumerations\PropertyTypeCategory::Unknown,
            'bmby_property_type_id' => 0,
            'position' => 0
        ];
    }

    public function setDictionary(MetaDictionary $dictionary)
    {
        $this->fields['dictionary'] = $dictionary->toArray();
    }

    /**
     * @param Enumerations\PropertyTypeCategory $value
     */
    public function setCategory(Enumerations\PropertyTypeCategory $value)
    {
        $this->fields['category'] = $value ? $value->getValue() : Enumerations\PropertyTypeCategory::Unknown;
    }
    /**
     * @return Enumerations\PropertyTypeCategory
     */
    public function getCategory()
    {
        return new Enumerations\PropertyTypeCategory($this->fields['category']);
    }

    /**
     * @param string $value
     */
    public function setPropertyTypeId($value)
    {
        $this->fields['property_type_id'] = $value;
    }
    /**
     * @return string
     */
    public function getPropertyTypeId()
    {
        return $this->fields['property_type_id'];
    }

    /**
     * @param string $value
     */
    public function setAgencyId($value)
    {
        $this->fields['agency_id'] = $value;
    }
    /**
     * @return string
     */
    public function getAgencyId()
    {
        return $this->fields['agency_id'];
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
    public function setBmbyPropertyTypeId($value)
    {
        $this->fields['bmby_property_type_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyPropertyTypeId()
    {
        return $this->fields['bmby_property_type_id'];
    }

    /**
     * @param int $value
     */
    public function setPosition($value)
    {
        $this->fields['position'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->fields['position'];
    }

}