<?php  
include_once("pages/layout/header.php"); 
include "include/__init.php";




$url = explode("/", $_SERVER["REQUEST_URI"]);
$path = $url[2] == "" ? "home": "/".$url[2];


$url = explode("?",$path);
if (sizeof($url) == 2){
	$path = $url[0];
}

if (file_exists("pages/".$path.".php")){

	include_once("pages/".$path.".php");

}else{ include_once("pages/home.php");}


include_once("pages/layout/foter.php"); 
?>