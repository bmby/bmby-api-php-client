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
     *
     * @return RestResponse
     */
    public function userExists($username)
    {
        $response = $this->client->get('users/userexists', ['username' => $username]);

        return $this->response($response);
    }


    /**
     * Check if client id is already linked to user
     *
     * @param int $bmbyClientId
     * @param string $bmbyInstanceId
     * @param int $bmbyProjectId
     *
     * @return RestResponse
     */
    public function clientExists($bmbyClientId, $bmbyInstanceId, $bmbyProjectId)
    {
        $response = $this->client->get('users/bmbyclientexists', ['bmbyClientId' => $bmbyClientId, 'bmbyInstanceId' => $bmbyInstanceId, 'bmbyProjectId' => $bmbyProjectId]);

        return $this->response($response);
    }

    /**
     * @param Entities\Password $user
     * @return RestResponse|mixed
     */
    public function syncUserPassword(Entities\Password $user)
    {
        $identityServerID = $user->getIdentityServerID();
        $data = [
            'PasswordHash' => $user->getPasswordHash(),
            'PasswordDate' => $user->getPasswordDate()
        ];
        $response = $this->client->post("users/update?userId={$identityServerID}", $data);

        return $this->response($response);
    }

    /**
     * @param $queryParameters
     * @return RestResponse|mixed
     */
    public function getIdentityUserProfiles($queryParameters)
    {
        $response = $this->client->get('users/profiles', $queryParameters);

        return $this->response($response);
    }

    /**
     * @param Entities\UserProfile $userProfile
     * @return RestResponse|mixed
     */
    public function updateIdentityUserProfile(Entities\UserProfile $userProfile)
    {
        $identityServerID = $userProfile->getIdentityServerID();
        $data = [
            'ValidEmail' => $userProfile->getValidEmail(),
            'ValidPhone' => $userProfile->getValidPhone(),
            'PasswordDate' => $userProfile->getPasswordDate()
        ];
        $response = $this->client->post("users/update?userId={$identityServerID}", $data);

        return $this->response($response);
    }

    /**
     * @param $queryParameters
     * @return RestResponse|mixed
     */
    public function getIdentityUserLockouts($queryParameters)
    {
        $response = $this->client->get('users/lockouts', $queryParameters);

        return $this->response($response);
    }

    /**
     * @param Entities\UserUnlock $userUnlock
     * @return RestResponse|mixed
     */
    public function unlockUser(Entities\UserUnlock $userUnlock)
    {
        $response = $this->client->post('users/unlock', $userUnlock->ToArray());

        return $this->response($response);
    }

    /**
     * @param Entities\UserLockout $userLockout
     * @return RestResponse|mixed
     */
    public function updateIdentityUserLockout(Entities\UserLockout $userLockout)
    {
        $identityServerID = $userLockout->getIdentityServerID();
        $data = ['LockoutEnd' => $userLockout->getLockoutEnd()];
        $response = $this->client->post("users/update?userId={$identityServerID}", $data);

        return $this->response($response);
    }
}
