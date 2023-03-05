<?php
echo '
<div class="container d-flex align-items-center justify-content-center mt-4">
	<div class="text-center row">
		<div class=" col-md-6">
			<picture>
				<source srcset="'.$Base_URL.'/vue/assets/images/404.webp" type="image/webp">
				<source srcset="'.$Base_URL.'/vue/assets/images/404.png" type="image/jpeg">
				<img class="img-fluid" src="'.$Base_URL.'/vue/assets/images/404.jpg">
			</picture>
		</div>
		<div class=" col-md-6 mt-5">
			<p class="fs-3"> <span class="text-danger">Opps!</span> Page introuvable.</p>
			<p class="lead">
				La page demandée n\'existe pas.
			</p>
			<a href="'.$Base_URL.'/" class="btn btn-primary">Retour à l\'accueil</a>
		</div>
	</div>
</div>';
?>
