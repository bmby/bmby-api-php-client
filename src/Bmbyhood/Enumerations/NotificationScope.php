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
     * @return void
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::None:
            case self::User:
            case self::Project:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}
