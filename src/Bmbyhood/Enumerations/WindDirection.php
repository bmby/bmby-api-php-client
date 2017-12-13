<?php

namespace Bmbyhood\Enumerations;

class WindDirection extends Enumeration
{
    const North = 1;
    const South = 2;
    const East = 3;
    const West = 4;

    /**
     * Converts integer value to WindDirection
     *
     * @param int $value
     * @return int
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::North:
            case self::South:
            case self::East:
            case self::West:
                return $intValue;
            default:
                return self::Unknown;
        }
    }
}