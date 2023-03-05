<div class="container mt-5">
	<div class="container px-4 py-5" id="espace">
		<h3 class="pb-2 border-bottom">Espace etudiant</h3>
			<div class="row mb-3 mt-4 text-center">
				
				<div class="col">
					<div class="card mb-4 rounded-3 shadow-sm">
						<div class="card-header py-3">
							<h4 class="my-0 fw-normal">Mes Formations</h4>
						</div>
						<div class="card-body">
							<h1 class="card-title pricing-card-title">2023</h1>
							<ul class="mt-3 mb-4 text-start">
								
								<?php
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

									echo '<li>'.$Formation.'</li>';
								}
								?>
							</ul>
							<button type="button" class="j-btn" id="espace-btn">Voir</button>
						</div>
					</div>
				</div>
				
				<div class="col">
					<div class="card mb-4 rounded-3 shadow-sm">
						<div class="card-header py-3">
							<h4 class="my-0 fw-normal">Calcul des notes</h4>
						</div>
						<div class="card-body">
							<h1 class="card-title pricing-card-title">2023</h1>
							<ul class="list-unstyled mt-3 mb-4">
								<li>Voir ma progression</li>
								<li>Page en construction</li>
							</ul>
							<a href="<?php echo $Base_URL; ?>/mon-espace/notes.html">
								<button type="button" class="j-btn" id="espace-btn">Voir</button>
							</a>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card mb-4 rounded-3 shadow-sm">
						<div class="card-header py-3">
							<h4 class="my-0 fw-normal">Mes vidéos formations</h4>
						</div>
						<div class="card-body">
							<h1 class="card-title pricing-card-title">2023</h1>
							<ul class="list-unstyled mt-3 mb-4">
								<li>Vidéos formations</li>
								<li>Page en construction</li>
							</ul>
							<button type="button" class="j-btn" id="espace-btn">Voir</button>
						</div>
					</div>
				</div>
			</div>
			 <!--  Mes formations-->
			<h3 class="pb-2 border-bottom">Mes formations</h3>
				<article class="blog-post">
        <p>Suivi de ma progression</p>
        <table class="table">
          <thead>
            <tr>
              <th>Formation</th>
              <th>Progression</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>PHP</td>
              <td>60%</td>
              <td>40%</td>
            </tr>
            <tr>
              <td>JS</td>
              <td>80%</td>
              <td>20%</td>
            </tr>
            <tr>
              <td>CSS</td>
              <td>100%</td>
              <td><i class="fa fa-check-circle"></i></td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td>Total</td>
              <td>%</td>
              <td>%</td>
            </tr>
          </tfoot>
        </table>

        <p>Total on peux afficher en notes 10/20 ou rester en %</p>
      </article>
       <!--  QCM-->
      <h3 class="pb-2 border-bottom">QCM</h3>
		<p>Testez  vos connaissances</p>
		<div class="container mt-5">
		<p class="fw-bold text-center"> PHP :Enumérez au moins qutre composants nécessaires pour créé une page web totalement dynamique.</p>
		
		<div class="list-group list-group-radio d-grid gap-2 border-0 w-auto">
			<div class="position-relative">
				<input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid1" value="">
				<label class="list-group-item py-3 pe-5" for="listGroupRadioGrid1">
					<p class="fw">Apache, PHP, MySQL, Javascript</p>
				</label>
			</div>

			<div class="position-relative">
				<input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid2" value="">
				<label class="list-group-item py-3 pe-5" for="listGroupRadioGrid2">
					<p class="fw">MySQL, React, HTML, CSS</p>
				</label>
			</div>

			<div class="position-relative">
				<input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid3" value="">
				<label class="list-group-item py-3 pe-5" for="listGroupRadioGrid3">
					<p class="fw-0">Apache, PHP, XML , CSS</p>
				</label>
			</div>
			<p class="fw-bold">Bonne réponse : </p>
		</div>
	</div>
	<div class="container mt-5">
		<p class="fw-bold text-center">JS : Quel mot clé permet de créer un objet?</p>
		
		<div class="list-group list-group-radio d-grid gap-2 border-0 w-auto">
			<div class="position-relative">
				<input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid1" value="">
				<label class="list-group-item py-3 pe-5" for="listGroupRadioGrid1">
					<p class="fw">new</p>
				</label>
			</div>

			<div class="position-relative">
				<input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid2" value="">
				<label class="list-group-item py-3 pe-5" for="listGroupRadioGrid2">
					<p class="fw">this</p>
				</label>
			</div>

			<div class="position-relative">
				<input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid3" value="">
				<label class="list-group-item py-3 pe-5" for="listGroupRadioGrid3">
					<p class="fw-0"> for</p>
				</label>
			</div>
			<p class="fw-bold">Bonne réponse : </p>
		</div>
		
	</div>
	<div class="container mt-5">
		<p class="fw-bold text-center">CSS : Quelle déclaration CSS permet-elle de faire pivoter un objet de 90 degrés?</p>
		
		<div class="list-group list-group-radio d-grid gap-2 border-0 w-auto">
			<div class="position-relative">
				<input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid1" value="">
				<label class="list-group-item py-3 pe-5" for="listGroupRadioGrid1">
					<p class="fw">transform:rotate(90deg);</p>
				</label>
			</div>

			<div class="position-relative">
				<input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid2" value="">
				<label class="list-group-item py-3 pe-5" for="listGroupRadioGrid2">
					<p class="fw">transform:scale(90deg);</p>
				</label>
			</div>

			<div class="position-relative">
				<input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid3" value="">
				<label class="list-group-item py-3 pe-5" for="listGroupRadioGrid3">
					<p class="fw-0">transform:translate(90deg);</p>
				</label>
			</div>
			<p class="fw-bold">Bonne réponse : </p>
		</div>
	</div>

	<!-- Téléchargement-->
	 <h3 class="pb-2 border-bottom">Téléchargement</h3>
	 <p>Espace de téléchargement</p>
	 <div class="container mt-5">
	 <h4>Télécharger votre formation en ligne</h4>
		<p class="fs-5 col-md-8">Formez vous à votre rytme</p>
		<div class="mb-5">
			<a href="../examples/" class="j-btn">Télécharger</a>
		</div>
	</div>
	
	 <!--Informations personnelles
    <section id="team" class="team section-bg">
      <div class="container py-5">

        <div class="section-title">
          <h2>Informations personnelles</h2>
        </div>

          <div class="col-lg-8 align-items-center">
            <div class="member d-flex ">
              <div class="pic">
				  <img src="./assets/images/discovery/php.jpg" class="img-fluid" alt="PHP">
				  <img src="./assets/images/formateurs/j.jpg" alt="janka" title="janka"  >
				</div>
              <div class="member-info">
                <h4>Janka</h4>
                <span>Inscrit depuis :</span>
                <p>Nom :</p>
                <p>Prenom :</p>
                <p>Adresse:</p>
                <p>Téléphone:</p>
                <p>Adresse mail:</p>
              </div>
            </div>   
          </div>
      </div>
         <button type="button" class="j-btn" id="espace-btn">Modifier</button>
    </section> End Team Section -->


