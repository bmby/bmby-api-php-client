<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;


class PropertiesRest extends EntityRest
{
    /**
     * Update or insert property
     *
     * @param Entities\PropertyType $propertyType
     * @return RestResponse
     *
     */
    public function upsertPropertyType(Entities\PropertyType $propertyType)
    {
        $response = $this->client->post('propertytypes', $propertyType->ToArray());

        return $this->response($response);
    }

    /**
     * Update or insert property
     *
     * @param Entities\Property $property
     * @return RestResponse
     *
     */
    public function upsertProperty(Entities\Property $property)
    {
        $response = $this->client->post('properties', $property->ToArray());

        return $this->response($response);
    }

    /**
     * Delete property
     *
     * @param string $propertyId
     * @return RestResponse
     *
     */
    public function deleteProperty($propertyId)
    {
        $response = $this->client->delete('properties/'.$propertyId);

        return $this->response($response);
    }
}

?>