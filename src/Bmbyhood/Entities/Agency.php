<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class Agency extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'agency_id' => '',
            'bmby_instance_id' => '',
            'bmby_project_id' => 0,
            'agency_name' => '',
            'color' => '',
            'localization_id' => 0,
            'logo_id' => ''
        ];
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
     * @param string $value
     */
    public function setAgencyName($value)
    {
        $this->fields['agency_name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getAgencyName()
    {
        return $this->fields['agency_name'];
    }

    /**
     * @param string $value
     */
    public function setColor($value)
    {
        $this->fields['color'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getColor()
    {
        return $this->fields['color'];
    }

    /**
     * @param int $value
     */
    public function setLocalizationId($value)
    {
        $this->fields['localization_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getLocalizationId()
    {
        return $this->fields['localization_id'];
    }

    /**
     * @param string $value
     */
    public function setLogoId($value)
    {
        $this->fields['logo_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLogoId()
    {
        return $this->fields['logo_id'];
    }
}

?>