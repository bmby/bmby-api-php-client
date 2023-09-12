<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class User extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'user_name' => '',
            'email' => '',
            'password' => '',
            'is_active' => false,
            'bmby_user_id' => 0,
            'phone' => '',
            'mobile' => '',
            'first_name' => '',
            'last_name' => '',
            'avatar_url' => '',
            'notification_interval' => Enumerations\NotificationInterval::Online,
            'user_type' => Enumerations\UserType::Unknown,
            'agencies' => array(),
            'is_2fa_enabled' => false,
            'client_id' => '',
            'ips' => ''
        ];
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

    public function toArray()
    {
        $data = $this->fields;
        $data['agencies'] = [];

        foreach ($this->fields['agencies'] as $agency) {
            $data['agencies'][] = $agency->toArray();
        }

        return $data;
    }

    /**
     * @param string $value
     */
    public function setUserName($value)
    {
        $this->fields['user_name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->fields['user_name'];
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
    public function setPassword($value)
    {
        $this->fields['password'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->fields['password'];
    }

    /**
     * @param bool $value
     */
    public function setIsActive($value)
    {
        $this->fields['is_active'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getIsActive()
    {
        return $this->fields['is_active'];
    }

    /**
     * @param int $value
     */
    public function setBmbyUserId($value)
    {
        $this->fields['bmby_user_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyUserId()
    {
        return $this->fields['bmby_user_id'];
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
    public function setPhone($value)
    {
        $this->fields['phone'] = (string)$value;
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
    public function setAvatarUrl($value)
    {
        $this->fields['avatar_url'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->fields['avatar_url'];
    }

    /**
     * @param Enumerations\NotificationInterval $value
     */
    public function setNotificationInterval(Enumerations\NotificationInterval $value)
    {
        $this->fields['notification_interval'] = $value ? $value->getValue() : Enumerations\NotificationInterval::Unknown;
    }
    /**
     * @return Enumerations\NotificationInterval
     */
    public function getNotificationInterval()
    {
        return new Enumerations\NotificationInterval($this->fields['notification_interval']);
    }

    /**
     * @param Enumerations\UserType $value
     */
    public function setUserType(Enumerations\UserType $value)
    {
        $this->fields['user_type'] = $value ? $value->getValue() : Enumerations\UserType::Unknown;
    }
    /**
     * @return Enumerations\UserType
     */
    public function getUserType()
    {
        return new Enumerations\UserType($this->fields['user_type']);
    }

    /**
     * @return bool
     */
    public function getIs2FaEnabled()
    {
        return $this->fields['is_2fa_enabled'];
    }

    /**
     * @param $value
     *
     * @return void
     */
    public function setIs2FaEnabled($value)
    {
        $this->fields['is_2fa_enabled'] = (bool) $value;
    }

    /**
     * @param $clientId
     */
    public function setClientId($clientId)
    {
        $this->fields['client_id'] = (string) $clientId;
    }

    /**
     * @param $ips
     */
    public function setIPs($ips)
    {
        $this->fields['ips'] = (string) $ips;
    }

    /**
     * @param AgencyBroker $value
     */
    public function addAgency(AgencyBroker $value)
    {
        if (!$value) {
            return;
        }

        foreach ($this->fields['agencies'] as $agency)
        {
            if ($agency->getAgencyId() == $value->getAgencyId())
            {
                return;
            }
        }

        $this->fields['agencies'][] = $value;
    }
    /**
     * @param AgencyBroker $value
     */
    public function removeAgency(AgencyBroker $value)
    {
        foreach ($this->fields['agencies'] as $key => $agency)
        {
            if ($agency->getAgencyId() == $value->getAgencyId())
            {
                unset($this->fields['agencies'][$key]);
                return;
            }
        }
    }
    /**
     * @return array
     */
    public function getAgencies()
    {
        return $this->fields['agencies'];
    }
}


?>
