<?php 

session_start();
//This do because when the site sever changing all have to change all stuff so in this avoid that

$path = $_SERVER['REQUEST_SCHEME']. "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
$path = str_replace("index.php", "" ,$path);

define('ROOT',$path);
define('ASSETS',$path . "assets/");
// in this include the init file
include "../app/init.php";

$app = new App();
