<?php

namespace Bmbyhood\Enumerations;

class AutomatedAgentStopStatus extends Enumeration
{
    const NotVisited = 1;
    const Visited = 2;
    const Reserved = 3;
    const PriceOffer = 4;
    const Negotiation = 5;
    const Meeting = 6;
    const Contract = 7;
}