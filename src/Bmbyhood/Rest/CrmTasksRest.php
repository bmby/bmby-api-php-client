<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;

class CrmTasksRest extends EntityRest
{
    /**
     * List CrmTask
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
    public function listCrmTask($params = [])
    {
        $response = $this->client->get('crmtasks', $params);

        return $this->response($response);
    }

    /**
     * Get CrmTask
     *
     * @param int  $crmTaskId
     * @return RestResponse
     *
     */
    public function getCrmTask($crmTaskId)
    {
        $response = $this->client->get('crmtasks/'.$crmTaskId, []);

        return $this->response($response);
    }

    /**
     * Update or insert CrmTask
     *
     * @param Entities\CrmTask $crmTask
     * @return RestResponse
     *
     */
    public function upsertCrmTask(Entities\CrmTask $crmTask)
    {
        $response = $this->client->post('crmtasks', $crmTask->ToArray());

        return $this->response($response);
    }

    /**
     * Update CrmTask
     *
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateCrmTask($data =[])
    {
        $response = $this->client->patch('crmtasks', $data);

        return $this->response($response);
    }

    /**
     * Delete CrmTask
     *
     * @param int $crmTaskId
     * @return RestResponse
     *
     */
    public function deleteCrmTask($crmTaskId)
    {
        $response = $this->client->delete('crmtasks/'.$crmTaskId);

        return $this->response($response);
    }

}