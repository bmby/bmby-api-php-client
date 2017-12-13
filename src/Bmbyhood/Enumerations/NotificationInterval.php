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
     * @return void
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::Online:
            case self::Hourly:
            case self::Daily:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}