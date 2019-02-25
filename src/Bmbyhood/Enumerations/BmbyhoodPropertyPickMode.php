<?php

namespace Bmbyhood\Enumerations;

class BmbyhoodPropertyPickMode extends Enumeration
{
    const Random = 1;
    const ExclusiveNewerFirst = 2;
    const ExclusiveOlderFirst = 3;

    /**
     * Converts integer value to BmbyhoodPropertyPickMode
     *
     * @param int $value
     * @return void
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::Random:
            case self::ExclusiveNewerFirst:
            case self::ExclusiveOlderFirst:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}