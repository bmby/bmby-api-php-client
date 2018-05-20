<?php

namespace Bmbyhood\Enumerations;

class PropertyTypeCategory extends Enumeration
{
    const Residential = 1;
    const Commercial = 2;
    const Plot = 3;

    /**
     * Converts integer value to PropertyTypeCategory
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
            case self::Residential:
            case self::Commercial:
            case self::Plot:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}