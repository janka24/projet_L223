<?php
require("./controleur/identification.php");

$Base_URL = "https://jannistyle.fr";
//	$Base_URL = "http://localhost/study-class";

$Route		= $_GET['Route'] ?? "";
$Page		= $_GET['Page'] ?? "";

IF ($Route=="formation") {
	$Route = "./vue/pages/formations/$Page.php";
}

Else IF ($Route=="mon-espace") {
	IF ($Page=="") {
		$Route = "./vue/pages/espace/index.php";
	}

	Else {
		$Route = "./vue/pages/espace/$Page.php";
	}
}

Else IF ($Page=="404") {
	$Route = "./vue/pages/includes/404.php";
}

Else {
	$Route = "./vue/pages/accueil.php";
}
?>
