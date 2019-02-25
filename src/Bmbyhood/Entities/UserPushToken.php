<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations\Platform;

class UserPushToken extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'token' => '',
            'platform' => Platform::Unknown,
            'user_id' => NULL
        ];
    }

    /**
     * @param string $value
     */
    public function setToken($value)
    {
        $this->fields['token'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getToken()
    {
        return $this->fields['token'];
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
     * @param Platform $value
     */
    public function setPlatform(Platform $value)
    {
        $this->fields['platform'] = $value ? $value->getValue() : Platform::Unknown;
    }
    /**
     * @return Platform
     */
    public function getPlatform()
    {
        return new Platform($this->fields['platform']);
    }
}