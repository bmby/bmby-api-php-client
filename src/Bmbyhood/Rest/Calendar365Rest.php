<?php


namespace Bmbyhood\Rest;


class Calendar365Rest extends EntityRest
{

  /**
   * @param string $method
   * @param string $url
   * @param array $options
   * @return RestResponse
   */
  public function request($method, $url, $options = [])
  {
    $postData = [
      'action' => __FUNCTION__,
      'method' => $method,
      'url' => $url,
      'options' => $options
    ];

    $response = $this->client->post('', $postData);

    return $this->response($response);
  }

  public function getToken($url, $form_params)
  {
    $postData = [
      'action' => __FUNCTION__,
      'url' => $url,
      'form_params' => $form_params
    ];

    $response = $this->client->post('', $postData);

    return $this->response($response);
  }

}