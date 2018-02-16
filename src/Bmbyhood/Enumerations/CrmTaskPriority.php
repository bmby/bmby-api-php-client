<?php

namespace Bmbyhood\Enumerations;

class CrmTaskPriority extends Enumeration
{
    const Normal = 1;
    const High = 2;
    const Medium = 3;
    const ToHandle = 4;

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
            case self::Normal:
            case self::High:
            case self::Medium:
            case self::ToHandle:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}