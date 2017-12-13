<?php

namespace Bmbyhood\Enumerations;

class PropertyType extends Enumeration
{
    const Apartment = 1;
    const GardenApartment = 2;
    const Duplex = 3;
    const Single = 4;
    const Villa = 5;
    const Triplex = 6;
    const Penthouse = 7;
    const PlotOneFloor = 8;
    const CommercialBuilding = 9;
    const Office = 10;
    const Storeroom = 12;
    const TwoFamilyCottage = 13;
    const Parking = 14;
    const Studio = 15;
    const Cottage = 16;
    const Shop = 17;
    const ResidentialBuilding = 18;
    const Farm = 19;
    const Business = 20;
    const RooftopApartment = 22;
    const MiniPenthouse = 23;
    const ResidentialUnit = 24;
    const Caravan = 25;
    const Loft = 26;
    const Parter = 27;
    const Hall = 28;
    const ApartmentToDivide = 29;
    const DistributedApartment = 30;
    const AgricultureLand = 31;
    const Clinic = 32;
    const VacationApartment = 33;
    const GroupOfAcquisition = 34;
    const CommercialCenter = 34;
    const IndustrialBuilding = 38;
    const OfficesBuilding = 39;
    const OfficesPlot = 40;
    const IndustrialPlot = 42;
    const ParkingLot = 44;
    const PlotSaturating = 45;
    const Hotel = 46;
    const CommercialPlot = 47;
    const HotelPlot = 48;
    const GeneralPlot = 49;
    const CommercialProperty = 50;
    const HomeForElderly = 51;
    const ShelteredHousing = 52;
    const ClusterHousing = 53;
    const SpaceHeat = 54;
    const Ranches = 55;

    /**
     * Converts integer value to PropertyType
     *
     * @param int $value
     * @return void
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::Apartment:
            case self::GardenApartment:
            case self::Duplex:
            case self::Single:
            case self::Villa:
            case self::Triplex:
            case self::Penthouse:
            case self::PlotOneFloor:
            case self::CommercialBuilding:
            case self::Office:
            case self::Storeroom:
            case self::TwoFamilyCottage:
            case self::Parking:
            case self::Studio:
            case self::Cottage:
            case self::Shop:
            case self::ResidentialBuilding:
            case self::Farm:
            case self::Business:
            case self::RooftopApartment:
            case self::MiniPenthouse:
            case self::ResidentialUnit:
            case self::Caravan:
            case self::Loft:
            case self::Parter:
            case self::Hall:
            case self::ApartmentToDivide:
            case self::DistributedApartment:
            case self::AgricultureLand:
            case self::Clinic:
            case self::VacationApartment:
            case self::GroupOfAcquisition:
            case self::CommercialCenter:
            case self::IndustrialBuilding:
            case self::OfficesBuilding:
            case self::OfficesPlot:
            case self::IndustrialPlot:
            case self::ParkingLot:
            case self::PlotSaturating:
            case self::Hotel:
            case self::CommercialPlot:
            case self::HotelPlot:
            case self::GeneralPlot:
            case self::CommercialProperty:
            case self::HomeForElderly:
            case self::ShelteredHousing:
            case self::ClusterHousing:
            case self::SpaceHeat:
            case self::Ranches:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}