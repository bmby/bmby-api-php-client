<?php
namespace Bmbyhood\Rest;

use Bmbyhood\Entities;
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use MicrosoftAzure\Storage\Blob\Models\ListBlobsOptions;

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

    /**
     * Writes a blob content to output stream
     *
     * @param $connectionString, connection string formatted as 'DefaultEndpointsProtocol=[http|https];AccountName=myAccountName;AccountKey=myAccountKey'
     * @param $containerName, the name of a blob container
     * @param $fileName, the file name
     */
    public function outputFromAzure($connectionString, $containerName, $fileName)
    {
        $blobClient = BlobRestProxy::createBlobService($connectionString);
        $blob = $blobClient->getBlob($containerName, $fileName);
        fpassthru($blob->getContentStream());
    }
}

?>