<?php
namespace Bmbyhood\Entities;


class TimeLineEvent extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'event_id' => '',
            'type' => '',
            'time' => '',
            'title' => '',
            'description' => '',
            'done' => '',
            'done_time' => '',
            'dismissed' => '',
            'dismiss_time' => '',
            'customer_id' => '',
            'agency_id' => '',
            'user_id' => '',
        ];
    }

    /**
     * @param string $value
     */
    public function setEventId($value)
    {
        $this->fields['event_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getEventId()
    {
        return $this->fields['event_id'];
    }

    /**
     * @param string $value
     */
    public function setType($value)
    {
        $this->fields['type'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getType()
    {
        return $this->fields['type'];
    }

    /**
     * @param string $value
     */
    public function setTime($value)
    {
        $this->fields['time'] = (string)$value;
    }
    /**
     * @return string UTC datetime
     */
    public function getTime()
    {
        return $this->fields['time'];
    }

    /**
     * @param string $value
     */
    public function setTitle($value)
    {
        $this->fields['title'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->fields['title'];
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
     * @param boolean $value
     */
    public function setIsDone($value)
    {
        $this->fields['done'] = boolval($value);
    }
    /**
     * @return boolean
     */
    public function getIsDone()
    {
        return boolval($this->fields['done']);
    }

    /**
     * @param string $value
     */
    public function setDoneTime($value)
    {
        $this->fields['done_time'] = (string)$value;
    }
    /**
     * @return string UTC datetime
     */
    public function getDoneTime()
    {
        return $this->fields['done_time'];
    }

    /**
     * @param boolean $value
     */
    public function setIsDismissed($value)
    {
        $this->fields['dismissed'] = boolval($value);
    }
    /**
     * @return boolean
     */
    public function getIsDismissed()
    {
        return boolval($this->fields['dismissed']);
    }

    /**
     * @param string $value
     */
    public function setDismissTime($value)
    {
        $this->fields['dismiss_time'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getDismissTime()
    {
        return $this->fields['dismiss_time'];
    }

    /**
     * @param string $value
     */
    public function setCustomerId($value)
    {
        $this->fields['customer_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->fields['customer_id'];
    }

    /**
     * @param string $value
     */
    public function setAgencyId($value)
    {
        $this->fields['agency_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getAgencyId()
    {
        return $this->fields['agency_id'];
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
        return (int)$this->fields['user_id'];
    }

}