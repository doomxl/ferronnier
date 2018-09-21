<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MS Poirier - Rampe d'escalier & Garde-corps - Gaspard II de Coligny</title>
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
			<?php include('include/header_rampe.php'); ?>

			<!-- Main -->
				<div class="wrapper style1">
					<div class="container big-picture">
						<header>
							<p>Gaspard II de Coligny</p>
							<p>Un modèle classique et romantique</p>
						</header>
						<article>
							<header class="detail-description">
								
							</header>
							
							<section>
								<img srcset="   images/rampe/pic12a_1000w.jpg 1000w, 
												images/rampe/pic12a_600w.jpg 600w,
												images/rampe/pic12a_300w.jpg 300w" 
										sizes="	(max-width:390px) 300px, 
												(min-width:390px) and (max-width:736px) 600px,
												(max-width:1680px) 1000px" 
										src="images/rampe/Rampe-G2-757x1000a.jpg" alt="" style="max-width:60%; height:auto;"/>
							</section>
						</article>	
					
						<article>
							<header>
								
							</header>
							<section>
								<!--img src="images/rampe/pic02.jpg" class="" alt="Responsive image"-->
								<img srcset="   images/rampe/pic12b_1000w.jpg 1000w, 
												images/rampe/pic12b_600w.jpg 600w,
												images/rampe/pic12b_300w.jpg 300w" 
										sizes="	(max-width:390px) 300px, 
												(min-width:390px) and (max-width:736px) 600px,
												(max-width:1680px) 1000px" 
										src="images/rampe/Rampe-G2-1000x620b.jpg" alt="" style="max-width:80%; height:auto;"/>
								
							</section>
							<section>
								<footer>
									informations enregistrées (pouvant toutefois etre fausses) type de support: ordinateur de bureau<br/>
									Main courante fer<br/>
									Finition fer blanc ciré
								</footer>
							<section>
						</article>
						
						<article>
							<footer>
								<a href="rampe.php" class="button">Autre modèle</a>
								<a href="devis1.php?modele=<?php echo(urlencode("Gaspard II"));?>" class="button">Devis</a>
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