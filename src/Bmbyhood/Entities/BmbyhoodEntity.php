<?php

namespace Bmbyhood\Entities;

use GuzzleHttp;

abstract class BmbyhoodEntity
{
    public function toJson()
    {
        return json_encode($this->fields);
    }

    public function toArray()
    {
        return $this->fields;
    }

    public function getFiles()
    {
        return $this->files;
    }

    public function hasFiles()
    {
        return !empty($this->files);
    }

    public function setData($data)
    {
        if (!is_array($data)) {
            return;
        }

        foreach ($data as $key => $value) {
            if (array_key_exists($key, $this->fields)) {
                $this->fields[$key] = $value;
            }
        }
    }

    protected $fields = [];
    protected $files = [];
    protected $dataField = 'data';

    const EmptyGuid = '00000000-0000-0000-0000-000000000000';
}

?>