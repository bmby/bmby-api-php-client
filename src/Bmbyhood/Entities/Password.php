<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class Password extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'IdentityServerID' => '',
            'PasswordHash' => '',
            'PasswordDate' => ''
        ];
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }

    public function toArray()
    {
        return [
            'IdentityServerID' => $this->fields['IdentityServerID'],
            'PasswordHash' => $this->fields['PasswordHash'],
            'PasswordDate' => $this->fields['PasswordDate']
        ];
    }

    /**
     * @param string $value
     */
    public function setIdentityServerID($value)
    {
        $this->fields['IdentityServerID'] = (int)$value;
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
    public function setPasswordHash($value)
    {
        $this->fields['PasswordHash'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->fields['PasswordHash'];
    }

    /**
     * @param string $value
     */
    public function setPasswordDate($value)
    {
        $this->fields['PasswordDate'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPasswordDate()
    {
        return $this->fields['PasswordDate'];
    }
}


?>