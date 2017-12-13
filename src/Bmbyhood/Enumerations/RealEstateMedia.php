<?php

namespace Bmbyhood\Enumerations;

class RealEstateMedia extends Enumeration
{
    const Yad2 = 1;
    const WinWin = 2;
    const Madas = 3;

    /**
     * Converts integer value to RealEstateMedia
     *
     * @param int $value
     * @return int|void
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::Yad2:
            case self::WinWin:
            case self::Madas:
                return $intValue;
            default:
                return self::Unknown;
        }
    }
}
