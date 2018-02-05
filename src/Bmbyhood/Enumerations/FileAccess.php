<?php

namespace Bmbyhood\Enumerations;

class FileAccess extends Enumeration
{
    const PublicAccess = 1;
    const PrivateAccess = 2;

    /**
     * Converts integer value to FileAccess
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
            case self::PublicAccess:
            case self::PrivateAccess:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}