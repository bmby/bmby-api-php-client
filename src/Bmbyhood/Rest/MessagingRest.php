<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;

class MessagingRest extends EntityRest
{
    /**
     * Send a message to
     *
     * @param string $topic - message topic
     * @param string $type - message type
     * @param array $params - the payload
     *
     * @return RestResponse
     */
    public function sendMessage($topic, $type, $params = [])
    {
        $message = [
            'type' => $type,
            'params' => $params
        ];

        $postData = [
            'topic' => $topic,
            'message' => $message
        ];

        $response = $this->client->post('', $postData);

        return $this->response($response);
    }
}

