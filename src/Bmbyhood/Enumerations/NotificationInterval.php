<?php

namespace Bmbyhood\Enumerations;

class NotificationInterval extends Enumeration
{
    const Online = 1;
    const Hourly = 2;
    const Daily = 3;

    /**
     * Converts integer value to NotificationInterval
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
            case self::Online:
            case self::Hourly:
            case self::Daily:
                return $intValue;
            default:
                return self::Unknown;
        }
    }
}