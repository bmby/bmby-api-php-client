<?php

namespace Bmbyhood\Enumerations;

class BrokerageStatus extends Enumeration
{
    const Active = 1;
    const NotActive = 2;
    const Sold = 3;
    const Rented = 4;
    const InProgress = 5;
    const InEnlistmentProcess = 8;
    const Frozen = 9;
    const FinishedExclusivity = 10;
}