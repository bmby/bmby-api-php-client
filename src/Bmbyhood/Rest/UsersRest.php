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
     * @param Entities\User $user
     * @return RestResponse
     */
    public function syncUser(Entities\User $user)
    {
        $response = $this->client->post('syncuser', $user->ToArray());

        return $this->response($response);
    }
}

?>