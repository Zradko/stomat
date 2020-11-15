<?php
namespace ifpr;
use ifpr\view as view;
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
echo  $header->loadheader(). $footer->loadfooter();
