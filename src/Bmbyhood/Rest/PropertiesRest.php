<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;


class PropertiesRest extends EntityRest
{
    /**
     * Update or insert property
     *
     * @param Entities\Property $property
     * @return RestResponse
     *
     */
    public function UpsertProperty(Entities\Property $property)
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
    public function DeleteProperty($propertyId)
    {
        $response = $this->client->delete('properties/'.$propertyId);

        return $this->response($response);
    }

    /**
     * Sync parser record properties (only for BMBY internal use)
     */
    public function SyncParserRecordProperties()
    {
        $this->client->post('syncproperties', []);
    }

    /**
     * Sync agency properties (only for BMBY internal use)
     *
     * @param string $agencyId
     */
    public function SyncAgencyProperties($agencyId)
    {
        $this->client->post('syncproperties', [ 'agency_id' => $agencyId ]);
    }
}

?>