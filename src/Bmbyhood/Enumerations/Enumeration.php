<?php

namespace Bmbyhood\Enumerations;


abstract class Enumeration
{
    const Unknown = 0;

    public function __construct($value)
    {
        $this->setValue($value);
    }

    public function __toString()
    {
        return (string)$this->value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        throw new \Exception('SetValue method is not implemented');
    }

    public function isUnknown()
    {
        return $this->value == self::Unknown;
    }

    protected $value = self::Unknown;
}
