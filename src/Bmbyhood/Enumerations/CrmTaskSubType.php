<?php

namespace Bmbyhood\Enumerations;

class CrmTaskSubType extends Enumeration
{
    const Incoming = 1;
    const Outgoing = 2;
    const Hidden = 3;

    /**
     * Converts integer value to CrmTaskPriority
     *
     * @param int $value
     * @return void
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::Incoming:
            case self::Outgoing:
            case self::Hidden:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}