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
						<p>La Saint Eloi chez MS Poirier</p>
					</header>
				</div>
				<?php include('include/nav.php'); ?>
			</div>

			<!-- Main -->
				<div class="wrapper style1">
					<div class="container saint-eloi">
						<header>
							<h1></h1>
							<p>A l’occasion de la Saint Eloi, patron des orfevres et des forgerons, MS Poirier ouvre les portes de son atelier.</p>
						</header>
						<section>
							<article>
								<p>
									Vous avez toujours rêvé de voir un maître ferronnier forger devant vous, ou mieux vous aimeriez taper de toutes vos forces sur un fer rougi!<br/>
									Vous souhaitez nous connaitre, visiter notre atelier, notre showroom.<br/>
									Venez passer un moment agréable en compagnie de clients charmants, d’architectes brillants et d’artistes délirants…
								</p>
							</article>
							
							<article>
								<section>
									<img src="images/steloi/eloi01.jpg" class="responsive-image" alt="Responsive image"/>
								</section>
							</article>
							<article>
								<section>
									<img src="images/steloi/eloi02.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							<article>
								<section class="column-6-md-xs">
									<img src="images/steloi/eloi03.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section><!--attention ne separé pas les deux selections--><section class="column-6-md-xs">
									<img src="images/steloi/eloi04.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							<article>
								<section>
									<img src="images/steloi/eloi05.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							<article>
								<section>
									<img src="images/steloi/eloi06.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							<article>
								<section class="column-6-md-xs">
									<img src="images/steloi/eloi07.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section><!--attention ne separé pas les deux selections--><section class="column-6-md-xs">
									<img src="images/steloi/eloi08.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							<article>
								<section class="column-6-md-xs">
									<img src="images/steloi/eloi09.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section><!--attention ne separé pas les deux selections--><section class="column-6-md-xs">
									<img src="images/steloi/eloi10.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							<article>
								<section>
									<img src="images/steloi/eloi11.jpg" class="responsive-image" alt="Responsive image"><!-- IMAGES SIZE LARGEUR 1400px-->
								</section>
							</article>
							<footer>
								<p>
									Félicitation à ceux qui ont tenté leurs premiers coups de marteau à cette occasion, notamment <strong>Serge TIAR</strong>, plus à l'aise dans élaboration de nos supports de communication (Rouge Cactus), et <strong>Karl OLIVE</strong>, Maire de Poissy.
								</p>
							</footer>
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