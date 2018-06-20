<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;

class BmbySyncRest extends EntityRest
{
    /**
     * Update or insert repository property
     *
     * @param Entities\Property $property
     * @return RestResponse
     *
     */
    public function postRepositoryProperty(Entities\Property $property)
    {
        $response = $this->client->post('syncrepositoryproperty', $property->ToArray());

        return $this->response($response);
    }

    /**
     * Update or insert agency property
     *
     * @param Entities\Property $property
     * @return RestResponse
     *
     */
    public function postAgencyProperty(Entities\Property $property)
    {
        $response = $this->client->post('syncagencyproperty', $property->ToArray());

        return $this->response($response);
    }
}

?>