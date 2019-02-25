<?php

namespace Bmbyhood\Enumerations;

class Platform extends Enumeration
{
    const Web = 1;
    const Android = 2;
    const Ios = 3;

    /**
     * Converts integer value to Platform
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
            case self::Web:
            case self::Android:
            case self::Ios:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}