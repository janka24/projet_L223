<?php
/*
$Test = sha1(md5("Janka"));
echo "<p>$Test</p>";

$Test = sha1(md5("Hamza"));
echo "<p>$Test</p>";

$Test = sha1(md5("Rumie"));
echo "<p>$Test</p>";
*/

///
echo '
<div class="container d-flex justify-content-center mt-5">
	<div class="col-lg-6">
		<div class="m-4 p-5 shadow-sm border rounded-5 border-primary">
			<h2 class="text-center mb-4">Connexion</h2>
			<form action="" method="post">
				<div class="mb-3">
					<label class="form-label">Adresse mail</label>
					<input type="email" name="Identifiant" class="form-control border border-primary" autofocus="yes">
				</div>

				<div class="mb-3">
					<label lass="form-label">Mot de passe</label>
					<input type="password" name="Password" class="form-control border border-primary">
				</div>

				<p class="small"><a class="text-primary" href="forget-password.html"></a></p>

				<button class="j-btn mb-4 w-100" type="submit">Se connecter</button>

				<a href="'.$Base_URL.'/mon-espace/create.html" class="text-primary">Vous n\'avez pas de compte ? S\'inscrire</a>
			</form>
		</div>
	</div>
</div>';
?>
