<?php

// Main Theme Assets
function ct_assets() {
    // Styles
    wp_enqueue_style( 'ct-slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', 'all');
    wp_enqueue_style( 'ct-fonts', '//api.fontshare.com/v2/css?f[]=clash-display@500,600&f[]=satoshi@900,700,500,400&display=swap', array('ct-slick-css'), '1.8.1', 'all');
    wp_enqueue_style( 'ct-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array('ct-fonts'), '1.0.0', 'all');

    // Scripts
    wp_enqueue_script( 'ct-slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script( 'ct-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('ct-slick'), '1.0.0', true);

    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );

    wp_dequeue_style( 'wc-blocks-style' );

}
add_action('wp_enqueue_scripts', 'ct_assets');


// Theme Admin Assets
function ct_admin_assets() {
    // Styles
    wp_enqueue_style( 'ct-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all');

    // Scripts
    wp_enqueue_script( 'ct-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0', true);
}
// Uncomment if admin assets needed!
// add_action('admin_enqueue_scripts', 'ct_admin_assets');


// function ct_gutenberg_css(){

// 	add_theme_support( 'editor-styles' ); // if you don't add this line, your stylesheet won't be added
// 	add_editor_style( get_template_directory_uri() . '/dist/assets/css/admin.css' ); 
// }
// add_action( 'after_setup_theme', 'ct_gutenberg_css' );
