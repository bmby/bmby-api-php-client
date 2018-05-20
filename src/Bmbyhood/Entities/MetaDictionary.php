<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class MetaDictionary extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'key' => BmbyhoodEntity::EmptyGuid,
            'context' => '',
            'name' => '',
            'translations' => []
        ];
    }

    /**
     * @param MetaDictionaryTranslation $translation
     */
    public function addTranslation(MetaDictionaryTranslation $translation)
    {
        if (!isset($this->fields) || !is_array($this->fields))
        {
            $this->fields = [];
        }

        $this->fields['translations'][] = $translation->toArray();
    }

    /**
     * @param int $value
     */
    public function setKey($value)
    {
        $this->fields['key'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getKey()
    {
        return $this->fields['key'];
    }

    /**
     * @param string $value
     */
    public function setContext($value)
    {
        $this->fields['context'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getContext()
    {
        return $this->fields['context'];
    }

    /**
     * @param string $value
     */
    public function setName($value)
    {
        $this->fields['name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->fields['name'];
    }

}