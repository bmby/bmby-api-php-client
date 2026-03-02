<?php

namespace Bmbyhood\Entities;

class UserLockout extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'IdentityServerID' => '',
            'LockoutEnd' => ''
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
            'LockoutEnd' => $this->fields['LockoutEnd']
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
    public function setLockoutEnd($value)
    {
        $this->fields['LockoutEnd'] = (string) $value;
    }
    /**
     * @return string
     */
    public function getPasswordDate()
    {
        return $this->fields['LockoutEnd'];
    }
}
