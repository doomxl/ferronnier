
	<?php include('include/header.php'); ?>

			<!-- Main -->
				<div class="wrapper style1">
					<div class="container ouvrage">
						<article id="main" class="special">
							<header class="galerie"><p>Nouveau, design</p></header>
							<article>
								<section class="column-3-md-xs">
									<a href="rampe01.php"><img src="images/rampe/Rampe-AN2-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-AN-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-bateau-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-surrealiste-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section>
							</article>
							
							<header class="galerie"><p>Classique, baroque</p></header>
							<article>
								<section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-C8-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-L16-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-F1-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-H3-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section>
								<section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-L14-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-H4-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-L15-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="rampe12.php"><img src="images/rampe/Rampe-G2-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section>
							</article>
							
							<header class="galerie"><p>Contemporain, décoratif</p></header>
							<article>
								<section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-AD3-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-direct-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-StBarth-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-gothique-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section>
								<section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-StLouis-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-soleil-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-ADb-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
								</section><section class="column-3-md-xs">
									<a href="#"><img src="images/rampe/Rampe-AD-220x220.jpg" class="responsive-image" alt="Responsive image"></a>
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