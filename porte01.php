<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MS Poirier - Porte & Portail  - Modèle losange</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="./assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="./assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="no-sidebar>">
		<div id="page-wrapper">

			<!-- Header -->
			<?php include('include/header_porte.php'); ?>

			<!-- Main -->
				<div class="wrapper style1">
					<div class="container big-picture">
						<header><p>Modèle losange</p></header>
						<article>
							<header>
								
							</header>
							<section>
								<img src="images/porte/pic01.jpg" class="img-fluid" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
							</section>
						</article>	
					
						<article>
							<footer>
								<a href="porte.php" class="button">Voir d'autres modèles</a>
								<a href="#" class="button">Demandez un devis</a>
							</footer>
						</article>
						
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