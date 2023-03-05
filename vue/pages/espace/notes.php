<div class="container mt-5">

<?php
//	Variables
$Chart_3D_Pie	= '';

$Chart_Matieres	= '';
$Chart_Notes	= '';

$Cumul_Notes_Brutes	= 0;
$Cumul_Notes_Pond	= 0;

//	Traitement du formulaire
IF (isset($_POST['Traitement'])) {
	$Coefficients	= $_POST['Coefficients'] ?? "";
	$Notes			= $_POST['Notes'] ?? "";

	foreach ($Coefficients AS $Id_Matiere => $Coefficient) {
		IF ($Coefficient=="" OR $Coefficient<1) { $Coefficient = 1; }
		mysqli_query($db, "UPDATE Matieres SET Coefficient = \"$Coefficient\" WHERE Id_Matiere = \"$Id_Matiere\"");
	}

	foreach ($Notes AS $Id_Matiere => $Note) {
		mysqli_query($db, "DELETE FROM Notes WHERE Id_Etudiant = \"$Id_Etudiant\" AND Id_Matiere = \"$Id_Matiere\"");
		mysqli_query($db,"INSERT INTO Notes (Id_Note, Id_Etudiant, Id_Matiere, Note) 
		VALUES (NULL, \"$Id_Etudiant\", \"$Id_Matiere\", \"$Note\")");
	}
}

//	Supprimer les notes !
IF (isset($_POST['Erase'])) {
	mysqli_query($db, "DELETE FROM Notes WHERE Id_Etudiant = \"$Id_Etudiant\"");
}

//	Infos_Calculs
$RsInfos_Calculs = mysqli_query($db, "SELECT COUNT(Id_Matiere) AS Tot_Matieres, SUM(Coefficient) AS Tot_Coeff FROM Matieres");
$data_Infos_Calculs = mysqli_fetch_assoc($RsInfos_Calculs);
	$Tot_Matieres	= $data_Infos_Calculs['Tot_Matieres'];
	$Tot_Coeff		= $data_Infos_Calculs['Tot_Coeff'];
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>

<?php
IF ($Id_Etudiant>0) {

	$Id_Formation_Selected = $_POST['Id_Formation'] ?? "";

	echo '
	<div class="container mt-4">
		<form action="" method="post">
			<div class="input-group">
				<select name="Id_Formation" class="form-select mt-2 mb-3" autocomplete="off">
					<option value="">Sélectionnez votre formation</option>';
					
					$RsMes_Formations = mysqli_query($db, "
					SELECT 
					Formations.Id_Formation AS Id_Formation, 
					Formations.Formation AS Formation, 
					Formations_Etudiant.Date_Inscription AS Date_Inscription 
					FROM Formations_Etudiant, Formations 
					WHERE 
					Formations_Etudiant.Id_Formation = Formations.Id_Formation 
					AND Id_Etudiant = '$Id_Etudiant'");
					while ($data_Mes_Formations = mysqli_fetch_assoc($RsMes_Formations)) {
						$Id_Formation		= $data_Mes_Formations['Id_Formation'];
						$Formation			= $data_Mes_Formations['Formation'];
						$Date_Inscription	= $data_Mes_Formations['Date_Inscription'];

						echo '<option value="'.$Id_Formation.'"'; IF ($Id_Formation==$Id_Formation_Selected) { echo ' selected'; } echo '>'.$Formation.'</option>';
					}

				echo '
				</select>
				<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i></button>
			</div>
		</form>
	</div>';

	IF ($Id_Formation_Selected!="") {
		$RsMatieres = mysqli_query($db, "
		SELECT 
		Matieres.Id_Matiere, 
		Matieres.Matiere, 
		Matieres.Coefficient 
		FROM Formations, Formation_Matieres, Matieres 
		WHERE 
		Formations.Id_Formation = Formation_Matieres.Id_Formation 
		AND Formation_Matieres.Id_Matiere = Matieres.Id_Matiere 
		AND Formations.Id_Formation = '$Id_Formation_Selected'");
		
		while ($data_Matieres = mysqli_fetch_assoc($RsMatieres)) {
			$Id_Matiere		= $data_Matieres['Id_Matiere'];
			$Matiere		= $data_Matieres['Matiere'];
			$Coefficient	= $data_Matieres['Coefficient'];

			echo "<p>$Id_Matiere - $Matiere - $Coefficient</p>";			
		}
		
	}

}
?>
