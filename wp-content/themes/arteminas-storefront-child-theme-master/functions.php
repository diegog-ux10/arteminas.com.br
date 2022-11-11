<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Scripts e estilos para o tema
 */
 function artm_theme_scripts() {

    //Jquery
    wp_register_script('jquery', "https://code.jquery.com/jquery-3.6.1.min.js", array(), '3.6.1');

    // Google Font

    wp_register_style( 'google-font', "https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap");
    
    //Bootstrap css
    wp_register_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css", array() , '5.2.2', 'all');

    // Swiper css
    wp_register_style('swiper', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css", array(), '8.4.4', 'all');

    // Tema principal css
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array('bootstrap', 'google-font', 'swiper'), '1.0.0', 'all');

    // Swiper JS
    wp_enqueue_script('swiper', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js", array('jquery'), '8.4.4');
    // Bootstrap js
    wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js", array('jquery'), '5.0.0');

    wp_enqueue_script('js-mask', get_stylesheet_directory_uri() . '/assets/vendor/jquery/jquery.mask.min.js', array('jquery') , '1.0', true );
	wp_enqueue_script('js-forms', get_stylesheet_directory_uri() . '/assets/js/forms.min.js', array('jquery'), wp_get_theme()->get( 'Version'));
    
    // Custom js
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '1.0.0');
    wp_enqueue_script('slider-home', get_stylesheet_directory_uri() . '/assets/js/slider-home.min.js', array('jquery', 'swiper'), '1.0.0');
 }

 add_action('wp_enqueue_scripts', 'artm_theme_scripts', 9999);

 /**
 * Registrando o nav walker
 */
function register_navwalker(){
	require_once 'class-wp-bootstrap-navwalker.php';    
}

add_action( 'after_setup_theme', 'register_navwalker' );

function prefix_modify_nav_menu_args( $args ) {
    return array_merge( $args, array(
        'walker' => new WP_Bootstrap_Navwalker(),
    ) );
}

add_filter( 'wp_nav_menu_args', 'prefix_modify_nav_menu_args' );