<?php
namespace Bmbyhood\Entities;

use Bmbyhood\Enumerations as Enumerations;

class File extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'FilePath' => '',
            'FileContent' => ''
        ];
    }
}