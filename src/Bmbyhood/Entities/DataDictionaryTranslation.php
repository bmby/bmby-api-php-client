<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class DataDictionaryTranslation extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'key' => 0,
            'language_code' => '',
            'content' => ''
        ];
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
    public function setLanguageCode($value)
    {
        $this->fields['language_code'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->fields['language_code'];
    }


    /**
     * @param string $value
     */
    public function setContent($value)
    {
        $this->fields['content'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->fields['content'];
    }

}