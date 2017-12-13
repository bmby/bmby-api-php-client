<?php

namespace Bmbyhood\Enumerations;

class DealType extends Enumeration
{
    const Sale = 1;
    const Rent = 2;

    /**
     * Converts integer value to DealType
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
            case self::Sale:
            case self::Rent:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}