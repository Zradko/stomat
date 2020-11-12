<?php
namespace ifpr;
use ifpr as controller;
use ifpr\view as view;
require_once ('view/footer.php');
require_once ('view/header.php');


// Error Reporting
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Check Version
if (version_compare(phpversion(), '7.1.0', '<') == true) {
	exit('PHP 7.1+ Required');
}



$ft=new view\footer();
$hd=new view\header();


echo  $hd->loadheader(). $ft->loadfooter();
    ?>