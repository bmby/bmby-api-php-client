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

    protected $fields = [];

    const EmptyGuid = '00000000-0000-0000-0000-000000000000';
}

?>