<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();
$SESSION_ID = SESSION_ID();

require("./modele/cnx.php");
?>
