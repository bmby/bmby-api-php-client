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

    public function getValues()
    {
        $reflectionClass = new \ReflectionClass($this);
        return $reflectionClass->getConstants();
    }

    public function getValue()
    {
        if (!is_numeric($this->value)) {
            $values = $this->getValues();

            return isset($values[$this->value]) ? $values[$this->value] : self::Unknown;
        }

        return $this->value;
    }

    public function setValue($value)
    {
        $values = $this->getValues();

        if (!is_numeric($value)) {
            $this->value = isset($values[$value]) ? $values[$value] : self::Unknown;
            return;
        }

        $this->value = in_array((int)$value, $values) ? (int)$value : self::Unknown;
    }

    public function isUnknown()
    {
        return $this->value == self::Unknown;
    }

    protected $value = self::Unknown;
}
