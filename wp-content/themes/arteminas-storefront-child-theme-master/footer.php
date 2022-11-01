<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer>
		<div class="full-container footer-container">
			<div class="content-container-l footer">
				<div class="top-footer">
					<div class="top-footer_column">
						<h5 class="top-footer-column_title text-m-white">Visite Nossa Loja</h5>
						<address class="text-s-white">R. São Paulo 148 - Centro Barracão - <abbr title="Paraná">PR</abbr></address>
					</div>
					<div class="top-footer_column">
						<h5 class="top-footer-column_title text-m-white">Arte Minas Queijos</h5>
						<nav>
							<ul>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
								<li></li>
							</ul>
						</nav>
					</div>
					<div class="top-footer_column">
						<h5 class="top-footer-column_title text-m-white">Entre Em Contato</h5>
						<span><i><img src="" alt=""></i></span>
						<span><i><img src="" alt=""></i></span>
						<span><i><img src="" alt=""></i></span>
						<span><i><img src="" alt=""></i></span>
					</div>
					<div class="top-footer_column">
						<h5 class="top-footer-column_title text-m-white">Acompanhe Nossas Redes</h5>
						<a href=""><img src="" alt=""></a>
						<a href=""><img src="" alt=""></a>
						<a href=""><img src="" alt=""></a>
						<a href=""><img src="" alt=""></a>
					</div>
				</div>
				<div class="bottom-footer">
					<h5 class="top-footer-column_title text-m-white"></h5>
				</div>
			</div>
		</div>
	</footer>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
