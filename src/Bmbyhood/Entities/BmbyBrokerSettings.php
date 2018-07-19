<?php
namespace Bmbyhood\Entities;

class BmbyBrokerSettings extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'project_id' => 0,
            'user_id' => 0,
            'first_name' => '',
            'last_name' => '',
            'description' => '',
            'facebook_page' => '',
            'linkedln_page' => '',
            'googleplus_page' => '',
            'youtube_channel' => '',
            'instagram_page' => '',
            'address' => '',
            'email' => '',
            'mobile' => '',
            'phone' => '',
            'delete_logo_image' => false,
            'delete_banner_image' => false,
            'delete_avatar_image' => false,
            'delete_cover_image' => false,
            'website' => '',
            'broker_license' => '',
            'color' => '',
            'banner_url' => '',
            'number_of_automated_offers' => 0,
            'logo_image_url' => NULL,
            'banner_image_url' => NULL,
            'avatar_image_url' => NULL,
            'cover_image_url' => NULL
        ];

        $this->files = [
            'logo' => NULL,
            'banner' => NULL,
            'avatar' => NULL,
            'cover' => NULL
        ];
    }

    /**
     * @param bool $value
     */
    public function setDeleteCoverImage($value)
    {
        $this->fields['delete_cover_image'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getDeleteCoverImage()
    {
        return $this->fields['delete_cover_image'];
    }

    /**
     * @param bool $value
     */
    public function setDeleteAvatarImage($value)
    {
        $this->fields['delete_avatar_image'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getDeleteAvatarImage()
    {
        return $this->fields['delete_avatar_image'];
    }

    /**
     * @param bool $value
     */
    public function setDeleteBannerImage($value)
    {
        $this->fields['delete_avatar_image'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getDeleteBannerImage()
    {
        return $this->fields['delete_avatar_image'];
    }

    /**
     * @param bool $value
     */
    public function setDeleteLogoImage($value)
    {
        $this->fields['delete_logo_image'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getDeleteLogoImage()
    {
        return $this->fields['delete_logo_image'];
    }

    /**
     * @param int $value
     */
    public function setProjectId($value)
    {
        $this->fields['project_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->fields['project_id'];
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
     * @param string $value
     */
    public function setInstagramPage($value)
    {
        $this->fields['instagram_page'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getInstagramPage()
    {
        return $this->fields['instagram_page'];
    }

    /**
     * @param string $value
     */
    public function setYoutubeChannel($value)
    {
        $this->fields['youtube_channel'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getYoutubeChannel()
    {
        return $this->fields['youtube_channel'];
    }

    /**
     * @param string $value
     */
    public function setFacebookPage($value)
    {
        $this->fields['facebook_page'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getFacebookPage()
    {
        return $this->fields['facebook_page'];
    }

    /**
     * @param string $value
     */
    public function setLinkedInPage($value)
    {
        $this->fields['linkedln_page'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLinkedInPage()
    {
        return $this->fields['linkedln_page'];
    }

    /**
     * @param string $value
     */
    public function setGooglePlusPage($value)
    {
        $this->fields['googleplus_page'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getGooglePlusPage()
    {
        return $this->fields['googleplus_page'];
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
     * @param int $value
     */
    public function setNumberOfAutomatedOffers($value)
    {
        $this->fields['number_of_automated_offers'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getNumberOfAutomatedOffers()
    {
        return $this->fields['number_of_automated_offers'];
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
     * @param string $value
     */
    public function setFirstName($value)
    {
        $this->fields['first_name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->fields['first_name'];
    }

    /**
     * @param string $value
     */
    public function setLastName($value)
    {
        $this->fields['last_name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->fields['last_name'];
    }

    /**
     * @param string $value
     */
    public function setEmail($value)
    {
        $this->fields['email'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->fields['email'];
    }

    /**
     * @param string $value
     */
    public function setMobile($value)
    {
        $this->fields['mobile'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->fields['mobile'];
    }

    /**
     * @param string $value
     */
    public function setPhone($value)
    {
        $this->fields['phone'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->fields['phone'];
    }

    /**
     * @param string $value
     */
    public function setWebsite($value)
    {
        $this->fields['website'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->fields['website'];
    }

    /**
     * @param string $value
     */
    public function setBrokerLicense($value)
    {
        $this->fields['broker_license'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getBrokerLicense()
    {
        return $this->fields['broker_license'];
    }

    /**
     * @param string $value
     */
    public function setBannerUrl($value)
    {
        $this->fields['banner_url'] = (string)$value;
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

    /**
     * @param string $value, file path in file system
     */
    public function setLogo($value)
    {
        $this->files['logo'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->files['logo'];
    }

    /**
     * @param string $value, file path in file system
     */
    public function setBanner($value)
    {
        $this->files['banner'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getBanner()
    {
        return $this->files['banner'];
    }

    /**
     * @param string $value, file path in file system
     */
    public function setAvatar($value)
    {
        $this->files['avatar'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->files['avatar'];
    }

    /**
     * @param string $value, file path in file system
     */
    public function setCover($value)
    {
        $this->files['cover'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getCover()
    {
        return $this->files['cover'];
    }
}


?>