<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MS Poirier - Devis de porte d'entrée</title>
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
						<p>Devis de porte d'entrée en fer forgé</p>
					</header>
				</div>
				<?php include('include/nav.php'); ?>
			</div>

			<!-- Main -->
				<div class="wrapper style1 devis-wrapper">
					<div class="container devis-container">
						<header><p>Devis de porte d'entrée</p></header>
						
						<form method="post" action="traitement_devis2.php">
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<select class="form-control form-control-sm" id="model" name="model">
										<option value="Modele" selected>Choix du modèle</option>
										<option value="Antoinette">Antoinette</option>
										<option value="Art-Deco">Art Deco</option>          
										<option value="Art-Nouveau">Art Nouveau</option>
										<option value="Charles VIII">Charles VIII</option>
										<option value="Losange">Losange</option>
										<option value="Louis XV">Louis XV</option>
										<option value="Louis XVI">Louis XVI</option>
										<option value="Neoclassique">Neoclassique</option>
										<option value="Sully">Sully</option>
										<option value="Surrealiste">Surrealiste</option>
									</select>
								</div>
								<div class="col-12 col-md-6">
									<input type="text" class="form-control form-control-sm mb-3" id="dim1" name="dim1" placeholder="Hauteur (cm)">
								</div>
							</div>
							<div class="form-row">
								<div class="col-12 col-md-6 .d-none .d-sm-block">
									
								</div>
								<div class="col-12 col-md-6">
									<input type="text" class="form-control form-control-sm mb-3" id="dim2" name="dim2" placeholder="Largeur (cm)">
								</div>
							</div>
			
							<div class="form-row ml-1 mb-3">
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="poz" id="poz1" value="1">
								  <label class="form-check-label" for="poz1">Pose (départements: 75-78-91-92-93-94-95)</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="poz" id="poz2" value="0">
								  <label class="form-check-label" for="poz2">Sans pose (Départ atelier)</label>
								</div>
							</div>
			
							<div class="form-row ml-1 mb-3">
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="typ" id="typ1" value="10">
								  <label class="form-check-label" for="typ1">Porte 1 vantail</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="typ" id="typ2" value="14">
								  <label class="form-check-label" for="typ2">Porte 1/3 fixe - 2/3 ouvrant</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="typ" id="typ3" value="18">
								  <label class="form-check-label" for="typ3">Porte 2 vantaux</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="typ" id="typ4" value="25">
								  <label class="form-check-label" for="typ4">Porte 2 fixes - 1 ouvrant</label>
								</div>
							</div>
				
							<div class="form-row ml-1 mb-3">
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="lt" id="lt1" value="0">
								  <label class="form-check-label" for="lt1">Linteau droit</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="lt" id="lt2" value="1">
								  <label class="form-check-label" for="lt2">Linteau cintré</label>
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
								  <input class="form-check-input" type="radio" name="titr" id="inlineRadio1" value="Mme">
								  <label class="form-check-label" for="inlineRadio1">Madame</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="titr" id="inlineRadio2" value="M.">
								  <label class="form-check-label" for="inlineRadio2">Monsieur</label>
								</div>
								<div class="form-check form-check-inline form-control-sm">
								  <input class="form-check-input" type="radio" name="titr" id="inlineRadio3" value="Ste">
								  <label class="form-check-label" for="inlineRadio3">Société</label>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<input type="text" class="form-control form-control-sm" id="nom" name="nom" placeholder="Nom">
								</div>
								<div class="form-group col-12 col-md-6">
									<input type="text" class="form-control form-control-sm" id="rue" name="rue" placeholder="Adresse du chantier">
								</div>
							</div>
							
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<input type="text" class="form-control form-control-sm"  id="codpos" name="codpos" placeholder="Code postal">
								</div>
								<div class="form-group col-12 col-md-6">
									<input type="text" class="form-control form-control-sm"  id="ville" name="ville" placeholder="Ville">
								</div>
							</div>
							
							<div class="form-row">
								<div class="form-group col-12 col-md-6">
									<div class="input-group">
										<input type="text" class="form-control  form-control-sm" id="tel1" name="tel1" pattern="[0-9][1-9][0-9]{8}" size="10" placeholder="Téléphone">
										<div class="input-group-append">
											<span class="input-group-text"data-toggle="tooltip" data-html="true" data-placement="left" title="10 chiffres sans espace.<br/>  Inscrire dans le commentaire<br/> les numéros internationaux"><i class="fas fa-info-circle"></i></span>
										</div>
									</div>
								</div>
								<div class="form-group col-12 col-md-6">
									<div class="input-group">
										<input type="text" class="form-control  form-control-sm" id="tel2" name="tel2" pattern="[0-9][1-9][0-9]{8}" size="10" placeholder="2ème téléphone">
										<div class="input-group-append">
											<span class="input-group-text" data-toggle="tooltip" data-html="true" data-placement="left" title="10 chiffres sans espace.<br/> Inscrire dans le commentaire<br/> les numéros internationaux"><i class="fas fa-info-circle"></i></span>
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
	
			<script>jQuery.fn.load = function(callback){ $(window).on("load", callback) };</script><!-- patch for jquery 3.3.1 use --> 
			<script src="./assets/js/jquery.dropotron.min.js"></script>
			<script src="./assets/js/jquery.scrolly.min.js"></script>
			<script src="./assets/js/jquery.onvisible.min.js"></script>
			<script src="./assets/js/skel.min.js"></script>
			<script src="./assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="./assets/js/main.js"></script>
			
			<script>
				$(function () {
				  $('[data-toggle="tooltip"]').tooltip();
				  $('#navButton > a').attr('href', 'devis.php');
				  $('#defaultpanel').hide();
				  $('a').attr('rel', 'external');
				})
			</script>
	</body>
</html>