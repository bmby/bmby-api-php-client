<?php
namespace Bmbyhood\Entities;

class LocalizationView extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'localization_id' => 0,
            'localization_name' => '',
            'cover_image_url' => '',
            'country_code' => '',
            'language_code' => '',
            'utc_offset' => 0,
        ];
    }

    /**
     * @return int
     */
    public function getLocalizationId()
    {
        return $this->fields['localization_id'];
    }

    /**
     * @return string
     */
    public function getLocalizationName()
    {
        return $this->fields['localization_name'];
    }

    /**
     * @return int
     */
    public function getUtcOffset()
    {
        return $this->fields['utc_offset'];
    }

    /**
     * @return string
     */
    public function getCoverImageUrl()
    {
        return $this->fields['cover_image_url'];
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->fields['country_code'];
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->fields['language_code'];
    }
}


?>