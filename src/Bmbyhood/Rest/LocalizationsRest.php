<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;

class LocalizationsRest  extends EntityRest
{
    /*DataDictionary*/
    /**
     * List DataDictionary
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
    public function listDataDictionary($params = [])
    {
        $response = $this->client->get('dictionary/data', $params);

        return $this->response($response);
    }

    /**
     * Get DataDictionary
     *
     * @param int  $key
     * @return RestResponse
     *
     */
    public function getDataDictionary($key)
    {
        $response = $this->client->get('dictionary/data/'.$key, []);

        return $this->response($response);
    }

    /**
     * Update or insert DataDictionary
     *
     * @param Entities\DataDictionary $dataDictionary
     * @return RestResponse
     *
     */
    public function upsertDataDictionaryr(Entities\DataDictionary $dataDictionary)
    {
        $response = $this->client->post('dictionary/data', $dataDictionary->ToArray());

        return $this->response($response);
    }

    /**
     * Update DataDictionary
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateDataDictionary($data =[])
    {
        $response = $this->client->patch('dictionary/data', $data);

        return $this->response($response);
    }

    /**
     * Delete DataDictionary
     *
     * @param int $key
     * @return RestResponse
     *
     */
    public function deleteDataDictionary($key)
    {
        $response = $this->client->delete('dictionary/data/'.$key);

        return $this->response($response);
    }

    /*DataDictionaryTranslation*/
    /**
     * List DataDictionaryTranslation
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
    public function listDataDictionaryTranslation($params = [])
    {
        $response = $this->client->get('dictionary/data/translations', $params);

        return $this->response($response);
    }

    /**
     * Get DataDictionaryTranslation
     *
     * @param int  $key
     * @return RestResponse
     *
     */
    public function getDataDictionaryTranslation($key)
    {
        $response = $this->client->get('dictionary/data/translations/'.$key, []);

        return $this->response($response);
    }

    /**
     * Update or insert DataDictionaryTranslation
     *
     * @param Entities\DataDictionaryTranslation $dataDictionaryTranslation
     * @return RestResponse
     *
     */
    public function upsertDataDictionaryTranslation(Entities\DataDictionaryTranslation $dataDictionaryTranslation)
    {
        $response = $this->client->post('dictionary/data/translations', $dataDictionaryTranslation->ToArray());

        return $this->response($response);
    }

    /**
     * Update DataDictionaryTranslation
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateDataDictionaryTranslation($data =[])
    {
        $response = $this->client->patch('dictionary/data/translations', $data);

        return $this->response($response);
    }

    /**
     * Delete DataDictionaryTranslation
     *
     * @param int $key
     * @return RestResponse
     *
     */
    public function deleteDataDictionaryTranslation($key)
    {
        $response = $this->client->delete('dictionary/data/translations/'.$key);

        return $this->response($response);
    }

    /*MetaDictionary*/
    /**
     * List MetaDictionary
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
    public function listMetaDictionary($params = [])
    {
        $response = $this->client->get('dictionary/meta', $params);

        return $this->response($response);
    }

    /**
     * Get MetaDictionary
     *
     * @param int  $key
     * @return RestResponse
     *
     */
    public function getMetaDictionary($key)
    {
        $response = $this->client->get('dictionary/meta/'.$key, []);

        return $this->response($response);
    }

    /**
     * Update or insert MetaDictionary
     *
     * @param Entities\MetaDictionary $metaDictionary
     * @return RestResponse
     *
     */
    public function upsertMetaDictionary(Entities\MetaDictionary $metaDictionary)
    {
        $response = $this->client->post('dictionary/meta', $metaDictionary->ToArray());

        return $this->response($response);
    }

    /**
     * Update MetaDictionary
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateMetaDictionary($data =[])
    {
        $response = $this->client->patch('dictionary/meta', $data);

        return $this->response($response);
    }

    /**
     * Delete MetaDictionary
     *
     * @param int $key
     * @return RestResponse
     *
     */
    public function deleteMetaDictionary($key)
    {
        $response = $this->client->delete('dictionary/meta/'.$key);

        return $this->response($response);
    }

    /*MetaDictionaryTranslation*/
    /**
     * List MetaDictionaryTranslation
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
    public function listMetaDictionaryTranslation($params = [])
    {
        $response = $this->client->get('dictionary/meta/translations', $params);

        return $this->response($response);
    }

    /**
     * Get MetaDictionaryTranslation
     *
     * @param int  $key
     * @return RestResponse
     *
     */
    public function getMetaDictionaryTranslation($key)
    {
        $response = $this->client->get('dictionary/meta/translations/'.$key, []);

        return $this->response($response);
    }

    /**
     * Update or insert MetaDictionaryTranslation
     *
     * @param Entities\MetaDictionaryTranslation $metaDictionaryTranslation
     * @return RestResponse
     *
     */
    public function upsertMetaDictionaryTranslation(Entities\MetaDictionaryTranslation $metaDictionaryTranslation)
    {
        $response = $this->client->post('dictionary/meta/translations', $metaDictionaryTranslation->ToArray());

        return $this->response($response);
    }

    /**
     * Update MetaDictionaryTranslation
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateMetaDictionaryTranslation($data =[])
    {
        $response = $this->client->patch('dictionary/meta/translations', $data);

        return $this->response($response);
    }

    /**
     * Delete MetaDictionaryTranslation
     *
     * @param int $key
     * @return RestResponse
     *
     */
    public function deleteMetaDictionaryTranslation($key)
    {
        $response = $this->client->delete('dictionary/meta/translations/'.$key);

        return $this->response($response);
    }

