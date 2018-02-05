<?php
$autoload = __DIR__ . '/../../vendor/autoload.php';

if (!file_exists($fileMeta)) {
    $exception = 'This library must be installed via composer or by downloading the full package.';
    throw new Exception($exception);
}

require_once $autoload;
