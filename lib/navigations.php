<?php
if ( ! function_exists( 'ct_register_nav_menu' ) ) {
 
    function ct_register_nav_menu(){
        register_nav_menus( array(
            'footer_menu' => __( 'Footer Menu', 'ct' ),
        ) );
    }
    add_action( 'after_setup_theme', 'ct_register_nav_menu', 0 );
}

function ct_display_footer_menu() {
    wp_nav_menu( array(
        'theme_location' => 'footer_menu',
        'container' => 'nav'
    ) );
}
?>