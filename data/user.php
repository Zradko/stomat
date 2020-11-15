<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 15.11.2020
 * Time: 8:44
 */
namespace ifpr\model;
use ifpr\data\db;


class user
{

private function adduser(string $firstname, string $lastname, string $secondname, int $phone)
{
    $query = "insert  into if_user (firstname, lastname, secondname, phone) values ('$firstname','$lastname','$secondname','$phone')";
    $db = new db();
    if ($db->query($query)) {
        return true;
    } else {
        return false;
   };
}

}
