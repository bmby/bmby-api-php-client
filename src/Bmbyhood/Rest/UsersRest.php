<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;

class UsersRest extends EntityRest
{
    /**
     * @param Entities\User $user
     * @return RestResponse
     */
    public function upsertUser(Entities\User $user)
    {
        $response = $this->client->post('users', $user->ToArray());

        return $this->response($response);
    }

    /**
     * @param Entities\UserBmbyClient $userBmbyClient
     * @return RestResponse
     */
    public function addBmbyClient(Entities\UserBmbyClient $userBmbyClient)
    {
        $response = $this->client->post('users/addbmbyclient', $userBmbyClient->ToArray());

        return $this->response($response);
    }

    /**
     * @param Entities\User $user
     * @return RestResponse
     */
    public function syncUser(Entities\User $user)
    {
        $response = $this->client->post('syncuser', $user->ToArray());

        return $this->response($response);
    }


    /**
     * Check if user exists
     *
     * @param $username
     * @param $bmbyInstanceId
     *
     * @return RestResponse
     */
    public function userExists($username, $bmbyInstanceId)
    {
        $response = $this->client->get('users/userexists', ['username' => $username, 'bmbyInstanceId' => $bmbyInstanceId]);

        return $this->response($response);
    }

}

?>