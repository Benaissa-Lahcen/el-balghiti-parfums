<?php
/**
 * El Balghiti Parfums Theme Functions and Definitions
 */

if ( ! function_exists( 'el_balghiti_setup' ) ) :
    function el_balghiti_setup() {
        // Strict WooCommerce Theme Support
        add_theme_support( 'woocommerce' );

        // Theme Support for post thumbnails and document title tags
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
    }
endif;
add_action( 'after_setup_theme', 'el_balghiti_setup' );

/**
 * Enqueue scripts and styles
 */
function el_balghiti_scripts() {
    // Enqueue root stylesheet containing compiled Tailwind CSS
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'el_balghiti_scripts' );
