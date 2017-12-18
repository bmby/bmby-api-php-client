<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class Query extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'query_id' => '',
            'user_id' => 0,
            'agency_id' => 0,
            'min_rooms' => NULL,
            'max_rooms' => NULL,
            'min_floor' => NULL,
            'max_floor' => NULL,
            'min_price' => NULL,
            'max_price' => NULL,
            'min_area' => NULL,
            'max_area' => NULL,
            'wind_direction' => Enumerations\WindDirection::Unknown,
            'has_balcony' => NULL,
            'has_security_room' => NULL,
            'has_parking' => NULL,
            'has_air_conditioner' => NULL,
            'has_storage' => NULL,
            'is_new_building' => NULL,
            'has_garden' => NULL,
            'has_elevator' => NULL,
            'has_furniture' => NULL,
            'has_access_to_disabled' => NULL,
            'is_active' => NULL,
            'deal_types' => array(),
            'zones' => array(),
            'cities' => array(),
            'neighbourhoods' => array(),
            'streets' => array()
        ];
    }

    /**
     * @param string $value
     */
    public function setQueryId($value)
    {
        $this->fields['query_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getQueryId()
    {
        return $this->fields['query_id'];
    }

    /**
     * @param int $value
     */
    public function setUserId($value)
    {
        $this->fields['user_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->fields['user_id'];
    }

    /**
     * @param int $value
     */
    public function setAgencyId($value)
    {
        $this->fields['agency_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getAgencyId()
    {
        return $this->fields['agency_id'];
    }

    /**
     * @param float $value
     */
    public function setMinRooms($value)
    {
        $this->fields['min_rooms'] = $value != NULL ? (float)$value : NULL;
    }
    /**
     * @return float|NULL
     */
    public function getMinRooms()
    {
        return $this->fields['min_rooms'];
    }

    /**
     * @param float $value
     */
    public function setMaxRooms($value)
    {
        $this->fields['max_rooms'] = $value != NULL ? (float)$value : NULL;
    }
    /**
     * @return float|NULL
     */
    public function getMaxRooms()
    {
        return $this->fields['max_rooms'];
    }

    /**
     * @param int $value
     */
    public function setMinFloor($value)
    {
        $this->fields['min_floor'] = $value != NULL ? (int)$value : NULL;
    }
    /**
     * @return int|NULL
     */
    public function getMinFloor()
    {
        return $this->fields['min_floor'];
    }

    /**
     * @param int $value
     */
    public function setMaxFloor($value)
    {
        $this->fields['max_floor'] = $value != NULL ? (int)$value : NULL;
    }
    /**
     * @return int|NULL
     */
    public function getMaxFloor()
    {
        return $this->fields['max_floor'];
    }

    /**
     * @param float $value
     */
    public function setMinPrice($value)
    {
        $this->fields['min_price'] = $value != NULL ? (float)$value : NULL;
    }
    /**
     * @return float|NULL
     */
    public function getMinPrice()
    {
        return $this->fields['min_price'];
    }

    /**
     * @param float $value
     */
    public function setMaxPrice($value)
    {
        $this->fields['max_price'] = $value != NULL ? (float)$value : NULL;
    }
    /**
     * @return float|NULL
     */
    public function getMaxPrice()
    {
        return $this->fields['max_price'];
    }

    /**
     * @param float $value
     */
    public function setMinArea($value)
    {
        $this->fields['min_area'] = $value != NULL ? (float)$value : NULL;
    }
    /**
     * @return float|NULL
     */
    public function getMinArea()
    {
        return $this->fields['min_area'];
    }

    /**
     * @param float $value
     */
    public function setMaxArea($value)
    {
        $this->fields['max_area'] = $value != NULL ? (float)$value : NULL;
    }
    /**
     * @return float|NULL
     */
    public function getMaxArea()
    {
        return $this->fields['max_area'];
    }

    /**
     * @param Enumerations\WindDirection $value
     */
    public function setWindDirection(Enumerations\WindDirection $value)
    {
        $this->fields['wind_direction'] = $value ? $value->getValue() : Enumerations\WindDirection::Unknown;
    }
    /**
     * @return Enumerations\WindDirection
     */
    public function getWindDirection()
    {
        return new Enumerations\WindDirection($this->fields['wind_direction']);
    }

    /**
     * @param bool $value
     */
    public function setHasBalcony($value)
    {
        $this->fields['has_balcony'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasBalcony()
    {
        return $this->fields['has_balcony'];
    }

    /**
     * @param bool $value
     */
    public function setHasAccessToDisabled($value)
    {
        $this->fields['has_access_to_disabled'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasAccessToDisabled()
    {
        return $this->fields['has_access_to_disabled'];
    }

    /**
     * @param bool $value
     */
    public function setHasSecurityRoom($value)
    {
        $this->fields['has_security_room'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasSecurityRoom()
    {
        return $this->fields['has_security_room'];
    }

    /**
     * @param bool $value
     */
    public function setHasParking($value)
    {
        $this->fields['has_parking'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasParking()
    {
        return $this->fields['has_parking'];
    }

    /**
     * @param bool $value
     */
    public function setHasAirConditioner($value)
    {
        $this->fields['has_air_conditioner'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasAirConditioner()
    {
        return $this->fields['has_air_conditioner'];
    }

    /**
     * @param bool $value
     */
    public function setHasStorage($value)
    {
        $this->fields['has_storage'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasStorage()
    {
        return $this->fields['has_storage'];
    }

    /**
     * @param bool $value
     */
    public function setIsNewBuilding($value)
    {
        $this->fields['is_new_building'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getIsNewBuilding()
    {
        return $this->fields['is_new_building'];
    }

    /**
     * @param bool $value
     */
    public function setHasGarden($value)
    {
        $this->fields['has_garden'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasGarden()
    {
        return $this->fields['has_garden'];
    }

    /**
     * @param bool $value
     */
    public function setHasElevator($value)
    {
        $this->fields['has_elevator'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasElevator()
    {
        return $this->fields['has_elevator'];
    }

    /**
     * @param bool $value
     */
    public function setHasFurniture($value)
    {
        $this->fields['has_furniture'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasFurniture()
    {
        return $this->fields['has_furniture'];
    }

    /**
     * @param Enumerations\DealType $value
     */
    public function addDealType(Enumerations\DealType $value)
    {
        if (!$value || in_array($value->getValue(), $this->fields['deal_types'])) {
            return;
        }

        $this->fields['deal_types'][] = $value->getValue();
    }
    /**
     * @param Enumerations\DealType $value
     */
    public function removeDealType(Enumerations\DealType $value)
    {
        if (($key = array_search($value->getValue(), $this->fields['deal_types'])) !== false) {
            unset($this->fields['deal_types'][$key]);
        }
    }
    /**
     * @return array
     */
    public function getDealTypes()
    {
        return $this->fields['deal_types'];
    }

    /**
     * @param int $value
     */
    public function addZone($value)
    {
        if (!(int)$value || in_array((int)$value, $this->fields['zones'])) {
            return;
        }

        $this->fields['zones'][] = (int)$value;
    }
    /**
     * @param int $value
     */
    public function removeZone($value)
    {
        if (($key = array_search((int)$value, $this->fields['zones'])) !== false) {
            unset($this->fields['zones'][$key]);
        }
    }
    /**
     * @return array
     */
    public function getZones()
    {
        return $this->fields['zones'];
    }

    /**
     * @param int $value
     */
    public function addCity($value)
    {
        if (!(int)$value || in_array((int)$value, $this->fields['cities'])) {
            return;
        }

        $this->fields['cities'][] = (int)$value;
    }
    /**
     * @param int $value
     */
    public function removeCity($value)
    {
        if (($key = array_search((int)$value, $this->fields['cities'])) !== false) {
            unset($this->fields['cities'][$key]);
        }
    }
    /**
     * @return array
     */
    public function getCities()
    {
        return $this->fields['cities'];
    }

    /**
     * @param int $value
     */
    public function addNeighbourhood($value)
    {
        if (!(int)$value || in_array((int)$value, $this->fields['neighbourhoods'])) {
            return;
        }

        $this->fields['neighbourhoods'][] = (int)$value;
    }
    /**
     * @param int $value
     */
    public function removeNeighbourhood($value)
    {
        if (($key = array_search((int)$value, $this->fields['neighbourhoods'])) !== false) {
            unset($this->fields['neighbourhoods'][$key]);
        }
    }
    /**
     * @return array
     */
    public function getNeighbourhoods()
    {
        return $this->fields['neighbourhoods'];
    }

    /**
     * @param int $value
     */
    public function addStreet($value)
    {
        if (!(int)$value || in_array((int)$value, $this->fields['streets'])) {
            return;
        }

        $this->fields['streets'][] = (int)$value;
    }
    /**
     * @param int $value
     */
    public function removeStreet($value)
    {
        if (($key = array_search((int)$value, $this->fields['streets'])) !== false) {
            unset($this->fields['streets'][$key]);
        }
    }
    /**
     * @return array
     */
    public function getStreets()
    {
        return $this->fields['streets'];
    }
}


?>