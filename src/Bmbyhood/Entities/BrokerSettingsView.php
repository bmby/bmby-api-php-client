<?php
namespace Bmbyhood\Entities;

class BrokerSettingsView extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'project_id' => 0,
            'user_id' => 0,
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'mobile' => '',
            'website' => '',
            'broker_license' => '',
            'color' => '',
            'banner_url' => '',
            'number_of_automated_offers' => '',
            'logo_image_url' => NULL,
            'banner_image_url' => NULL,
            'avatar_image_url' => NULL,
            'cover_image_url' => NULL
        ];
    }


    /**
     * @return int
     */
    public function getNumberOfAutomatedOffers()
    {
        return $this->fields['number_of_automated_offers'];
    }

    /**
     * @return string
     */
    public function getLocalizationId()
    {
        return $this->fields['localization_id'];
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->fields['color'];
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->fields['first_name'];
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->fields['last_name'];
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->fields['email'];
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->fields['mobile'];
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->fields['website'];
    }

    /**
     * @return string
     */
    public function getBrokerLicense()
    {
        return $this->fields['broker_license'];
    }

    /**
     * @return string
     */
    public function getBannerUrl()
    {
        return $this->fields['banner_url'];
    }

    /**
     * @return string
     */
    public function getLogoImageUrl()
    {
        return $this->fields['logo_image_url'];
    }

    /**
     * @return string
     */
    public function getBannerImageUrl()
    {
        return $this->fields['banner_image_url'];
    }

    /**
     * @return string
     */
    public function getAvatarImageUrl()
    {
        return $this->fields['avatar_image_url'];
    }

    /**
     * @return string
     */
    public function getCoverImageUrl()
    {
        return $this->fields['cover_image_url'];
    }
}


?>