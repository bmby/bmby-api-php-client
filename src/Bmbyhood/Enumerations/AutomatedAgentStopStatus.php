<?php

namespace Bmbyhood\Enumerations;

class AutomatedAgentStopStatus extends Enumeration
{
    const NotVisited = 1;
    const Visited = 2;
    const Reserved = 3;
    const PriceOffer = 4;
    const Negotiation = 5;
    const Meeting = 6;
    const Contract = 7;


    /**
     * Converts integer value to AutomatedAgentStopStatus
     *
     * @param int $value
     * @return void
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::NotVisited:
            case self::Visited:
            case self::Reserved:
            case self::PriceOffer:
            case self::Negotiation:
            case self::Meeting:
            case self::Contract:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}