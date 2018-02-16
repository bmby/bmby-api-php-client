<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;

class PropertyOwnersRest  extends EntityRest
{
    /**
     * List PropertyOwner
     *
     * @param array $params Array containing the necessary params.
     *    $params = [
     *      'Page'     => (int) page number. Default: 1.
     *      'PageSize' => (int) page size. Default: 10.     *
     *    ]
     *
     * @return RestResponse
     *
     */
    public function listPropertyOwner($params = [])
    {
        $response = $this->client->get('propertyowners', $params);

        return $this->response($response);
    }

    /**
     * Get PropertyOwner
     *
     * @param int  $propertyOwnerId
     * @return RestResponse
     *
     */
    public function getPropertyOwner($propertyOwnerId)
    {
        $response = $this->client->get('propertyowners/'.$propertyOwnerId, []);

        return $this->response($response);
    }

    /**
     * Update or insert PropertyOwner
     *
     * @param Entities\PropertyOwner $propertyOwner
     * @return RestResponse
     *
     */
    public function upsertPropertyOwner(Entities\PropertyOwner $propertyOwner)
    {
        $response = $this->client->post('propertyowners', $propertyOwner->ToArray());

        return $this->response($response);
    }

    /**
     * Update PropertyOwner
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updatePropertyOwner($data =[])
    {
        $response = $this->client->patch('propertyowners', $data);

        return $this->response($response);
    }

    /**
     * Delete PropertyOwner
     *
     * @param int $propertyOwnerId
     * @return RestResponse
     *
     */
    public function deletePropertyOwner($propertyOwnerId)
    {
        $response = $this->client->delete('propertyowners/'.$propertyOwnerId);

        return $this->response($response);
    }

}