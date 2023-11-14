<?php

function ct_add_theme_support() {
    add_theme_support( 
        'custom-logo', array(
            'height' => 200,
            'width' => 600,
            'flex-height' => true,
            'flex-width' => true
        ),
    );
    add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 300,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 4,
            'min_rows'        => 1,
            'max_rows'        => 6,
            'default_columns' => 3,
            'min_columns'     => 2,
            'max_columns'     => 3,
        ),
    ) );
    // add_theme_support( 'wc-product-gallery-zoom' );
    // add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

}
add_action( 'after_setup_theme', 'ct_add_theme_support' );