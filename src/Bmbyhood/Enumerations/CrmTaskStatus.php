<?php

namespace Bmbyhood\Enumerations;

class CrmTaskStatus extends Enumeration
{
    const NewTask = 1;
    const Completed = 2;
    const Canceled = 3;

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
            case self::NewTask:
            case self::Completed:
            case self::Canceled:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}