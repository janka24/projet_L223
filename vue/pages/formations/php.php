<?php
echo '
<div class="breadcrumbs">
	<div class="container">
		<h1>Formation PHP</h1>
	</div>
</div>

<section id="course-details" class="course-details">
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-8">


				<img src="'.$Base_URL.'/vue/assets/images/discovery/php.jpg" class="img-fluid mb-3" alt="PHP">
				<div class="card p-2 mb-2">
					<div class="card-body">
						<h5 class="mb-3">Présentation du langage PHP</h5>

						<p>PHP est un langage de programmation côté serveur, utilisé pour créer des sites web dynamiques.</p>
						<p>Il permet de générer des pages web dynamiques, de gérer des formulaires, d\'interagir avec des bases de données, de créer des sessions et bien plus encore.</p>
						<p>PHP est largement utilisé dans le développement web, en particulier avec le système de gestion de contenu WordPress.</p>
						<p>Le code PHP est exécuté sur le serveur, avant d\'être envoyé au navigateur de l\'utilisateur, ce qui signifie que le code source n\'est pas visible par les visiteurs du site web.</p>

						<h5 class="mb-3">Objectifs</h5>
						<p class="card-text">Dans ce cours nous apprendrons les bases de la programmation en PHP, un langage permettant de réaliser un site web dynamique et de dialoguer avec une base de données, en particulier :</p>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Savoir installer un environnement de travail adapté (éditeur de texte, serveur local, affichage des erreurs, etc)</li>
							<li class="list-group-item">Maîtriser les bases du langage PHP (variables, fonctions, boucles, tableaux, etc)</li>
							<li class="list-group-item">Savoir transmettre des informations de page en page</li>
							<li class="list-group-item">Connaître les variables superglobales importantes (sessions, cookies, etc)</li>
							<li class="list-group-item">Savoir lire et écrire des informations dans une base de données</li>
						</ul>
					</div>
				</div>
			</div> 
			<div class="col-lg-4">

            <!-- <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Formateur</h5>
              <p><a href="#">Hamza</a></p>
            </div> -->

            <!-- <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Prix de la formation</h5>
              <p>$165</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Places Libres</h5>
              <p>30</p>
            </div>

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Horaire</h5>
              <p>17.00 pm - 19.00 pm</p>
            </div> -->

            <div class="card">
              <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                      <h5 class="card-title">Responsable de la formation</h5>
                    </div>
                    <div class="col-md-4">
                      <img src="'.$Base_URL.'/vue/assets/images/formateurs/hamza.jpg" class="img-fluid rounded-circle" alt="image">
                      
                    </div>
                    <div class="col-md-6">
                      <div class="ml-3">
                          <p>Hamza Takkarouht</p>
                          <p class="text-center"><a href="#">hamza.takkarouht@unilim.fr</a></p>
                      </div>
                    </div>
                  </div>
                
              </div>
            </div>
            <br>
            <div class="course-info d-flex justify-content-between align-items-center">
              <div class="card">
                <div class="card-body">
                  <div class="col-md-12 text-center">
                      <h5 class="card-title">Modalités de la formation</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                  <li class="list-group-item">Prix de la formation : Gratuit</li>
                  <li class="list-group-item">Places Libres : 30 places</li>
                  <li class="list-group-item">Horaires : 17h00 - 19h00</li>
                  <li class="list-group-item">Durée de la formation : 6h</li>
                  </ul>
                </div>
                <div class="card-body">
                    <div class="col-md-12 text-center">
                     
                  <button type="button" class="j-btn" id="espace-btn">Réservez</button>
                     
                </div>  
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>';
?>
