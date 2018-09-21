<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MS Poirier - Rampe d'escalier & Garde-corps - modèle Art Nouveau (selon MS Poirier)</title>
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
						<header><p class="detail-title">Modèle Art Nouveau (selon MS Poirier)</p></header>
						<article>
							<header class="detail-description">
								Ci-dessous Garde-corps en fer forgé dans un style Art Nouveau "retravaillé".<br/>
								Fers de section 16x8 amincis à la forge<br/>
								Main courante: fer<br/>
								Finition: fer oxydé ciré<br/>
								Lieu: Le Vésinet (78)<br/>
							</header>
							<section>
								<img srcset="images/rampe/pic01_900w.jpg 900w, 
												images/rampe/pic01_600w.jpg 600w,
												images/rampe/pic01_400w.jpg 400w,
												images/rampe/pic01_200w.jpg 200w" 
										sizes="	(max-width:390px) 200px, 
												(min-width:390px) and (max-width:736px) 400px,
												(min-width:736px) and (max-width:960px) 600px,
												(max-width:2000px) 900px" 
										src="images/rampe/pic01.jpg" alt="Test" style="max-width:80%; height:auto;"/>
							</section>
						</article>	
					
						<article>
							<header>
								Ci-dessous départ en fer forgé résolument moderne.<br/>
								Fer de section 20x12 aminci à la forge<br/>
								Main courante: fer<br/>
								Finition: fer blanc ciré<br/>
								Lieu: Soisy sous Montmorency (95)<br/>
							</header>
							<section>
								<!--img src="images/rampe/pic02.jpg" class="" alt="Responsive image"-->
								<img srcset="images/rampe/pic02_800w.jpg 800w, 
												images/rampe/pic02_600w.jpg 600w,
												images/rampe/pic02_400w.jpg 400w,
												images/rampe/pic02_200w.jpg 200w" 
										sizes="	(max-width:390px) 200px, 
												(min-width:390px) and (max-width:736px) 400px,
												(min-width:736px) and (max-width:960px) 600px,
												(max-width:2000px) 800px" 
										src="images/rampe/pic02.jpg" alt="Test" style="max-width:60%; height:auto;"/>
								
							</section>
						</article>
						
						<article>
							<footer>
								<a href="rampe.php" class="button">Autre modèle</a>
								<a href="devis1.php?modele=<?php echo(urlencode("Art-Nouveau"));?>" class="button">Devis</a>
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