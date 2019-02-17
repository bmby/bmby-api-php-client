<?php

namespace Bmbyhood\Enumerations;

class PropertySkipStatus extends Enumeration
{
    const Contract = 1;
    const Negotiation = 2;

    /**
     * Converts integer value to PropertySkipStatus
     *
     * @param int $value
     * @return void
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::Contract:
            case self::Negotiation:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}