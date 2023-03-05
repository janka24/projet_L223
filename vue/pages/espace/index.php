<?php
IF (!isset($_SESSION['Auth_Code']) OR $_SESSION['Auth_Code']=="") {
	require("login.php");
}Else {
	require("espace.php");
}
?>
