<?php
namespace Bmbyhood\Entities;

class ListItem extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'key' => '',
            'display_name' => '',
            'description' => '',
            'tags' => '',
            'avatar' => '',
            'icon' => '',
            'selected' => false
        ];
    }

    /**
     * @param string $value
     */
    public function setKey($value)
    {
        $this->fields['key'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getKey()
    {
        return $this->fields['key'];
    }

    /**
     * @param string $value
     */
    public function setDisplayName($value)
    {
        $this->fields['display_name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->fields['display_name'];
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
     * @param string $value
     */
    public function setTags($value)
    {
        $this->fields['tags'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getTags()
    {
        return $this->fields['tags'];
    }

    /**
     * @param string $value
     */
    public function setAvatar($value)
    {
        $this->fields['avatar'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->fields['avatar'];
    }

    /**
     * @param string $value
     */
    public function setIcon($value)
    {
        $this->fields['icon'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->fields['icon'];
    }

    /**
     * @param bool $value
     */
    public function setSelected($value)
    {
        $this->fields['selected'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getSelected()
    {
        return $this->fields['selected'];
    }
}