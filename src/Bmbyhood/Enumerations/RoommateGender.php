<?php

namespace Bmbyhood\Enumerations;

class RoommateGender extends Enumeration
{
    const Male = 1;
    const Female = 2;

    /**
     * Converts integer value to RoommateGender
     *
     * @param int $value
     * @return int
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::Male:
            case self::Female:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}