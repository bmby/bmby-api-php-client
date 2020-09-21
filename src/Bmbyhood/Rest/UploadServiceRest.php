<?php


namespace Bmbyhood\Rest;


class UploadServiceRest extends EntityRest
{

    /**
     * @param string $folder
     * @param array $fileData
     * @param string $container
     * @return RestResponse
     */
    public function uploadFile($fileData, $folder, $container = '$web')
    {
        $postData = [
            'action' => __FUNCTION__,
            'fileName' => $fileData['name'],
            'fileType' => $fileData['type'],
            'folder' => $folder,
            'container' => $container
        ];

        $file = [
            'file' => $fileData['path']
        ];

        $response = $this->client->post('', $postData, $file);

        return $this->response($response);
    }


    /**
     * @param string $filePath - folder path in Azure Storage
     * @param string $container
     * @return RestResponse
     */
    public function removeFile($filePath, $container = '$web')
    {
        $postData = [
            'action' => __FUNCTION__,
            'filePath' => $filePath,
            'container' => $container
        ];

        $response = $this->client->post('', $postData);

        return $this->response($response);
    }


    /**
     * @param string $folder - folder path in Azure Storage
     * @param string $container - Storage container
     * @return RestResponse - list of blobs urls
     */
    public function getFilesTree($folder, $container = '$web')
    {
        $postData = [
            'action' => __FUNCTION__,
            'folder' => $folder,
            'container' => $container
        ];

        $response = $this->client->post('', $postData);

        return $this->response($response);
    }

}