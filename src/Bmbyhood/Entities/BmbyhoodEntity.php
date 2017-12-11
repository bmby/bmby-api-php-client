<?php

namespace Bmbyhood\Entities;

use GuzzleHttp;

abstract class BmbyhoodEntity
{
    public function ToJson()
    {
        return json_encode($this->fields);
    }

    public function ToArray()
    {
        return $this->fields;
    }

    protected $fields = [];
}

?>