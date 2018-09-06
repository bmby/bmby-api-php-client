<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;

class FilesRest extends EntityRest
{
    /**
     * @param Entities\FileMeta $fileMeta
     * @return RestResponse
     */
    public function upload(Entities\FileMeta $fileMeta)
    {
        $response = $this->client->post('files', $fileMeta->ToArray(), [ 'file' => [ $fileMeta->getFilePath() ] ]);

        return $this->response($response);
    }

    /**
     * @param string $fileId
     * @return RestResponse
     */
    public function delete($fileId)
    {
        $response = $this->client->delete('files/'.$fileId);

        return $this->response($response);
    }

    /**
     * @param string $fileId
     * @return RestResponse
     */
    public function get($fileId)
    {
        $response = $this->client->get('files/'.$fileId, []);

        return $this->response($response);
    }
}

?>