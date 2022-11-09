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
							<?php wp_nav_menu(array(
								'menu' => 'secondary',
								'container'            => '',
								'menu_class'           => 'menu-footer',
								'menu_id'              => 'menu-footer',
								'echo'                 => true,
								'fallback_cb'          => 'wp_page_menu',
								'before'               => '',
								'after'                => '',
								'link_before'          => '',
								'link_after'           => '',
								'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'item_spacing'         => 'preserve',
								'depth'                => 0,
								'walker'               => '',
								'theme_location'       => '',								
								)) 
								?>
						</nav>
					</div>
					<div class="top-footer_column">
						<h5 class="top-footer-column_title text-m-white">Entre Em Contato</h5>
						<span class="text-s-white"><i><img src="<?php echo get_stylesheet_directory_uri() . './assets/img/ws-footer-icon.png' ?>" alt="Whatsapp Icon" height="20" width="20"></i>(49) 93300-2012</span>
						<span class="text-s-white"><i><img src="<?php echo get_stylesheet_directory_uri() . './assets/img/phone-footer-icon.png' ?>" alt="Whatsapp Icon" height="20" width="20"></i>(49) 93300-2012</span>
						<span class="text-s-white"><i><img src="<?php echo get_stylesheet_directory_uri() . './assets/img/main-footer-icon.png' ?>" alt="Whatsapp Icon" height="20" width="20"></i> contato@arteminasqueijos.com.br</span>
						<span class="text-s-white"><i><img src="<?php echo get_stylesheet_directory_uri() . './assets/img/place-footer-icon.png' ?>" alt="Whatsapp Icon" height="20" width="20"></i> <address>R. São Paulo 148 - Centro Barracão</address></span>
					</div>
					<div class="top-footer_column">
						<h5 class="top-footer-column_title text-m-white">Acompanhe Nossas Redes</h5>
						<div class="social-media">
							<a href=""><img src="<?php echo get_stylesheet_directory_uri() . './assets/img/fb-footer-icon.png' ?>" alt="Whatsapp Icon" height="30" width="30"></a>
							<a href=""><img src="<?php echo get_stylesheet_directory_uri() . './assets/img/ins-footer-icon.png' ?>" alt="Whatsapp Icon" height="30" width="30"></a>
							<a href=""><img src="<?php echo get_stylesheet_directory_uri() . './assets/img/pin-footer-icon.png' ?>" alt="Whatsapp Icon" height="30" width="30"></a>
							<a href=""><img src="<?php echo get_stylesheet_directory_uri() . './assets/img/yt-footer-icon.png' ?>" alt="Whatsapp Icon" height="30" width="30"></a>
						</div>						
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
