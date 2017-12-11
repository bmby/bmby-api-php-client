<?php
namespace Bmbyhood\Entities;

class User extends BmbyhoodEntity
{
    protected $fields = [
        'email' => '',
        'password' => '',
        'bmby_user_id' => 0,
        'mobile' => '',
        'first_name' => '',
        'last_name' => '',
        'avatar_url' => '',
        'notification_interval' => '',
        'user_type' => UserType::Unknown,
        'agencies' => array()
    ];

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
     * @param NotificationInterval $value
     */
    public function setNotificationInterval(NotificationInterval $value)
    {
        $this->fields['notification_interval'] = $value ? $value : new NotificationInterval(NotificationInterval::Unknown);
    }
    /**
     * @return NotificationInterval
     */
    public function getNotificationInterval()
    {
        return new NotificationInterval($this->fields['notification_interval']);
    }

    /**
     * @param UserType $value
     */
    public function setUserType(UserType $value)
    {
        $this->fields['user_type'] = $value ? $value : new UserType(UserType::Unknown);
    }
    /**
     * @return UserType
     */
    public function getUserType()
    {
        return new UserType($this->fields['user_type']);
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