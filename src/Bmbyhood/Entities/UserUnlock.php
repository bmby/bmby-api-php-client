<?php

namespace Bmbyhood\Entities;

class UserUnlock extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'IdentityServerID' => '',
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
            'user_id' => $this->fields['IdentityServerID'],
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
}
