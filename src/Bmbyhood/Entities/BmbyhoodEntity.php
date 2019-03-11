<?php

namespace Bmbyhood\Entities;

use GuzzleHttp;

abstract class BmbyhoodEntity
{
    protected $fields = [];
    protected $files = [];
    protected $dataField = 'data';

    const EmptyGuid = '00000000-0000-0000-0000-000000000000';

    protected function setListField($values, $fieldName)
    {
        if (!is_array($values)) {
            return;
        }

        foreach ($values as $value) {
            if (!is_a($value, 'Bmbyhood\Entities\ListItem')) {
                continue;
            }

            $this->fields[$fieldName][] = $value->toArray();
        }
    }

    protected function getListField($fieldName)
    {
        $values = [];

        if (!$this->fields[$fieldName] || !is_array($this->fields[$fieldName])) {
            return $values;
        }

        foreach ($this->fields[$fieldName] as $data) {
            $value = new ListItem();
            $value->setData($data);
            $values[] = $value;
        }

        return $values;
    }

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
}

?>