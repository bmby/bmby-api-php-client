<?php

namespace Bmbyhood\Enumerations;

class PropertyMatchStatus extends Enumeration
{
    const NotVisited = 1;
    const Visited = 2;
    const Negotiation = 3;
    const Reserved = 5;
    const PriceOffer = 6;
    const NegotiationFailed = 7;
    const Appointment = 8;
    const PotentialMatch = 9;
}
