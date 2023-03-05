<?php
echo '
<div class="divider" id="formations_detail"></div>

<section id="courses" class="courses">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
				<div class="course-item">
				<img src="./vue/assets/images/logo/php_logo.png" class="img-fluid" alt="PHP">
					<div class="course-content">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<h4>PHP</h4>
							<p class="price">6H</p>
						</div>

						<h5><a href="#">PHP Langage de programmation</a></h5>
						<p>Améliorer votre niveau en langage de programation PHP pages web dynamiques , programation côté serveur.</p>
						<div class="trainer d-flex justify-content-between align-items-center">
						<div class="trainer-profile d-flex align-items-center">
							<a href="'.$Base_URL.'/formation/php.html"><button type="submit" class="btn">Découvrir</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
			<div class="course-item">
				<img src="./vue/assets/images/logo/logo_css.png" class="img-fluid" alt="CSS">
				<div class="course-content">
					<div class="d-flex justify-content-between align-items-center mb-3">
						<h4>CSS</h4>
						<p class="price">4H</p>
					</div>

					<h5><a href="#">CSS avancée</a></h5>
					<p>Offrez du style à vos pages en maitissant les caràcteristiques offerets par les feuilles du style en CSS3</p>
					<div class="trainer d-flex justify-content-between align-items-center">
					<div class="trainer-profile d-flex align-items-center">
						<a href="'.$Base_URL.'/formation/css.html"><button type="submit" class="btn">Découvrir</button></a>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
		<div class="course-item">
			<img src="./vue/assets/images/logo/logo_js.png" class="img-fluid"  alt="JS">
			<div class="course-content">
				<div class="d-flex justify-content-between align-items-center mb-3">
					<h4>Javascript</h4>
					<p class="price">8H</p>
				</div>

				<h5><a href="#">Javascript Langage de programmation</a></h5>
				<p>Apportez des fonctionnalités dynamiques aux sites web.Construire des scripts personalisés et sophistiqués,depuis la syntaxe de base jusqu\'au DOM.</p>
				<div class="trainer d-flex justify-content-between align-items-center">
					<div class="trainer-profile d-flex align-items-center">
						<a href="'.$Base_URL.'/formation/js.html"><button type="submit" class="btn">Découvrir</button></a>
					</div>
				</div>
			</div>
		</div>
	</div> 
</section>';
?>

