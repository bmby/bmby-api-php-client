<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class CrmTask extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'crm_task_id' => '',
            'crm_task_bmby_id' => 0,
            'client_bmby_id' => 0,
            'owner_bmby_id' => 0,
            'bmby_project_id' => NULL,
            'task_type' => Enumerations\CrmTaskType::Unknown,
            'task_sub_type' => Enumerations\CrmTaskSubType::Unknown,
            'agency_id' => '',
            'user_id' => 0,
            'is_private' => false,
            'subject' => '',
            'message' => '',
            'location' => '',
            'status' => Enumerations\CrmTaskStatus::Unknown,
            'priority' => Enumerations\CrmTaskPriority::Unknown,
            'task_date' => NULL,
            'meeting_start_date' => NULL,
            'meeting_end_date' => NULL
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
     * @param int $value
     */
    public function setClientBmbyId($value)
    {
        $this->fields['client_bmby_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getClientBmbyId()
    {
        return $this->fields['client_bmby_id'];
    }

    /**
     * @param int $value
     */
    public function setOwnerBmbyId($value)
    {
        $this->fields['owner_bmby_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getOwnerBmbyId()
    {
        return $this->fields['owner_bmby_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyProjectId($value)
    {
        $this->fields['bmby_project_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyProjectId()
    {
        return $this->fields['bmby_project_id'];
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
     * @param Enumerations\CrmTaskPriority $value
     */
    public function setPriority(Enumerations\CrmTaskPriority $value)
    {
        $this->fields['priority'] = $value ? $value->getValue() : Enumerations\CrmTaskPriority::Unknown;
    }
    /**
     * @return Enumerations\CrmTaskPriority
     */
    public function getPriority()
    {
        return new Enumerations\CrmTaskPriority($this->fields['priority']);
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
     * @param string $value
     */
    public function setAgencyId($value)
    {
        $this->fields['agency_id'] = (string)$value;
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

    /**
     * @param string $value
     */
    public function setTaskDate($value)
    {
        $this->fields['task_date'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getTaskDate()
    {
        return $this->fields['task_date'];
    }

    /**
     * @param string $value
     */
    public function setMeetingStartDate($value)
    {
        $this->fields['meeting_start_date'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getMeetingStartDate()
    {
        return $this->fields['meeting_start_date'];
    }

    /**
     * @param string $value
     */
    public function setMeetingEndDate($value)
    {
        $this->fields['meeting_end_date'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getMeetingEndDate()
    {
        return $this->fields['meeting_end_date'];
    }
}