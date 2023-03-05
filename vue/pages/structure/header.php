<?php
echo '
<header>
	<nav class="navbar navbar-expand-md fixed-top bg-white" id="top-nav">
		<div class="container">
			<a class="navbar-brand" href="'.$Base_URL.'">
				<img src="'.$Base_URL.'/vue/assets/images/logo/1.png" class="w-100">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse navbar-light" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-md-0">
					<li class="nav-item">
						<a class="nav-link nav-scroll" href="'.$Base_URL.'/#presentation" data-target="#presentation">Présentation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-scroll" href="'.$Base_URL.'/#formations_detail" data-target="#formations_detail">Formations</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-scroll" href="'.$Base_URL.'/#formations" data-target="#formations">Actualités</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-scroll" href="'.$Base_URL.'/#formateurs" data-target="#formateurs">Formateurs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link nav-scroll" href="'.$Base_URL.'/#contact" data-target="#contact">Contact</a>
					</li>
				</ul>';
				
				IF ($Etudiant=="") {
					echo '
					<a href="'.$Base_URL.'/mon-espace"><button type="button" class="j-btn" id="espace-btn">Mon espace</button></a>';
				}

				Else {
					echo '
					<div class="container text-end welcome"><a href="'.$Base_URL.'/mon-espace"><i class="fa fa-user me-1"></i> Bienvenue '.$Etudiant.' </a>
					<a href="'.$Base_URL.'/mon-espace/logout" alt="Quitter mon espace" title="Quitter mon espace"><i class="fa fa-power-off ms-1"></i></a></div>';
				}

			echo '
			</div>
		</div>
	</nav>
</header>';
?>
