<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;

class CustomersRest  extends EntityRest
{
    /**
     * List Customer
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
    public function listCustomer($params = [])
    {
        $response = $this->client->get('customers', $params);

        return $this->response($response);
    }

    /**
     * Get Customer
     *
     * @param int  $customerId
     * @return RestResponse
     *
     */
    public function getCustomer($customerId)
    {
        $response = $this->client->get('customers/'.$customerId, []);

        return $this->response($response);
    }

    /**
     * Update or insert Customer
     *
     * @param Entities\Customer $customer
     * @return RestResponse
     *
     */
    public function upsertCustomer(Entities\Customer $customer)
    {
        $response = $this->client->post('customers', $customer->ToArray());

        return $this->response($response);
    }

    /**
     * Update Customer
     * @param string $customerId
     * @param array $data
     *
     * @return RestResponse
     *
     */
    public function updateCustomer($customerId, $data =[])
    {
        $response = $this->client->patch('customers/'.$customerId, $data);

        return $this->response($response);
    }

    /**
     * Delete Customer
     *
     * @param string $customerId
     * @return RestResponse
     *
     */
    public function deleteCustomer($customerId)
    {
        $response = $this->client->delete('customers/'.$customerId);

        return $this->response($response);
    }

}