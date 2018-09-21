
	<?php include('include/header.php'); ?>

			<!-- Main -->
				<div class="wrapper style1">
					<div class="container ouvrage porte">
						<article id="main" class="special">
							<header class="galerie"><p>Porte d'entrée moderne</p></header>
							<article>
								<section class="column-12s5-md-xs">
									<a href="rampe01.php"><img src="images/porte/porte_losange.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-12s5-md-xs">
									<a href="#"><img src="images/porte/porte_art_deco.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-12s5-md-xs">
									<a href="#"><img src="images/porte/porte_AN.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-12s5-md-xs">
									<a href="#"><img src="images/porte/porte_neoclassique.jpg" class="responsive-image" alt="Responsive image"></a>
								</section>
							</article>
							
							<header class="galerie"><p>Porte d'entrée en fer forgé traditionnelle</p></header>
							<article>
								<section class="column-12s5-md-xs">
									<a href=""><img src="images/porte/porte_L16.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-12s5-md-xs">
									<a href="#"><img src="images/porte/porte_MA.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-12s5-md-xs">
									<a href="#"><img src="images/porte/porte_fer_Sully.png" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-12s5-md-xs">
									<a href="#"><img src="images/porte/porte_L15.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-12s5-md-xs">
									<a href="#"><img src="images/porte/porte_SG.jpg" class="responsive-image" alt="Responsive image"></a>
								</section>
							</article>
							<header class="galerie"><p>Portail et Grille de Parc</p></header>
							<article>
								<section class="column-12s5-md-xs">
									<a href="#"><img src="images/porte/portail_romantique.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-12s5-md-xs">
									<a href="#"><img src="images/porte/portail_parc.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-12s5-md-xs">
									<a href="#"><img src="images/porte/portail_grille_fer_forge.jpg" class="responsive-image" alt="Responsive image"></a>
								</section>
							</article>	
						</article>
					</div>
				</div>

			<?php include('include/footer.php'); ?>

		</div>

		<!-- Scripts -->
				<script src="assets/js/jquery-3.3.1.min.js"></script>
				<script src="assets/js/jquery.mobile-1.5.0-alpha.1.min.js"></script>
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