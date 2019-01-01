<?php
namespace Bmbyhood\Rest\Response;

use Bmbyhood;
use Bmbyhood\Rest\PaginatedListResponse;
use Bmbyhood\Entities\TimeLineEvent;

class TimeLineResponse extends PaginatedListResponse
{

    /**
     * @return TimeLineEvent[]
     */
    public function items()
    {
        $rawEevents = parent::items();
        $events = [];

        foreach ($rawEevents as $rawEvent)
        {
            $event = new TimeLineEvent();
            $event->setData($rawEvent);

            $events[] = $event;
        }

        return $events;
    }
}

?>