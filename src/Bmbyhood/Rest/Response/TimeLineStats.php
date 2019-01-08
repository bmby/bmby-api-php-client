<?php

namespace Bmbyhood\Rest\Response;

use Bmbyhood\Rest\RestResponse;

class TimeLineStats extends RestResponse
{
    public function portals()
    {
        return isset($this->response['portals']) ? $this->response['portals'] : 0;
    }

    public function matches()
    {
        return isset($this->response['matches']) ? $this->response['matches'] : 0;
    }

    public function likes()
    {
        return isset($this->response['likes']) ? $this->response['likes'] : 0;
    }

    public function dislikes()
    {
        return isset($this->response['dislikes']) ? $this->response['dislikes'] : 0;
    }

    public function markedAsDone()
    {
        return isset($this->response['markedAsDone']) ? $this->response['markedAsDone'] : 0;
    }
}