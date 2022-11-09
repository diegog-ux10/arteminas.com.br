<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

<div class="full-container banner-title">
	<div class="content-container-m">
		<?php the_title( '<h1 class="text-l-gold">', '</h1>' ); ?>
	</div>
</div>

<div class="full-container">
	<div class="content-container-m single-product-container">
		<div class="left-column">
			
			<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
				?>

            <div class="summary entry-summary">
				<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
				?>	

			</div>

			<?php
				/**
				 * Hook: woocommerce_after_single_product_summary.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action( 'woocommerce_after_single_product_summary' );
			?>
			
		</div>

		<div class="right-column">

			<div class="single-cart">
				<h3 class="text-l-black single-cart_title">Carrinno</h3>

				<?php 
					global $woocommerce;
					$items = $woocommerce->cart->get_cart(); 
					if($items): ?>
						<div class="single-cart_items"> 
						<?php
							foreach($items as $item => $values):
									$_product =  wc_get_product( $values['data']->get_id()); 
									echo "<b class='text-m-green'>".$_product->get_title().'</b>  <br> Quantity: '.$values['quantity'].'<br>'; 
									$price = get_post_meta($values['product_id'] , '_price', true);
									echo "  Price: R$ ".$price."<br>";							
							endforeach; ?>
						</div>

						<div class="single-cart_total">
							<h3 class="text-l-black single-cart_title">Total</h3>
				 			<span class="text-m-green">R$ <?php echo WC()->cart->cart_contents_total ?></span>
						</div>
						
						<?php else: ?>
							<p>Nenhum produto no carrinho</p>	 
					<?php endif; ?>				
			</div>

			<div class="single-categories">
				<h3 class="text-l-black single-categories_title">Categorias de Produtos</h3>
				<?php 
						$categories = new WP_Term_Query([
						'taxonomy' => 'product_cat', 'doces', 'queijos', 'charcutaria',
						'orderby' => 'name',
						'order' => 'ASC',
						'hide_empty' => false,
					]);
				?>

				<ul class="single-categories_list">
					<?php foreach($categories->terms as $category): ?>
						<li>
							<a href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?> <span>(<?php echo $category->count ?>)</span></a>
					<?php endforeach; ?>
				</ul>	
			</div>

			<div class="single-search">
				<?php get_product_search_form(); ?>	
			</div>	
				
		</div>

		
	</div>
</div>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
