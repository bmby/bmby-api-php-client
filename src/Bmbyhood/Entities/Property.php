<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class Property extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'property_id' => '',
            'sku' => 0,
            'lat' => NULL,
            'lon' => NULL,
            'agency_id' => NULL,
            'property_type_id' => NULL,
            'bmby_project_id' => NULL,
            'bmby_instance_id' => '',
            'bedrooms' => 0,
            'contact_id' => '',
            'contact' => NULL,
            'catalog' => Enumerations\PropertyCatalog::Unknown,
            'title' => '',
            'display_title' => '',
            'description' => '',
            'publish_date' => '',
            'limited_description' => '',
            'address' => '',
            'bmby_property_id' => 0,
            'bmby_property_type_id' => 0,
            'bmby_owners_property_id' => 0,
            'bmby_company_id' => 0,
            'bmby_broker_id' => 0,
            'is_published' => false,
            'parser_record_id' => 0,
            'media' => Enumerations\RealEstateMedia::Unknown,
            'property_media_id' => 0,
            'page_link' => '',
            'is_commercial' => false,
            'deal_type' => Enumerations\DealType::Unknown,
            'number_of_payments_per_year' => 0,
            'can_be_rented_with_roommate' => false,
            'roommate_gender' => Enumerations\RoommateGender::Unknown,
            'rommate_can_smoke' => false,
            'region_id' => '',
            'city_id' => '',
            'neighbourhood_id' => '',
            'street_id' => '',
            'bmby_region_id' => 0,
            'bmby_city_id' => 0,
            'bmby_neighbourhood_id' => 0,
            'bmby_street_id' => 0,
            'house_number' => '',
            'property_type' => NULL,
            'bathrooms' => NULL,
            'toilets' => NULL,
            'parkings' => NULL,
            'parking_type' => 0,
            'condition' => 0,
            'number_of_steps' => 0,
            'floor' => 0,
            'floors' => 0,
            'rooms' => 0.0,
            'area' => 0.0,
            'plot_area' => 0.0,
            'balcony_area' => 0.0,
            'cellar_area' => 0.0,
            'price' => 0.0,
            'unit_price' => 0.0,
            'entry_date' => NULL,
            'entry_date_mode' => Enumerations\EntryDateMode::Unknown,
            'comments' => '',
            'has_air_conditioner' => false,
            'has_window_bars' => false,
            'has_parking' => false,
            'has_furniture' => false,
            'furniture_description' => '',
            'has_religion_facility' => false,
            'can_be_extended' => false,
            'has_swimming_pool' => false,
            'has_jacuzzi' => false,
            'has_pandoor' => false,
            'has_gym' => false,
            'has_yard' => false,
            'has_parent_bedroom' => false,
            'has_event_room' => false,
            'has_storage' => false,
            'has_cellar' => false,
            'has_elevator' => false,
            'has_shabat_elevator' => false,
            'has_secure_room' => false,
            'has_guard' => false,
            'has_separate_entrance' => false,
            'is_unit' => false,
            'has_balcony' => false,
            'has_teracce' => false,
            'has_access_for_disabled' => false,
            'has_garden' => false,
            'garden_area' => 0.0,
            'has_panorama' => false,
            'on_columns' => false,
            'closed' => false,
            'published_by_agency' => false,
            'wind_directions' => [],
            'creation_time' => NULL,
            'last_update_time' => NULL,
            'exclusivity_date' => '',
            'is_exclusive' => false,
            'has_images' => false,
            'brokerage_status' => Enumerations\BrokerageStatus::Unknown,
            'external_images' => []
        ];
    }

    /**
     * @param string $value
     */
    public function setPropertyId($value)
    {
        $this->fields['property_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPropertyId()
    {
        return $this->fields['property_id'];
    }


    /**
     * @param string $value format: yyyy-mm-dd hh:mm:ss
     */
    public function setEntryDate($value)
    {
        $this->fields['entry_date'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getEntryDate()
    {
        return $this->fields['entry_date'];
    }


    /**
     * @param string $value
     */
    public function setAgencyId($value)
    {
        $this->fields['agency_id'] = $value;
    }
    /**
     * @return string
     */
    public function getAgencyId()
    {
        return $this->fields['agency_id'];
    }

    /**
     * @param string $value
     */
    public function setBmbyInstanceId($value)
    {
        $this->fields['bmby_instance_id'] = $value;
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
     * @param float $value
     */
    public function setBedrooms($value)
    {
        $this->fields['bedrooms'] = (float)$value;
    }
    /**
     * @return float
     */
    public function getBedrooms()
    {
        return $this->fields['bedrooms'];
    }

    /**
     * @param int $value
     */
    public function setBmbyOwnersPropertyId($value)
    {
        $this->fields['bmby_owners_property_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyOwnersPropertyId()
    {
        return $this->fields['bmby_owners_property_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyCompanyId($value)
    {
        $this->fields['bmby_company_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyCompanyId()
    {
        return $this->fields['bmby_company_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyBrokerId($value)
    {
        $this->fields['bmby_broker_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyBrokerId()
    {
        return $this->fields['bmby_broker_id'];
    }

    /**
     * @param bool $value
     */
    public function setIsPublished($value)
    {
        $this->fields['is_published'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getIsPublished()
    {
        return $this->fields['is_published'];
    }

    /**
     * @param bool $value
     */
    public function setIsExclusive($value)
    {
        $this->fields['is_exclusive'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getIsExclusive()
    {
        return $this->fields['is_exclusive'];
    }

    /**
     * @param int $value
     */
    public function setParserRecordId($value)
    {
        $this->fields['parser_record_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getParserRecordId()
    {
        return $this->fields['parser_record_id'];
    }

    /**
     * @param Enumerations\PropertyCatalog $value
     */
    public function setCatalog(Enumerations\PropertyCatalog $value)
    {
        $this->fields['catalog'] = $value ? $value->getValue() : Enumerations\PropertyCatalog::Unknown;
    }
    /**
     * @return Enumerations\PropertyCatalog
     */
    public function getCatalog()
    {
        return new Enumerations\PropertyCatalog($this->fields['catalog']);
    }

    /**
     * @param Enumerations\EntryDateMode $value
     */
    public function setEntryDateMode(Enumerations\EntryDateMode $value)
    {
        $this->fields['entry_date_mode'] = $value ? $value->getValue() : Enumerations\EntryDateMode::Unknown;
    }

    /**
     * @return Enumerations\EntryDateMode
     */
    public function getEntryDateMode()
    {
        return new Enumerations\EntryDateMode($this->fields['entry_date_mode']);
    }

    /**
     * @param Enumerations\BrokerageStatus $value
     */
    public function setBrokerageStatus(Enumerations\BrokerageStatus $value)
    {
        $this->fields['brokerage_status'] = $value ? $value->getValue() : Enumerations\BrokerageStatus::Unknown;
    }
    /**
     * @return Enumerations\BrokerageStatus
     */
    public function getBrokerageStatus()
    {
        return new Enumerations\BrokerageStatus($this->fields['brokerage_status']);
    }

    /**
     * @param Enumerations\RealEstateMedia $value
     */
    public function setMedia(Enumerations\RealEstateMedia $value)
    {
        $this->fields['media'] = $value ? $value->getValue() : Enumerations\RealEstateMedia::Unknown;
    }
    /**
     * @return Enumerations\RealEstateMedia
     */
    public function getMedia()
    {
        return new Enumerations\RealEstateMedia($this->fields['media']);
    }

    /**
     * @param int $value Property ID in media (Yad2, WinWin, ...)
     */
    public function setPropertyMediaId($value)
    {
        $this->fields['property_media_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getPropertyMediaId()
    {
        return $this->fields['property_media_id'];
    }

    /**
     * @param string $value Page Link in media (Yad2, WinWin, ...)
     */
    public function setPageLink($value)
    {
        $this->fields['page_link'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPageLink()
    {
        return $this->fields['page_link'];
    }

    /**
     * @param string $value
     */
    public function setSku($value)
    {
        $this->fields['sku'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getSku()
    {
        return $this->fields['sku'];
    }

    /**
     * @param string $value
     */
    public function setPropertyTypeId($value)
    {
        $this->fields['property_type_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPropertyTypeId()
    {
        return $this->fields['property_type_id'];
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
     * @param Contact $value
     */
    public function setContact(Contact $value)
    {
        $this->fields['contact'] = $value->toArray();
    }
    /**
     * @return Contact
     */
    public function geContact()
    {
        $contact = new Contact();
        $contact->setData($this->fields);
        return $contact;
    }

    /**
     * @return string
     */
    public function getDisplayTitle()
    {
        return $this->fields['display_title'];
    }

    /**
     * @param string $value
     */
    public function setDescription($value)
    {
        $this->fields['description'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->fields['description'];
    }

    /**
     * @param string $value
     */
    public function setLimitedDescription($value)
    {
        $this->fields['limited_description'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLimitedDescription()
    {
        return $this->fields['limited_description'];
    }

    /**
     * @param string $value
     */
    public function setAddress($value)
    {
        $this->fields['address'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->fields['address'];
    }

    /**
     * @param bool $value
     */
    public function setIsCommercial($value)
    {
        $this->fields['is_commercial'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getIsCommercial()
    {
        return $this->fields['is_commercial'];
    }

    /**
     * @param Enumerations\DealType $value
     */
    public function setDealType(Enumerations\DealType $value)
    {
        $this->fields['deal_type'] = $value ? $value->getValue() : Enumerations\DealType::Unknown;
    }
    /**
     * @return Enumerations\DealType
     */
    public function getDealType()
    {
        return new Enumerations\DealType($this->fields['deal_type']);
    }

    /**
     * @param int $value
     */
    public function setNumberOfPaymentsPerYear($value)
    {
        $this->fields['number_of_payments_per_year'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getNumberOfPaymentsPerYear()
    {
        return $this->fields['number_of_payments_per_year'];
    }

    /**
     * @param bool $value
     */
    public function setCanBeRentedWithRoommate($value)
    {
        $this->fields['can_be_rented_with_roommate'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getCanBeRentedWithRoommate()
    {
        return $this->fields['can_be_rented_with_roommate'];
    }

    /**
     * @param Enumerations\RoommateGender $value
     */
    public function setRoommateGender(Enumerations\RoommateGender $value)
    {
        $this->fields['roommate_gender'] = $value ? $value->getValue() : Enumerations\RoommateGender::Unknown;
    }
    /**
     * @return Enumerations\RoommateGender
     */
    public function getRoommateGender()
    {
        return new Enumerations\RoommateGender($this->fields['roommate_gender']);
    }

    /**
     * @param bool $value
     */
    public function setRoommateCanSmoke($value)
    {
        $this->fields['roommate_can_smoke'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getRoommateCanSmoke()
    {
        return $this->fields['roommate_can_smoke'];
    }

    /**
     * @param string $value
     */
    public function setRegionId($value)
    {
        $this->fields['region_id'] = $value;
    }
    /**
     * @return string
     */
    public function getRegionId()
    {
        return $this->fields['region_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyRegionId($value)
    {
        $this->fields['bmby_region_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyRegionId()
    {
        return $this->fields['bmby_region_id'];
    }

    /**
     * @param string $value
     */
    public function setCityId($value)
    {
        $this->fields['city_id'] = $value;
    }
    /**
     * @return string
     */
    public function getCityId()
    {
        return $this->fields['city_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyCityId($value)
    {
        $this->fields['bmby_city_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyCityId()
    {
        return $this->fields['bmby_city_id'];
    }

    /**
     * @param string $value
     */
    public function setNeighbourhoodId($value)
    {
        $this->fields['neighbourhood_id'] = $value;
    }
    /**
     * @return string
     */
    public function getNeighbourhoodId()
    {
        return $this->fields['neighbourhood_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyNeighbourhoodId($value)
    {
        $this->fields['bmby_neighbourhood_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyNeighbourhoodId()
    {
        return $this->fields['bmby_neighbourhood_id'];
    }

    /**
     * @param string $value
     */
    public function setStreetId($value)
    {
        $this->fields['street_id'] = $value;
    }
    /**
     * @return string
     */
    public function getStreetId()
    {
        return $this->fields['street_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyStreetId($value)
    {
        $this->fields['bmby_street_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyStreetId()
    {
        return $this->fields['bmby_street_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyPropertyTypeId($value)
    {
        $this->fields['bmby_property_type_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyPropertyTypeId()
    {
        return $this->fields['bmby_property_type_id'];
    }

    /**
     * @param string $value
     */
    public function setHouseNumber($value)
    {
        $this->fields['house_number'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->fields['house_number'];
    }

    /**
     * @param Enumerations\PropertyType $value
     */
    public function setPropertyType(Enumerations\PropertyType $value)
    {
        $this->fields['property_type'] = $value ? $value->getValue() : Enumerations\PropertyType::Unknown;
    }
    /**
     * @return Enumerations\PropertyType
     */
    public function getPropertyType()
    {
        return new Enumerations\PropertyType($this->fields['property_type']);
    }

    /**
     * @param int $value
     */
    public function setFloor($value)
    {
        $this->fields['floor'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getFloor()
    {
        return $this->fields['floor'];
    }

    /**
     * @param int $value
     */
    public function setFloors($value)
    {
        $this->fields['floors'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getFloors()
    {
        return $this->fields['floors'];
    }

    /**
     * @param float $value
     */
    public function setRooms($value)
    {
        $this->fields['rooms'] = (float)$value;
    }
    /**
     * @return float
     */
    public function getRooms()
    {
        return $this->fields['rooms'];
    }

    /**
     * @param float $value
     */
    public function setArea($value)
    {
        $this->fields['area'] = (float)$value;
    }
    /**
     * @return float
     */
    public function getArea()
    {
        return $this->fields['area'];
    }

    /**
     * @param float $value
     */
    public function setPlotArea($value)
    {
        $this->fields['plot_area'] = (float)$value;
    }
    /**
     * @return float
     */
    public function getPlotArea()
    {
        return $this->fields['plot_area'];
    }

    /**
     * @param float $value
     */
    public function setPrice($value)
    {
        $this->fields['price'] = (float)$value;
    }
    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->fields['price'];
    }

    /**
     * @param float $value
     */
    public function setUnitPrice($value)
    {
        $this->fields['unit_price'] = (float)$value;
    }
    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->fields['unit_price'];
    }

    /**
     * @param string $value
     */
    public function setContactId($value)
    {
        $this->fields['contact_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->fields['contact_id'];
    }

    /**
     * @param string $value format: yyyy-mm-dd hh:mm:ss
     */
    public function setExclusivityDate($value)
    {
        $this->fields['exclusivity_date'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getExclusivityDate()
    {
        return $this->fields['exclusivity_date'];
    }

    /**
     * @param string $value format: yyyy-mm-dd hh:mm:ss
     */
    public function setPublishDate($value)
    {
        $this->fields['publish_date'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPublishDate()
    {
        return $this->fields['publish_date'];
    }

    /**
     * @param string $value
     */
    public function setComments($value)
    {
        $this->fields['comments'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getComments()
    {
        return $this->fields['comments'];
    }

    /**
     * @param bool $value
     */
    public function setHasAirConditioner($value)
    {
        $this->fields['has_air_conditioner'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasAirConditioner()
    {
        return $this->fields['has_air_conditioner'];
    }

    /**
     * @param bool $value
     */
    public function setHasWindowBars($value)
    {
        $this->fields['has_window_bars'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasWindowBars()
    {
        return $this->fields['has_window_bars'];
    }

    /**
     * @param bool $value
     */
    public function setHasParking($value)
    {
        $this->fields['has_parking'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasParking()
    {
        return $this->fields['has_parking'];
    }

    /**
     * @param bool $value
     */
    public function setHasFurniture($value)
    {
        $this->fields['has_furniture'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasFurniture()
    {
        return $this->fields['has_furniture'];
    }

    /**
     * @param string $value
     */
    public function setFurnitureDescription($value)
    {
        $this->fields['furniture_description'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getFurnitureDescription()
    {
        return $this->fields['furniture_description'];
    }

    /**
     * @param bool $value
     */
    public function setHasStorage($value)
    {
        $this->fields['has_storage'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasStorage()
    {
        return $this->fields['has_storage'];
    }

    /**
     * @param bool $value
     */
    public function setHasCellar($value)
    {
        $this->fields['has_cellar'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasCellar()
    {
        return $this->fields['has_cellar'];
    }

    /**
     * @param bool $value
     */
    public function setHasReligionFacility($value)
    {
        $this->fields['has_religion_facility'] = (bool)$value;
    }
    /**
     * @return bool
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
        $this->fields['can_be_extended'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getCanBeExtended()
    {
        return $this->fields['can_be_extended'];
    }

    /**
     * @param bool $value
     */
    public function setHasSwimmingPool($value)
    {
        $this->fields['has_swimming_pool'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasSwimmingPool()
    {
        return $this->fields['has_swimming_pool'];
    }

    /**
     * @param bool $value
     */
    public function setHasJacuzzi($value)
    {
        $this->fields['has_jacuzzi'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasJacuzzi()
    {
        return $this->fields['has_jacuzzi'];
    }

    /**
     * @param bool $value
     */
    public function setHasPandoor($value)
    {
        $this->fields['has_pandoor'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasPandoor()
    {
        return $this->fields['has_pandoor'];
    }

    /**
     * @param bool $value
     */
    public function setHasGym($value)
    {
        $this->fields['has_gym'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasGym()
    {
        return $this->fields['has_gym'];
    }

    /**
     * @param bool $value
     */
    public function setHasYard($value)
    {
        $this->fields['has_yard'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasYard()
    {
        return $this->fields['has_yard'];
    }

    /**
     * @param bool $value
     */
    public function setHasParentBedroom($value)
    {
        $this->fields['has_parent_bedroom'] = (bool)$value;
    }
    /**
     * @return bool
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
        $this->fields['has_event_room'] = (bool)$value;
    }
    /**
     * @return bool
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
        $this->fields['has_elevator'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasElevator()
    {
        return $this->fields['has_elevator'];
    }

    /**
     * @param bool $value
     */
    public function setHasShabatElevator($value)
    {
        $this->fields['has_shabat_elevator'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasShabatElevator()
    {
        return $this->fields['has_shabat_elevator'];
    }

    /**
     * @param bool $value
     */
    public function setHasSecureRoom($value)
    {
        $this->fields['has_secure_room'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasSecureRoom()
    {
        return $this->fields['has_secure_room'];
    }

    /**
     * @param bool $value
     */
    public function setHasGuard($value)
    {
        $this->fields['has_guard'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasGuard()
    {
        return $this->fields['has_guard'];
    }

    /**
     * @param bool $value
     */
    public function setHasSeparateEntrance($value)
    {
        $this->fields['has_separate_entrance'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasSeparateEntrance()
    {
        return $this->fields['has_separate_entrance'];
    }

    /**
     * @param bool $value
     */
    public function setIsUnit($value)
    {
        $this->fields['is_unit'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getIsUnit()
    {
        return $this->fields['is_unit'];
    }

    /**
     * @param bool $value
     */
    public function setHasBalcony($value)
    {
        $this->fields['has_balcony'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasBalcony()
    {
        return $this->fields['has_balcony'];
    }

    /**
     * @param bool $value
     */
    public function setHasImages($value)
    {
        $this->fields['has_images'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasImages()
    {
        return $this->fields['has_images'];
    }

    /**
     * @param bool $value
     */
    public function setHasTeracce($value)
    {
        $this->fields['has_teracce'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasTeracce()
    {
        return $this->fields['has_teracce'];
    }

    /**
     * @param bool $value
     */
    public function setHasAccessForDisabled($value)
    {
        $this->fields['has_access_for_disabled'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasAccessForDisabled()
    {
        return $this->fields['has_access_for_disabled'];
    }

    /**
     * @param bool $value
     */
    public function setHasGarden($value)
    {
        $this->fields['has_garden'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasGarden()
    {
        return $this->fields['has_garden'];
    }

    /**
     * @param float $value
     */
    public function setGardenArea($value)
    {
        $this->fields['garden_area'] = (float)$value;
    }
    /**
     * @return float
     */
    public function getGardenArea()
    {
        return $this->fields['garden_area'];
    }

    /**
     * @param bool $value
     */
    public function setHasPanorama($value)
    {
        $this->fields['has_panorama'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getHasPanorama()
    {
        return $this->fields['has_panorama'];
    }

    /**
     * @param bool $value
     */
    public function setOnColumns($value)
    {
        $this->fields['on_columns'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getOnColumns()
    {
        return $this->fields['on_columns'];
    }

    /**
     * @param bool $value
     */
    public function setPublishedByAgency($value)
    {
        $this->fields['published_by_agency'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getPublishedByAgency()
    {
        return $this->fields['published_by_agency'];
    }

    /**
     * @param bool $value
     */
    public function setClosed($value)
    {
        $this->fields['closed'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getClosed()
    {
        return $this->fields['closed'];
    }

    /**
     * @param Enumerations\WindDirection $value
     */
    public function addWindDirection(Enumerations\WindDirection $value)
    {
        if (!$value->getValue() || in_array($value->getValue(), $this->fields['wind_directions'])) {
            return;
        }

        $this->fields['wind_directions'][] = $value->getValue();
    }
    /**
     * @param Enumerations\WindDirection $value
     */
    public function removeWindDirection(Enumerations\WindDirection $value)
    {
        if (($key = array_search($value->getValue(), $this->fields['wind_directions'])) !== false) {
            unset($this->fields['wind_directions'][$key]);
        }
    }
    /**
     * @return array
     */
    public function getWindDirectiones()
    {
        return $this->fields['wind_directions'];
    }

    /**
     * @param string $value format: yyyy-mm-dd hh:mm:ss
     */
    public function setCreationTime($value)
    {
        $this->fields['creation_time'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getCreationTime()
    {
        return $this->fields['creation_time'];
    }

    /**
     * @param string $value format: yyyy-mm-dd hh:mm:ss
     */
    public function setLastUpdateTime($value)
    {
        $this->fields['last_update_time'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLastUpdateTime()
    {
        return $this->fields['last_update_time'];
    }


    /**
     * @param string $value
     */
    public function addExternalImage($value)
    {
        if (!$value || in_array($value, $this->fields['external_images'])) {
            return;
        }

        $this->fields['external_images'][] = $value;
    }
    /**
     * @param string $value
     */
    public function removeExternalImage($value)
    {
        if (($key = array_search((int)$value, $this->fields['external_images'])) !== false) {
            unset($this->fields['external_images'][$key]);
        }
    }
    /**
     * @return array
     */
    public function getExternalImages()
    {
        return $this->fields['external_images'];
    }
}

?>