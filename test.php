<?php
require 'vendor/autoload.php';

use Bmbyhood as Bmbyhood;
use Bmbyhood\Enumerations as Enumerations;

$config = [
'client_id' => 'qRBmdWLuBRWAe2bQ2hiI@bmbyhoodapi.bmby.com',
'client_secret' => 'WIvLce5Iqt1YvISvIhzNGMxCXVWAudrVd7rpQpO3',
];

$bmbyClient = new Bmbyhood\BmbyhoodClient($config, 'http://localhost:5000/');

$customer = new Bmbyhood\Entities\Customer();

$customer->setFirstName('Martin');
$customer->setLastName('Boy');
$customer->setEmail('martin@boy.com');
$customer->setCustomerBmbyId(125000);
$customer->setMobile('972 54 347 22 15');

$patchData = array("CustomerBmbyId"=>333);
//$patchData = array("FirstName"=>"Tam");

$customerRest = new Bmbyhood\Rest\CustomersRest($bmbyClient);
//$result = $customerRest->upsertCustomer($customer);
//$result = $customerRest->updateCustomer("b7c7b86b-521b-448e-aadc-8ef46d696358", $patchData);
$result = $customerRest->getCustomer("b7c7b86b-521b-448e-aadc-8ef46d696358");

var_dump($result->getResponse());


?>

