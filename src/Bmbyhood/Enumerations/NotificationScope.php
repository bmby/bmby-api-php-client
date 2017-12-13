<?php

namespace Bmbyhood\Enumerations;

class NotificationScope extends Enumeration
{
    const None = 1;
    const User = 2;
    const Project = 3;

    /**
     * Converts integer value to NotificationScope
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
            case self::None:
            case self::User:
            case self::Project:
                return $intValue;
            default:
                return self::Unknown;
        }
    }
}
