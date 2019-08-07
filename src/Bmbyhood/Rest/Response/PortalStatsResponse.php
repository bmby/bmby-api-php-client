<?php
namespace Bmbyhood\Rest\Response;

use Bmbyhood;
use Bmbyhood\Rest\PaginatedListResponse;
use Bmbyhood\Entities\PortalStats;

class PortalStatsResponse extends PaginatedListResponse
{

    /**
     * @return PortalStats[]
     */
    public function items()
    {
        $rawItems = parent::items();
        $items = [];

        foreach ($rawItems as $rawItem)
        {
            $item = new PortalStats();
            $item->setData($rawItem);

            $items[] = $item;
        }

        return $items;
    }
}

?>