<?php
require 'vendor/autoload.php';

use Bmbyhood as Bmbyhood;
use Bmbyhood\Enumerations as Enumerations;

$config = [
    'client_id' => 'qRBmdWLuBRWAe2bQ2hiI@bmbyhoodapi.bmby.com',
    'client_secret' => 'WIvLce5Iqt1YvISvIhzNGMxCXVWAudrVd7rpQpO3',
];

$bmbyhoodClient = new Bmbyhood\BmbyhoodClient($config);

$bmbydb = new mysqli('mc.bmby.com', 'bmby_dbadmin', 'RXdv5Orv', 'bmby');
$result = $bmbydb->query("SELECT UserID, Active, Email, FirstName, LastName, Mobile, LOWER(CONVERT( DECODE(UserName, 'oy1yU5xS') USING latin1 )) UserName, PasswordHash FROM bmby.Users WHERE UserID > 0 ORDER BY UserID DESC");

while ($data = $result->fetch_assoc())
{
    $user = new Bmbyhood\Entities\User();
    $user->setUserType(new Enumerations\UserType(Enumerations\UserType::Broker));
    $user->setUserName(iconv("Windows-1255", "UTF-8", $data['UserName']));
    $user->setEmail(iconv("Windows-1255", "UTF-8", $data['Email']));
    $user->setPassword(iconv("Windows-1255", "UTF-8", $data['PasswordHash']));
    $user->setFirstName(iconv("Windows-1255", "UTF-8", $data['FirstName']));
    $user->setLastName(iconv("Windows-1255", "UTF-8", $data['LastName']));
    $user->setMobile(iconv("Windows-1255", "UTF-8", $data['Mobile']));
    $user->setBmbyUserId($data['UserID']);
    $user->setIsActive($data['Active']);
    $user->setNotificationInterval(new Bmbyhood\Enumerations\NotificationInterval(Bmbyhood\Enumerations\NotificationInterval::Online));

    $rest = new Bmbyhood\Rest\UsersRest($bmbyhoodClient);

    try
    {
        $httpResult = $rest->upsertUser($user);
        echo $user->getBmbyUserId()."\n";
    }
    catch(Exception $ex)
    {
        var_dump($ex->getMessage());
    }
}

?>