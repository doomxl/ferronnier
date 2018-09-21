<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MS Poirier - Devis de rampe & garde-corps</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /><![endif]-->
		<link rel="apple-touch-icon" href="images/favicon.png">
		<!--[if lte IE 8]><script src="./assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="./assets/css/ie8.css" /><![endif]-->
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
	</head>
	<body class="no-sidebar>">
	
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header">
				<!-- Inner -->
				<div class="inner all-inners">
					<header>
						<h1><a href="index.php" id="logo">MS Poirier</a></h1>
						<p>Devis de rampe & garde-corps en fer forgé</p>
					</header>
				</div>
				<?php include('include/nav.php'); ?>
			</div>

			<!-- Main -->
				<div class="wrapper style1 devis-wrapper">
					<div class="container devis-container">
						<header><p>Devis de rampe & garde-corps</p></header>
						
						<form method="post" action="traitement_devis1.php">
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<select class="form-control form-control-sm" id="model" name="model">
										<option value="Modele">Choix du modèle</option>
										<option value="Art-Deco">Art Déco</option>
										<option value="Art-Deco III">Art Déco III</option>
										<option value="Art-Deco Bronze">Art Déco Bronze</option>
										<option value="Art-Nouveau">Art Nouveau</option>
										<option value="Bateau">Bateau</option>
										<option value="Bouquet">Bouquet</option>          
										<option value="Charles VIII">Charles VIII</option>
										<option value="Croisade">Croisade</option>
										<option value="Directoire">Directoire</option>
										<option value="Francois I">François Ier</option>
										<option value="Gaspard II">Gaspard II</option>
										<option value="Gothique">Gothique</option>
										<option value="Henri III">Henri III</option>		  
										<option value="Henri IV">Henri IV</option>
										<option value="Louis XIV">Louis XIV</option>
										<option value="Louis XV">Louis XV</option>
										<option value="Louis XVI">Louis XVI</option>
										<option value="Rayon de Soleil">Rayon de Soleil</option>          
										<option value="Roman">Roman</option>
										<option value="Saint Eloi">Saint Eloi</option>
										<option value="Saint Barthelemy">Saint Barthélémy</option>
										<option value="Saint Louis">Saint Louis</option>          
										<option value="Surrealiste">Surréaliste</option>
										<option value="Vogue">Vogue</option>
									</select>
								</div>
								<div class="col-12 col-md-6">
									<div class="input-group mb-3">
										<input type="text" class="form-control  form-control-sm" id="dim1" name="dim1" placeholder="Longeur totale (cm)">
										<div class="input-group-append">
											<span class="input-group-text" data-toggle="tooltip" data-html="true" data-placement="left" title="Rampe + garde-corps"><i class="fas fa-info-circle"></i></span>
										</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<select class="form-control form-control-sm" id="mc" name="mc">
										<option value="Modele" selected>Choix de la main courante</option>
										<option value="fer">Fer</option>
										<option value="laiton poli">Laiton brillant</option>
										<option value="laiton vieilli">Laiton vieilli</option>
										<option value="bois">Bois</option>
									</select>
								</div>
								<div class="col-12 col-md-6">
									<div class="input-group">
										<input type="text" class="form-control  form-control-sm" id="codpos" name="codpos" placeholder="Code postal du chantier">
										<div class="input-group-append">
											<span class="input-group-text"data-toggle="tooltip" data-html="true" data-placement="left" title="0 pour l'étranger"><i class="fas fa-info-circle"></i></span>
										</div>
									</div>
								</div>
							</div>
			
							<div class="form-row ml-1 mb-3">
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="typesca" id="inlineRadio1" value="option1">
								  <label class="form-check-label" for="inlineRadio1">Escalier droit</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="typesca" id="inlineRadio2" value="option2">
								  <label class="form-check-label" for="inlineRadio2">Escalier 1 quart tournant</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="typesca" id="inlineRadio3" value="option3">
								  <label class="form-check-label" for="inlineRadio3">Escalier 2 quart tournant</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="typesca" id="inlineRadio3" value="option3">
								  <label class="form-check-label" for="inlineRadio3">Pas d'escalier, uniquement un garde-corps</label>
								</div>
							</div>
				
							<div class="form-row">
								<div class="form-group col-12">
									<input type="email" class="form-control form-control-sm" id="mail" name="mail" placeholder="Email">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-12 ">
									Pour faciliter nos échanges vous pouvez préciser:
								</div>
							</div>
							<div class="form-row ml-1 mb-3">
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="titr" id="inlineRadio1" value="option1">
								  <label class="form-check-label" for="inlineRadio1">Madame</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="titr" id="inlineRadio2" value="option2">
								  <label class="form-check-label" for="inlineRadio2">Monsieur</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="titr" id="inlineRadio3" value="option3">
								  <label class="form-check-label" for="inlineRadio3">Société</label>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<input type="text" class="form-control form-control-sm" id="nom" name="nom" placeholder="Nom">
								</div>
								<div class="form-group col-12 col-md-6">
									<input type="text" class="form-control form-control-sm" id="rue" name="rue" placeholder="Rue du chantier">
								</div>
							</div>
							
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<input type="text" class="form-control form-control-sm" id="ville" name="ville" placeholder="Ville du chantier">
								</div>
							</div>
							
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<div class="input-group">
										<input type="tel" class="form-control form-control-sm" id="tel1" name="tel1" pattern="[0-9][1-9][0-9]{8}" size="10" placeholder="Téléphone">
										<div class="input-group-append">
											<span class="input-group-text"data-toggle="tooltip" data-html="true" data-placement="left" title="10 chiffres sans espace.<br/>  Inscrire dans le commentaire<br/> les numéros internationaux"><i class="fas fa-info-circle"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group col-12 col-md-6">
									<div class="input-group">
										<input type="tel" class="form-control  form-control-sm" id="tel2" name="tel2" pattern="[0-9][1-9][0-9]{8}" size="10" placeholder="2ème téléphone">
										<div class="input-group-append">
											<span class="input-group-text" data-toggle="tooltip" data-html="true" data-placement="left" title="10 chiffres sans espace.<br/>  Inscrire dans le commentaire<br/> les numéros internationaux"><i class="fas fa-info-circle"></i></span>
										</div>
									</div>
								</div>
							</div>
							
							
							
							<div class="form-row">
								<div class="form-group col-12">
									<textarea class="form-control form-control-sm" id="comment" name="comment" rows="4" placeholder="commentaire"></textarea>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn-secondary col-12 col-md-3 mb-1">Envoyer</button> <button type="reset" class="btn btn-secondary col-12 col-md-3 mb-1">Effacer</button>
							</div>
							<div class="col-12 text-center mt-4">
								<p class="col-12 text-center ">
								<a href="devis.php" class="text-link"><i class="fas fa-arrow-circle-left"></i> Autre devis</a>
								</p>
							</div>
							
						</form>
						
					</div>
				</div>

			<?php include('include/footer.php'); ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery-3.3.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

			<!--script src="assets/js/jquery.min.js"></script-->
			<script>jQuery.fn.load = function(callback){ $(window).on("load", callback) };</script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
				
				<?php
					if(isset($_GET['modele'])) {
						echo('$("#model").val("'.urldecode($_GET['modele']).'");');
					}
				?>
				
				//$("#modele").val("Art-Deco Bronze");
			
				$(function () {
				  $('[data-toggle="tooltip"]').tooltip();
				  $('#navButton > a').attr('href', 'devis.php');
				  $('#defaultpanel').hide();
				  $('a').attr('rel', 'external');
				})
			</script>
	</body>
</html>