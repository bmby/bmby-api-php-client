<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;

class ImagesRest extends EntityRest
{
    /**
     * @param Entities\ImageMeta $imageMeta
     * @return RestResponse
     */
    public function upload(Entities\ImageMeta $imageMeta)
    {
        $response = $this->client->post('images', $imageMeta->ToArray(), [ 'file' => [ $imageMeta->getFilePath() ] ]);

        return $this->response($response);
    }

    /**
     * @param string $imageId
     * @return RestResponse
     */
    public function delete($imageId)
    {
        $response = $this->client->delete('images/'.$imageId);

        return $this->response($response);
    }
}

?>