<?php
namespace Bmbyhood\Rest\Response;

use Bmbyhood;
use Bmbyhood\Rest\RestResponse;
use Bmbyhood\Entities\PortalStatsByBroker;

class PortalStatsByBrokerResponse extends RestResponse
{

    /**
     * @return PortalStatsByBroker[]
     */
    public function items()
    {
        if ($this->response == null || !is_array($this->response))
        {
            return [];
        }

        $items = [];

        foreach ($this->response as $rawItem)
        {
            $item = new PortalStatsByBroker();
            $item->setData($rawItem);

            $items[] = $item;
        }

        return $items;
    }
}

?>