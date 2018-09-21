<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>MS Poirier - Média</title>
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
						<p>Les médias parlent de MS Poirier</p>
					</header>
				</div>
				<?php include('include/nav.php'); ?>
			</div>

			<!-- Main -->
				<div class="wrapper style3">
					<div class="container medias">
						<header>
							<h1></h1>
							<p></p>
						</header>
						<section>
							<article>								
								<section class="column-4-md-xs">
									<a href="#"><img src="images/media/fevres50.jpg" class="responsive-image" alt="Responsive image"></a><!-- IMAGES SIZE LARGEUR 1400px-->
								</section><section class="column-4-md-xs">
									<a href="#"><img src="images/media/lma_couv.png" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-4-md-xs">
									<a href="#"><img src="images/media/MT2017couv.jpg" class="responsive-image" alt="Responsive image"></a>
								</section>
							</article>
							
							<article>
								<section class="column-4-md-xs">
									<a href="#"><img src="images/media/Y1.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-4-md-xs">
									<a href="#"><img src="images/media/le_parisien.png" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-4-md-xs">
									<a href="#"><img src="images/media/logo_france3.png" class="responsive-image" alt="Responsive image"></a>
								</section>
							</article>
							
							<article>
								<section class="column-3-md-xs">
									<a href="#"><img src="images/media/TN_couv.png" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/media/mtpcouv23.png" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/media/elledeco.png" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/media/Fevres.jpg" class="responsive-image" alt="Responsive image"></a>
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