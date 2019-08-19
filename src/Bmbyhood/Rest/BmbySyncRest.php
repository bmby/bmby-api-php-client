<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;
use Bmbyhood\Rest\QueryParams\ClientQueryParams;
use Bmbyhood\Rest\QueryParams\TimeLineSummaryQueryParams;
use Bmbyhood\Rest\QueryParams\PortalQueryParams;
use Bmbyhood\Rest\Response\TimeLineStats;
use Bmbyhood\Rest\Response\TimeLineResponse;
use Bmbyhood\Rest\Response\PortalStatsResponse;

class BmbySyncRest extends EntityRest
{
    /**
     * Update or insert repository properties
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

        $response = $this->client->post('bmbysync/repositoryproperties', $data);

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
        $response = $this->client->post('bmbysync/repositoryproperty', $property->ToArray());

        return $this->response($response);
    }

    /**
     * Post brokerage agreements
     *
     * @param Entities\ClientAgreements $agreements
     * @return RestResponse
     *
     */
    public function postClientAgreements(Entities\ClientAgreements $agreements)
    {
        $response = $this->client->post('bmbysync/clientagreements', $agreements->ToArray());

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
     * Update or insert push token
     *
     * @param Entities\UserPushToken $pushToken
     * @return RestResponse
     */
    public function postPushToken(Entities\UserPushToken $pushToken)
    {
        $response = $this->client->post('bmbysync/storepushtoken', $pushToken->ToArray());

        return $this->response($response);
    }

    /**
     * Update or insert customer query
     *
     * @param Entities\Query $query
     * @return RestResponse
     */
    public function postQuery(Entities\Query $query)
    {
        $response = $this->client->post('bmbysync/query', $query->ToArray());

        return $this->response($response);
    }

    /**
     * Update or insert property match
     *
     * @param Entities\PropertyMatchFromBmby $propertMatch
     * @return RestResponse
     */
    public function postPropertyMatch(Entities\PropertyMatchFromBmby $propertMatch)
    {
        $response = $this->client->post('bmbysync/match', $propertMatch->ToArray());

        return $this->response($response);
    }

    /**
     * Update or insert agency
     *
     * @param Entities\Agency $agency
     * @return RestResponse
     */
    public function postAgency(Entities\Agency $agency)
    {
        $response = $this->client->post('bmbysync/agency', $agency->ToArray());

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
     * Invite customer to portal.
     *
     * @param string $portalId
     * @return RestResponse
     */
    public function inviteToPortal($portalId)
    {
        $response = $this->client->post('bmbysync/invite-to-portal', ['portal_id' => $portalId]);

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
        $response = $this->client->put('bmbysync/brokerportalsettings', $brokerSettings->ToArray(), $brokerSettings->getFiles(), true);

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
    public function getBrokerSettings($projectId, $userId, $bmbyInstanceId = '')
    {
        $response = $this->client->get("bmbysync/brokersettings/$projectId/$userId", ['bmbyInstanceId' => $bmbyInstanceId]);

        return $this->response($response);
    }

    /**
     * @param $bmbyInstanceId
     * @param $bmbyProjectId
     * @param int $bmbyClientId
     * @param bool $isActive
     *
     * @return RestResponse|\Psr\Http\Message\ResponseInterface
     */
    public function setQueryStatus($bmbyInstanceId, $bmbyProjectId, $bmbyClientId, $isActive)
    {
        $response = $this->client->post('bmbysync/setquerystatus', [
            'bmby_instance_id' => $bmbyInstanceId,
            'bmby_project_id' => $bmbyProjectId,
            'bmby_client_id' => $bmbyClientId,
            'is_active' => $isActive
        ]);

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

    /**
     * @param TimeLineSummaryQueryParams $queryParams
     * @return TimeLineStats
     */
    public function TimeLineStats(TimeLineSummaryQueryParams $queryParams)
    {
        $response = $this->client->get('bmbysync/timeline-stats', $queryParams->toArray());

        return $this->response($response, TimeLineStats::class);
    }

    /**
     * @param PortalQueryParams $queryParams
     * @return PortalStatsResponse
     */
    public function portalStats(PortalQueryParams $queryParams)
    {
        $response = $this->client->get('bmbysync/portal-stats', $queryParams->toArray());

        return $this->response($response, PortalStatsResponse::class);
    }

    /**
     * @param TimeLineSummaryQueryParams $queryParams
     * @return TimeLineResponse
     */
    public function listTimeLineSummary(TimeLineSummaryQueryParams $queryParams)
    {
        $response = $this->client->get('bmbysync/time-line-summary', $queryParams->toArray());

        return $this->response($response, TimeLineResponse::class);
    }

    /**
     * @param TimeLineSummaryQueryParams $queryParams
     * @return TimeLineResponse
     */
    public function listTimeLine(TimeLineSummaryQueryParams $queryParams)
    {
        $response = $this->client->get('bmbysync/time-line', $queryParams->toArray());

        return $this->response($response, TimeLineResponse::class);
    }

    /**
     * @param ClientQueryParams $queryParams
     * @return RestResponse
     */
    public function getPortalDetails(ClientQueryParams $queryParams)
    {
        $response = $this->client->get('bmbysync/portal-details', $queryParams->toArray());

        return $this->response($response);
    }

    /**
     * @param string $eventId
     *
     * @return RestResponse
     */
    public function setTimeLineEventAsDone($eventId)
    {
        $response = $this->client->put('bmbysync/set-event-as-done/'.$eventId, []);

        return $this->response($response);
    }
}

?>