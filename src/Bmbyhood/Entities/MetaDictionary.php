<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class MetaDictionary extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'key' => 0,
            'context' => ''
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

}