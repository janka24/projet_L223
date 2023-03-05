<?php
///
error_reporting(E_ALL);
ini_set('display_errors', '1');

//	Paramètres de connection
$servername	= "localhost";
$username	= "unilim";
$password	= "uUx3E655JU6w!";
$bdd		= "Study_Class";

$db = mysqli_connect($servername, $username, $password, $bdd);
mysqli_set_charset($db,"utf8");
?>
