<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;

class BmbySyncRest extends EntityRest
{
    /**
     * Update or insert repository property
     *
     * @param Entities\Property[] $properties
     * @return RestResponse
     * @throws \Exception
     */
    public function postRepositoryProperties($properties)
    {
        if (!is_array($properties)) {
            throw new \Exception('The argument should be array of Entities\Property');
        }

        $data = [];

        foreach ($properties as $property) {
            $data[] = $property->toArray();
        }

        $response = $this->client->post('bmbysync/repositoryproperty', $data);

        return $this->response($response);
    }

    /**
     * Update or insert repository property
     *
     * @param Entities\Property $property
     * @return RestResponse
     *
     */
    public function postRepositoryProperty(Entities\Property $property)
    {
        $response = $this->client->post('bmbysync/repositoryproperties', $property->ToArray());

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
        $response = $this->client->post('bmbysync/agencyproperty', $property->ToArray());

        return $this->response($response);
    }

    /**
     * Update or insert customer
     *
     * @param Entities\Customer $customer
     * @return RestResponse
     */
    public function postCustomer(Entities\Customer $customer)
    {
        $response = $this->client->post('bmbysync/customer', $customer->ToArray());

        return $this->response($response);
    }

    /**
     * Update or insert CRM Task
     *
     * @param Entities\CrmTask $crmTask
     * @return RestResponse
     */
    public function postCrmTask(Entities\CrmTask $crmTask)
    {
        $response = $this->client->post('bmbysync/crmtask', $crmTask->ToArray());

        return $this->response($response);
    }

    /**
     * Update or insert agency broker from bmby
     *
     * @param Entities\BmbyBroker $broker
     * @return RestResponse
     */
    public function postBmbyBroker(Entities\BmbyBroker $broker)
    {
        $response = $this->client->post('bmbysync/agencybroker', $broker->ToArray());

        return $this->response($response);
    }

    /**
     * Update agency broker settings from bmby
     *
     * @param Entities\BmbyBrokerSettings $brokerSettings
     * @return RestResponse
     */
    public function postBmbyBrokerSettings(Entities\BmbyBrokerSettings $brokerSettings)
    {
        $response = $this->client->put('bmbysync/brokerportalsettings', $brokerSettings->ToArray(), $brokerSettings->getFiles());

        return $this->response($response);
    }

    /**
     * Get Localization
     *
     * @param int $localizationId
     * @return RestResponse
     */
    public function getLocalization($localizationId)
    {
        $response = $this->client->get('bmbysync/localizations/'.$localizationId, []);

        return $this->response($response);
    }

    /**
     * Get Broker Settings
     *
     * @param int $projectId
     * @param int $userId
     *
     * @return RestResponse
     */
    public function getBrokerSettings($projectId, $userId)
    {
        $response = $this->client->get("bmbysync/brokersettings/$projectId/$userId", []);

        return $this->response($response);
    }

    /**
     * List Localizations
     *
     * @return RestResponse
     */
    public function listLocalizations()
    {
        $response = $this->client->get('bmbysync/localizations', []);

        return $this->response($response);
    }
}

?>