<?php

namespace Bmbyhood\Enumerations;

class PropertyCatalog extends Enumeration
{
    const Repository = 1;
    const Agency = 2;

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
            case self::Repository:
            case self::Agency:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}