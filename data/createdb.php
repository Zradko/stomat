<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include_once ('db.php');
$db= new Db();

$sql='CREATE TABLE if not exists if_user (
    userid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    LastName varchar(255),
    FirstName varchar(255),
    secondName varchar(255),
    Address varchar(255),
    City varchar(255),
    phone int (16),
    tfuserid varchar(255)
);';
var_dump( $db->query($sql));

?>