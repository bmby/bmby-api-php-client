<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;


class CrmTask extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'crm_task_id' => 0,
            'crm_task_bmby_id' => 0,
            'task_type' => Enumerations\CrmTaskType::Unknown,
            'task_sub_type' => Enumerations\CrmTaskSubType::Unknown,
            'agency_id' => 0,
            'is_private' => false,
            'subject' => '',
            'message' => '',
            'location' => '',
            'status' => Enumerations\CrmTaskStatus::Unknown,
            'priority' => Enumerations\CrmTaskPriority::Unknown,
            'appointment_start_date' => 0,
            'appointment_end_date' => 0,
            'last_update_time' => 0,
            'last_update_user_id' => 0
        ];
    }

    /**
     * @param int $value
     */
    public function setCrmTaskId($value)
    {
        $this->fields['crm_task_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getCrmTaskId()
    {
        return $this->fields['crm_task_id'];
    }

    /**
     * @param int $value
     */
    public function setCrmTaskBmbyId($value)
    {
        $this->fields['crm_task_bmby_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getCrmTaskBmbyId()
    {
        return $this->fields['crm_task_bmby_id'];
    }

    /**
     * @param Enumerations\CrmTaskType $value
     */
    public function setTaskType(Enumerations\CrmTaskType $value)
    {
        $this->fields['task_type'] = $value ? $value->getValue() : Enumerations\CrmTaskType::Unknown;
    }
    /**
     * @return Enumerations\CrmTaskType
     */
    public function getTaskType()
    {
        return new Enumerations\CrmTaskType($this->fields['task_type']);
    }

    /**
     * @param Enumerations\CrmTaskSubType $value
     */
    public function setTaskSubType(Enumerations\CrmTaskSubType $value)
    {
        $this->fields['task_sub_type'] = $value ? $value->getValue() : Enumerations\CrmTaskSubType::Unknown;
    }
    /**
     * @return Enumerations\CrmTaskSubType
     */
    public function getTaskSubType()
    {
        return new Enumerations\CrmTaskSubType($this->fields['task_sub_type']);
    }

    /**
     * @param int $value
     */
    public function setAgencyId($value)
    {
        $this->fields['agency_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getAgencyId()
    {
        return $this->fields['agency_id'];
    }

    /**
     * @param bool $value
     */
    public function setIsPrivate($value)
    {
        $this->fields['is_private'] = (bool)$value;
    }
    /**
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->fields['is_private'];
    }

    /**
     * @param string $value
     */
    public function setSubject($value)
    {
        $this->fields['subject'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->fields['subject'];
    }

    /**
     * @param string $value
     */
    public function setMessage($value)
    {
        $this->fields['message'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->fields['message'];
    }

    /**
     * @param string $value
     */
    public function setLocation($value)
    {
        $this->fields['location'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->fields['location'];
    }

    /**
     * @param Enumerations\CrmTaskStatus $value
     */
    public function setStatus(Enumerations\CrmTaskStatus $value)
    {
        $this->fields['status'] = $value ? $value->getValue() : Enumerations\CrmTaskStatus::Unknown;
    }
    /**
     * @return Enumerations\CrmTaskStatus
     */
    public function getStatus()
    {
        return new Enumerations\CrmTaskStatus($this->fields['status']);
    }



}