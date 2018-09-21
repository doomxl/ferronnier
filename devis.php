<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MS Poirier - Devis de marquise en fer forgée</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" type="image/png" href="images/favicon.png">
		<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /><![endif]-->
		<link rel="apple-touch-icon" href="images/favicon.png">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
		<!--[if lte IE 8]><script src="./assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="./assets/css/ie8.css" /><![endif]-->

	</head>
	<body class="no-sidebar>">
	
		<div id="page-wrapper">

			<!-- Header -->
			<div id="header">
				<!-- Inner -->
				<div class="inner all-inners">
					<header>
						<h1><a href="index.php" id="logo">MS Poirier</a></h1>
						<p>Devis</p>
					</header>
				</div>
				<?php include('include/nav.php'); ?>
			</div>

			<!-- Main -->
				<div class="wrapper style4">
					<div class="container devis-container">
						<section class="devis">
							<article>
								<header>Nos devis en moins de 48h</header>
								<p>
									<a href="devis1.php" rel="external">Devis de rampe & garde-corps en fer forgé</a><br/>
									<a href="devis2.php" rel="external">Devis de Porte d'entrée</a><br/>
									<a href="devis3.php" rel="external">Devis de marquise</a><br/>
								</p>
							</article>
							
							
							<article>
								<header>Les devis personalisés</header>
								<p>
									Merci de nous envoyer plans, dessins, descriptifs, dimensions...<br/>
									par mail: <a href="mailto:mspoirier@ferronnier.com">mspoirier@ferronnier.com</a>
								</p>
							</article>
						</section>
					</div>
				</div>

			<?php include('include/footer.php'); ?>

		

		<!-- Scripts -->
			
		
			<!-- Scripts -->
				<script src="assets/js/jquery-3.3.1.min.js"></script>
				<script src="./assets/js/jquery.mobile-1.5.0-alpha.1.min.js"></script>
				<script>jQuery.fn.load = function(callback){ $(window).on("load", callback) };</script><!-- patch for jquery 3.3.1 use --> 
				<script src="./assets/js/jquery.dropotron.min.js"></script>
				<script src="./assets/js/jquery.scrolly.min.js"></script>
				<script src="./assets/js/jquery.onvisible.min.js"></script>
				<script src="./assets/js/skel.min.js"></script>
				<script src="./assets/js/util.js"></script>
				<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
				<script src="./assets/js/main.js"></script>
				
				<script>
					$(function() {
						$( '#side-nav' ).html( $('#nav').navList() );
						$('a').attr('rel', 'external');
					});						
				</script>

				

	</body>
</html>