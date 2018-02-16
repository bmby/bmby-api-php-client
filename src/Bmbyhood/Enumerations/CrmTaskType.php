<?php

namespace Bmbyhood\Enumerations;

class CrmTaskType extends Enumeration
{
    const Task = 1;
    const Appointment = 2;
    const Comment = 3;
    const Sms = 4;
    const Phone = 5;
    const Email = 6;
    const DirectMailing = 7;
    const ServiceRequest = 8;
    const MultiTask = 9;
    const Lead = 10;
    const ErrorRequest = 11;
    const LeadCopy = 12;
    const AppointmentCopy = 13;
    const TaskCopy = 14;
    const SmsCopy = 15;
    const PhoneCopy = 16;
    const EmailCopy = 17;
    const CommentCopy = 18;

    /**
     * Converts integer value to CrmTaskPriority
     *
     * @param int $value
     * @return void
     */
    public function setValue($value)
    {
        $intValue = (int)$value;

        switch ($intValue)
        {
            case self::Task:
            case self::Appointment:
            case self::Comment:
            case self::Sms:
            case self::Phone:
            case self::Email:
            case self::DirectMailing:
            case self::ServiceRequest:
            case self::MultiTask:
            case self::Lead:
            case self::ErrorRequest:
            case self::LeadCopy:
            case self::AppointmentCopy:
            case self::TaskCopy:
            case self::SmsCopy:
            case self::PhoneCopy:
            case self::EmailCopy:
            case self::CommentCopy:
                $this->value = $intValue;
                break;
            default:
                $this->value = self::Unknown;
                break;
        }
    }
}