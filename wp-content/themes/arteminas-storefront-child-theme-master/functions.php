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

    // Google Fonr

    wp_register_style( 'google-font', "https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap");
    //Bootstrap css
    wp_register_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css", array() , '5.2.2', 'all');

    //  Search button css
    wp_register_style('search', "https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css", array(), '2.0', 'all');

    // Tema principal css
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array('bootstrap', 'google-font'), '1.0.0', 'all');

    // Bootstrap js
    wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js", array('jquery'), '5.0.0');
    
    // Custom js
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '1.0.0');
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

