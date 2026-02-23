<?php

namespace Bmbyhood\Entities;

class UserProfile extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'IdentityServerID' => '',
            'PasswordDate' => '',
            'ValidEmail' => '',
            'ValidPhone' => ''
        ];
    }

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode($this->toArray());
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'IdentityServerID' => $this->fields['IdentityServerID'],
            'PasswordDate' => $this->fields['PasswordDate'],
            'ValidEmail' => $this->fields['ValidEmail'],
            'ValidPhone' => $this->fields['ValidPhone']
        ];
    }

    /**
     * @param string $value
     */
    public function setIdentityServerID($value)
    {
        $this->fields['IdentityServerID'] = (int) $value;
    }
    /**
     * @return string
     */
    public function getIdentityServerID()
    {
        return $this->fields['IdentityServerID'];
    }

    /**
     * @param string $value
     */
    public function setPasswordDate($value)
    {
        $this->fields['PasswordDate'] = (string) $value;
    }
    /**
     * @return string
     */
    public function getPasswordDate()
    {
        return $this->fields['PasswordDate'];
    }

    /**
     * @param string $value
     */
    public function setValidEmail($value)
    {
        $this->fields['ValidEmail'] = (string) $value;
    }

    /**
     * @return string
     */
    public function getValidEmail()
    {
        return $this->fields['ValidEmail'];
    }

    /**
     * @param string $value
     */
    public function setValidPhone($value)
    {
        $this->fields['ValidPhone'] = (string) $value;
    }
    /**
     * @return string
     */
    public function getValidPhone()
    {
        return $this->fields['ValidPhone'];
    }
}
