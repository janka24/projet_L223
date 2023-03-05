<?php
$Identifiant	= $_POST['Identifiant'] ?? "";
$Password		= $_POST['Password'] ?? "";
$Etudiant		= "";

IF (isset($_GET['Route']) AND $_GET['Route']=="logout") {
	session_destroy();
	header("Location:../");
}

IF ($Identifiant!="" AND $Password!="") {

	$Password = sha1(md5("$Password"));

	$RsUser = mysqli_query($db, "SELECT sha1(md5(CONCAT(`Id_Etudiant`,'-',`Etudiant`,'-',`Utilisateur`))) AS Auth_Code FROM Etudiants WHERE Utilisateur = '$Identifiant' AND Pass = '$Password'");
	$Is_User = mysqli_num_rows($RsUser) ?? 0;

	IF ($Is_User>0) {
		$data_User = mysqli_fetch_assoc($RsUser);
		$Auth_Code = $data_User['Auth_Code'];

		$_SESSION['Auth_Code'] = $Auth_Code;
	}
}

IF (isset($_SESSION['Auth_Code']) AND $_SESSION['Auth_Code']!="") {
	$Auth_Code = $_SESSION['Auth_Code'];
	$RsEtudiant = mysqli_query($db, "SELECT * FROM `Etudiants` WHERE sha1(md5(CONCAT(`Id_Etudiant`,'-',`Etudiant`,'-',`Utilisateur`))) = '$Auth_Code'");
	$Is_Etudiant = mysqli_num_rows($RsEtudiant) ?? 0;

	IF ($Is_Etudiant>0) {
		$data_Etudiant = mysqli_fetch_assoc($RsEtudiant);
		$Id_Etudiant	= $data_Etudiant['Id_Etudiant'];
		$Etudiant		= $data_Etudiant['Etudiant'];
	}
}
?>
