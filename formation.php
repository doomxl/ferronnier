<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MS Poirier - La Saint Eloi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /><![endif]-->
		<link rel="apple-touch-icon" href="images/favicon.png">
		<!--[if lte IE 8]><script src="./assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="./assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
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
						<p>Formation rampiste</p>
					</header>
				</div>
				<?php include('include/nav.php'); ?>
			</div>

			<!-- Main -->
				<div class="wrapper style1">
					<div class="container formation">
						<header>
							<h1>Maîtriser le débillardage</h1>
							<p></p>
						</header>
						<section>
							<article>
								<p>
									Pour le compte de l’Institut de Formation et de Recherche pour les Artisanats des Métaux (IFRAM) Stephan Poirier anime chaque année 2 sessions pour acquérir les techniques de réalisation d'une rampe d'escalier. Ces stages sont destinés aux ferronniers ou aux métalliers. Ils se déroulent à l'atelier d'Ecquevilly.
								</p>
								<ul>
									<li>
										Stage d'initiation (3 jours en juin) réservé aux débutants dans le domaine de la rampe d'escalier: 
										Réplique de fers débillardés
										Débillardage sur escalier hélicoïdal pour gérer la continuité du fer.
									</li>
									<li>
										Stage de perfectionnement (3 jours en novembre) pour les ferronniers qui souhaitent débillarder plus sereinement:
										Anticipation d'un débillardage sur une voûte sarrasine
										calcul des rayons de cintrage
										débillardage d'une main courante en laiton
									</li>
								</ul>
							</article>
							<article>
								<header><a href="http://ifram.com" target="_blank" class="text-link">Inscription et Information</a></header>
								<section>
									<img src="images/formation/Logo-ifram.png" class="logo responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							<article>
								<section>
									<img src="images/formation/forma1.jpg" class="responsive-image" alt="Responsive image" style="max-width:70%;"/>
								</section>
							</article>
							<article>
								<section class="column-6-md-xs">
									<img src="images/formation/forma2.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section><!--attention ne separé pas les deux selections--><section class="column-6-md-xs">
									<img src="images/formation/forma3.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							<article>
								<section>
									<img src="images/formation/forma4.jpg" class="responsive-image" alt="Responsive image" style="max-width:50%;"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							<article>
								<section class="column-6-md-xs">
									<img src="images/formation/forma5.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section><!--attention ne separé pas les deux selections--><section class="column-6-md-xs">
									<img src="images/formation/forma6.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							
						</section>
						
					</div>
				</div>

			<?php include('include/footer.php'); ?>

		</div>
		<!-- Scripts -->
			<script src="assets/js/jquery-3.3.1.min.js"></script>
			<script src="assets/js/jquery.mobile-1.5.0-alpha.1.min.js"></script>
			<script>jQuery.fn.load = function(callback){ $(window).on("load", callback) };</script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script>
				$(function() {
					$( '#side-nav' ).html( $('#nav').navList() );
					$('a').attr('rel', 'external');	
				});
			</script>
	</body>
</html>