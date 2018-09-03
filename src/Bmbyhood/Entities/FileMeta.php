<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class FileMeta extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'meta_data' => [
                'file_access' => 0,
                'entity_id' => '',
                'folder' => '',
                'file_name' => ''
            ],
            'file' => ''
        ];
    }

    public function toArray()
    {
        return $this->fields['meta_data'];
    }

    /**
     * @param Enumerations\FileAccess $value
     */
    public function setFileAccess(Enumerations\FileAccess $value)
    {
        $this->fields['meta_data']['file_access'] = $value ? $value->getValue() : Enumerations\FileAccess::Unknown;
    }
    /**
     * @return Enumerations\FileAccess
     */
    public function getFileAccess()
    {
        return new Enumerations\FileAccess($this->fields['meta_data']['file_access']);
    }

    /**
     * @param string $value
     */
    public function setEntityId($value)
    {
        $this->fields['meta_data']['entity_id'] = $value;
    }
    /**
     * @return string
     */
    public function getEntityId()
    {
        return $this->fields['meta_data']['entity_id'];
    }

    /**
     * @param string $value
     */
    public function setFolder($value)
    {
        $this->fields['meta_data']['folder'] = $value;
    }
    /**
     * @return string
     */
    public function getFolder()
    {
        return $this->fields['meta_data']['folder'];
    }

    /**
     * @param string $value
     */
    public function setFilePath($value)
    {
        $this->fields['file'] = $value;
    }
    /**
     * @return string
     */
    public function getFilePath()
    {
        return $this->fields['file'];
    }

    /**
     * @param string $value
     */
    public function setFileName($value)
    {
        $this->fields['meta_data']['file_name'] = $value;
    }
    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fields['meta_data']['file_name'];
    }
}