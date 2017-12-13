<?php

namespace Bmbyhood\Enumerations;

class UserType extends Enumeration
{
    const Client = 1;
    const Broker = 2;

    /**
     * Converts integer value to UserType
     *
     * @param int $value
     *
     * @return int
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::Client:
            case self::Broker:
                return $intValue;
            default:
                return self::Unknown;
        }
    }
}