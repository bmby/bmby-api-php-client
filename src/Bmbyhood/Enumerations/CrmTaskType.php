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
}