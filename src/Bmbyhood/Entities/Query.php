<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;
use Bmbyhood\Entities\ListItem;

class Query extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'query_id' => '',
            'title' => '',
            'user_id' => 0,
            'bmby_project_id' => 0,
            'bmby_instance_id' => '',
            'bmby_client_id' => 0,
            'agency_id' => '',
            'customer_id' => '',
            'min_rooms' => NULL,
            'max_rooms' => NULL,
            'min_floor' => NULL,
            'max_floor' => NULL,
            'min_price' => NULL,
            'max_price' => NULL,
            'min_area' => NULL,
            'max_area' => NULL,
            'wind_direction' => Enumerations\WindDirection::Unknown,
            'has_religion_facility' => NULL,
            'can_be_extended' => NULL,
            'has_swimming_pool' => NULL,
            'has_jacuzzi' => NULL,
            'has_pandoor' => NULL,
            'has_gym' => NULL,
            'has_yard' => NULL,
            'has_parent_bedroom' => NULL,
            'has_event_room' => NULL,
            'has_window_bars' => NULL,
            'has_shabat_elevator' => NULL,
            'has_balcony' => NULL,
            'has_teracce' => NULL,
            'has_secure_room' => NULL,
            'has_cellar' => NULL,
            'has_access_for_disabled' => NULL,
            'has_guard' => NULL,
            'has_separate_entrance' => NULL,
            'has_parking' => NULL,
            'has_air_conditioner' => NULL,
            'has_storage' => NULL,
            'is_new_building' => NULL,
            'has_garden' => NULL,
            'is_unit' => NULL,
            'has_panorama' => NULL,
            'on_columns' => NULL,
            'filled_by_customer' => NULL,
            'has_elevator' => NULL,
            'has_furniture' => NULL,
            'has_access_to_disabled' => NULL,
            'is_active' => NULL,
            'deal_types' => [],
            'regions' => [],
            'cities' => [],
            'neighbourhoods' => [],
            'streets' => [],
            'property_types' => []
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
     * @param string $value
     */
    public function setCustomerId($value)
    {
        $this->fields['customer_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->fields['customer_id'];
    }

    /**
     * @param string $value
     */
    public function setTitle($value)
    {
        $this->fields['title'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->fields['title'];
    }

    /**
     * @param string $value
     */
    public function setBmbyInstanceId($value)
    {
        $this->fields['bmby_instance_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getBmbyInstanceId()
    {
        return $this->fields['bmby_instance_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyProjectId($value)
    {
        $this->fields['bmby_project_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyProjectId()
    {
        return $this->fields['bmby_project_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyClientId($value)
    {
        $this->fields['bmby_client_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyClientId()
    {
        return $this->fields['bmby_client_id'];
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
     * @param string $value
     */
    public function setAgencyId($value)
    {
        $this->fields['agency_id'] = (string)$value;
    }
    /**
     * @return string
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
    public function setHasReligionFacility($value)
    {
        $this->fields['has_religion_facility'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasReligionFacility()
    {
        return $this->fields['has_religion_facility'];
    }

    /**
     * @param bool $value
     */
    public function setCanBeExtended($value)
    {
        $this->fields['can_be_extended'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getCanBeExtended()
    {
        return $this->fields['can_be_extended'];
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
    public function setHasYard($value)
    {
        $this->fields['has_yard'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasYard()
    {
        return $this->fields['has_yard'];
    }

    /**
     * @param bool $value
     */
    public function setHasSwimmingPool($value)
    {
        $this->fields['has_swimming_pool'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasSwimmingPool()
    {
        return $this->fields['has_swimming_pool'];
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
    public function setHasSecureRoom($value)
    {
        $this->fields['has_secure_room'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasSecureRoom()
    {
        return $this->fields['has_secure_room'];
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
    public function setHasWindowBars($value)
    {
        $this->fields['has_window_bars'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasWindowBars()
    {
        return $this->fields['has_window_bars'];
    }

    /**
     * @param bool $value
     */
    public function setHasAccessForDisabled($value)
    {
        $this->fields['has_access_for_disabled'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasAccessForDisabled()
    {
        return $this->fields['has_access_for_disabled'];
    }

    /**
     * @param bool $value
     */
    public function setHasShabatElevator($value)
    {
        $this->fields['has_shabat_elevator'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasShabatElevator()
    {
        return $this->fields['has_shabat_elevator'];
    }

    /**
     * @param bool $value
     */
    public function setHasPandoor($value)
    {
        $this->fields['has_pandoor'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasPandoor()
    {
        return $this->fields['has_pandoor'];
    }

    /**
     * @param bool $value
     */
    public function setHasParentBedroom($value)
    {
        $this->fields['has_parent_bedroom'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasParentBedroom()
    {
        return $this->fields['has_parent_bedroom'];
    }

    /**
     * @param bool $value
     */
    public function setHasEventRoom($value)
    {
        $this->fields['has_event_room'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasEventRoom()
    {
        return $this->fields['has_event_room'];
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
    public function setHasTeracce($value)
    {
        $this->fields['has_teracce'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasTeracce()
    {
        return $this->fields['has_teracce'];
    }

    /**
     * @param bool $value
     */
    public function setHasSeparateEntrance($value)
    {
        $this->fields['has_separate_entrance'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasSeparateEntrance()
    {
        return $this->fields['has_separate_entrance'];
    }

    /**
     * @param bool $value
     */
    public function setHasCellar($value)
    {
        $this->fields['has_cellar'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasCellar()
    {
        return $this->fields['has_cellar'];
    }

    /**
     * @param bool $value
     */
    public function setHasPanorama($value)
    {
        $this->fields['has_panorama'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasPanorama()
    {
        return $this->fields['has_panorama'];
    }

    /**
     * @param bool $value
     */
    public function setHasJacuzzi($value)
    {
        $this->fields['has_jacuzzi'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasJacuzzi()
    {
        return $this->fields['has_jacuzzi'];
    }

    /**
     * @param bool $value
     */
    public function setIsActive($value)
    {
        $this->fields['is_active'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getIsActive()
    {
        return $this->fields['is_active'];
    }

    /**
     * @param bool $value
     */
    public function setHasGym($value)
    {
        $this->fields['has_gym'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasGym()
    {
        return $this->fields['has_gym'];
    }

    /**
     * @param bool $value
     */
    public function setHasGuard($value)
    {
        $this->fields['has_guard'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getHasGuard()
    {
        return $this->fields['has_guard'];
    }

    /**
     * @param bool $value
     */
    public function setIsUnit($value)
    {
        $this->fields['is_unit'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getIsUnit()
    {
        return $this->fields['is_unit'];
    }

    /**
     * @param bool $value
     */
    public function setOnColumns($value)
    {
        $this->fields['on_columns'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getOnColumns()
    {
        return $this->fields['on_columns'];
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
     * @param bool $value
     */
    public function setFilledByCustomer($value)
    {
        $this->fields['filled_by_customer'] = $value != NULL ? (bool)$value : NULL;
    }
    /**
     * @return bool|NULL
     */
    public function getFilledByCustomer()
    {
        return $this->fields['filled_by_customer'];
    }

    /**
     * @param ListItem[] $values
     */
    public function setDealTypes($values)
    {
        $this->setListField($values, 'deal_types');
    }
    /**
     * @return ListItem[]
     */
    public function getDealTypes()
    {
        return $this->getListField('deal_types');
    }

    /**
     * @param ListItem[] $values
     */
    public function setZones($values)
    {
        $this->setListField($values, 'regions');
    }
    /**
     * @return ListItem[]
     */
    public function getZones()
    {
        return $this->getListField('regions');
    }

    /**
     * @param ListItem[] $values
     */
    public function setCities($values)
    {
        $this->setListField($values, 'cities');
    }
    /**
     * @return ListItem[]
     */
    public function getCities()
    {
        return $this->getListField('cities');
    }

    /**
     * @param ListItem[] $values
     */
    public function setNeighbourhoods($values)
    {
        $this->setListField($values, 'neighbourhoods');
    }
    /**
     * @return ListItem[]
     */
    public function getNeighbourhoods()
    {
        return $this->getListField('neighbourhoods');
    }

    /**
     * @param ListItem[] $values
     */
    public function setStreets($values)
    {
        $this->setListField($values, 'streets');
    }
    /**
     * @return ListItem[]
     */
    public function getStreets()
    {
        return $this->getListField('streets');
    }

    /**
     * @param ListItem[] $values
     */
    public function setPropertyTypes($values)
    {
        $this->setListField($values, 'property_types');
    }
    /**
     * @return ListItem[]
     */
    public function getPropertyTypes()
    {
        return $this->getListField('property_types');
    }
}

?>