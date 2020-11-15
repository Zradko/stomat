<?php
namespace ifpr;
require_once ('config.php');
require_once ('autoload.php');
session_start();

// Error Reporting
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Check Version
if (version_compare(phpversion(), '7.1.0', '<') == true) {
	exit('PHP 7.1+ Required');
}
$autold=new autoload();
$footer=new view\footer();
$header=new view\header();

if ( isset($_SESSION['is_logged'])&& !emty($_SESSION['is_logged'])){
    echo  $header->loadheader(). $footer->loadfooter();
    } else {
$login= new view\login();
    echo  $header->loadheader(). $login->loadlogin().$footer->loadfooter();
}