    /*Country*/
    /**
     * List Country
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
    public function listCountry($params = [])
    {
        $response = $this->client->get('countries', $params);

        return $this->response($response);
    }

    /**
     * Get Country
     *
     * @param string  $countryCode
     * @return RestResponse
     *
     */
    public function getCountry($countryCode)
    {
        $response = $this->client->get('countries/'.$countryCode, []);

        return $this->response($response);
    }

    /**
     * Update or insert Country
     *
     * @param Entities\Country $country
     * @return RestResponse
     *
     */
    public function upsertCountry(Entities\Country $country)
    {
        $response = $this->client->post('countries', $country->ToArray());

        return $this->response($response);
    }

    /**
     * Update Country
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateCountry($data =[])
    {
        $response = $this->client->patch('countries', $data);

        return $this->response($response);
    }

    /**
     * Delete Country
     *
     * @param string $countryCode
     * @return RestResponse
     *
     */
    public function deleteCountry($countryCode)
    {
        $response = $this->client->delete('countries/'.$countryCode);

        return $this->response($response);
    }

    /*Region*/
    /**
     * List Region
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
    public function listRegion($params = [])
    {
        $response = $this->client->get('regions', $params);

        return $this->response($response);
    }

    /**
     * Get Region
     *
     * @param int  $regionId
     * @return RestResponse
     *
     */
    public function getRegion($regionId)
    {
        $response = $this->client->get('regions/'.$regionId, []);

        return $this->response($response);
    }

    /**
     * Update or insert Region
     *
     * @param Entities\Region $region
     * @return RestResponse
     *
     */
    public function upsertRegion(Entities\Region $region)
    {
        $response = $this->client->post('regions', $region->ToArray());

        return $this->response($response);
    }

    /**
     * Update Region
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateRegion($data =[])
    {
        $response = $this->client->patch('regions', $data);

        return $this->response($response);
    }

    /**
     * Delete Region
     *
     * @param int $regionId
     * @return RestResponse
     *
     */
    public function deleteRegion($regionId)
    {
        $response = $this->client->delete('regions/'.$regionId);

        return $this->response($response);
    }

    /*City*/
    /**
     * List City
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
    public function listCity($params = [])
    {
        $response = $this->client->get('cities', $params);

        return $this->response($response);
    }

    /**
     * Get City
     *
     * @param int  $cityId
     * @return RestResponse
     *
     */
    public function getCity($cityId)
    {
        $response = $this->client->get('cities/'.$cityId, []);

        return $this->response($response);
    }

    /**
     * Update or insert City
     *
     * @param Entities\City $city
     * @return RestResponse
     *
     */
    public function upsertCity(Entities\City $city)
    {
        $response = $this->client->post('cities', $city->ToArray());

        return $this->response($response);
    }

    /**
     * Update City
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateCity($data =[])
    {
        $response = $this->client->patch('cities', $data);

        return $this->response($response);
    }

    /**
     * Delete City
     *
     * @param int $cityId
     * @return RestResponse
     *
     */
    public function deleteCity($cityId)
    {
        $response = $this->client->delete('cities/'.$cityId);

        return $this->response($response);
    }

    /*Street*/
    /**
     * List Street
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
    public function listStreet($params = [])
    {
        $response = $this->client->get('streets', $params);

        return $this->response($response);
    }

    /**
     * Get Street
     *
     * @param int  $streetsId
     * @return RestResponse
     *
     */
    public function getStreet($streetsId)
    {
        $response = $this->client->get('streets/'.$streetsId, []);

        return $this->response($response);
    }

    /**
     * Update or insert Street
     *
     * @param Entities\Street $street
     * @return RestResponse
     *
     */
    public function upsertStreet(Entities\Street $street)
    {
        $response = $this->client->post('streets', $street->ToArray());

        return $this->response($response);
    }

    /**
     * Update Street
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateStreet($data =[])
    {
        $response = $this->client->patch('streets', $data);

        return $this->response($response);
    }

    /**
     * Delete Street
     *
     * @param int $streetsId
     * @return RestResponse
     *
     */
    public function deleteStreet($streetsId)
    {
        $response = $this->client->delete('streets/'.$streetsId);

        return $this->response($response);
    }

    /*Neighbourhood*/
    /**
     * List Neighbourhood
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
    public function listNeighbourhood($params = [])
    {
        $response = $this->client->get('neighbourhoods', $params);

        return $this->response($response);
    }

    /**
     * Get Neighbourhood
     *
     * @param int  $neighbourhoodsId
     * @return RestResponse
     *
     */
    public function getNeighbourhood($neighbourhoodsId)
    {
        $response = $this->client->get('neighbourhoods/'.$neighbourhoodsId, []);

        return $this->response($response);
    }

    /**
     * Update or insert Neighbourhood
     *
     * @param Entities\Neighbourhood $neighbourhoodsId
     * @return RestResponse
     *
     */
    public function upsertNeighbourhood(Entities\Neighbourhood $neighbourhoodsId)
    {
        $response = $this->client->post('neighbourhoods', $neighbourhoodsId->ToArray());

        return $this->response($response);
    }

    /**
     * Update Neighbourhood
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateNeighbourhood($data =[])
    {
        $response = $this->client->patch('neighbourhoods', $data);

        return $this->response($response);
    }

    /**
     * Delete Neighbourhood
     *
     * @param int $neighbourhoodsId
     * @return RestResponse
     *
     */
    public function deleteNeighbourhood($neighbourhoodsId)
    {
        $response = $this->client->delete('neighbourhoods/'.$neighbourhoodsId);

        return $this->response($response);
    }
}