<?php
///
echo '
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Studyclass | Groupe 3</title>
<link href="'.$Base_URL.'/vue/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="'.$Base_URL.'/vue/assets/css/carousel.css" rel="stylesheet">
<link href="'.$Base_URL.'/vue/assets/css/font-awesome.css" rel="stylesheet">
<link href="'.$Base_URL.'/vue/assets/css/style.css" rel="stylesheet">
<link href="'.$Base_URL.'/vue/assets/css/custom.css" rel="stylesheet">

</head>
<body id="body">';

require("./vue/pages/structure/header.php");

echo '
<main>';

	require("$Route");

echo '
</main>';

require("./vue/pages/structure/footer.php");

echo '
<script src="'.$Base_URL.'/vue/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="'.$Base_URL.'/vue/assets/js/script.js"></script>

</body>
</html>';
?>
