<?php
require 'vendor/autoload.php';

use Bmbyhood as Bmbyhood;
use Bmbyhood\Enumerations as Enumerations;

$config = [
    'client_id' => 'qRBmdWLuBRWAe2bQ2hiI@bmbyhoodapi.bmby.com',
    'client_secret' => 'WIvLce5Iqt1YvISvIhzNGMxCXVWAudrVd7rpQpO3',
];

$bmbyClient = new Bmbyhood\BmbyhoodClient($config);
$fileMeta = new Bmbyhood\Entities\FileMeta();

$fileMeta->setFolder('fileupload');
$fileMeta->setEntityId('dca91219-b663-4cce-8982-0608d0a2e812');
$fileMeta->setFileAccess(new Enumerations\FileAccess(Enumerations\FileAccess::PublicAccess));
$fileMeta->setFilePath('/Users/martin/Downloads/mike.png');

$fileRest = new Bmbyhood\Rest\FilesRest($bmbyClient);
$result = $fileRest->upload($fileMeta);

var_dump($result->getResponse());


$imageMeta = new Bmbyhood\Entities\ImageMeta();
$imageMeta->setFolder('bmbyhood');
$imageMeta->setEntityId('dca91219-b663-4cce-8982-0608d0a2e812');
$imageMeta->setFileAccess(new Enumerations\FileAccess(Enumerations\FileAccess::PublicAccess));
$imageMeta->setBigImageHeight(1000);
$imageMeta->setBigImageWidth(1000);
$imageMeta->setMediumImageHeight(200);
$imageMeta->setMediumImageWidth(200);
$imageMeta->setSmallImageHeight(100);
$imageMeta->setSmallImageWidth(100);

$imageRest = new Bmbyhood\Rest\ImagesRest($bmbyClient);

$imageMeta->setFilePath('/Users/martin/Downloads/bmbyhoodimages/property1.jpg');
$result = $imageRest->upload($imageMeta);
var_dump($result->getResponse());

$imageMeta->setFilePath('/Users/martin/Downloads/bmbyhoodimages/property2.jpg');
$result = $imageRest->upload($imageMeta);
var_dump($result->getResponse());

$imageMeta->setFilePath('/Users/martin/Downloads/bmbyhoodimages/property3.jpg');
$result = $imageRest->upload($imageMeta);
var_dump($result->getResponse());

$imageMeta->setFilePath('/Users/martin/Downloads/bmbyhoodimages/property4.jpg');
$result = $imageRest->upload($imageMeta);
var_dump($result->getResponse());

$imageMeta->setFilePath('/Users/martin/Downloads/bmbyhoodimages/property5.jpg');
$result = $imageRest->upload($imageMeta);
var_dump($result->getResponse());

$imageMeta->setFilePath('/Users/martin/Downloads/bmbyhoodimages/property6.jpg');
$result = $imageRest->upload($imageMeta);
var_dump($result->getResponse());


$imageMeta->setFilePath('/Users/martin/Downloads/bmbyhoodimages/property7.jpg');
$result = $imageRest->upload($imageMeta);
var_dump($result->getResponse());
?>