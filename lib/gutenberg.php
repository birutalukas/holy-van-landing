<?php

function ct_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Talkers Hero Slider'),
            'description'       => __('Section with full-screen image slider.'),
            'render_template'   => 'template-parts/blocks/hero.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
        ));
        acf_register_block_type(array(
            'name'              => 'intro-section',
            'title'             => __('Talkers Intro Section'),
            'description'       => __('Section with two columns, title with graphic on the left and content on the right.'),
            'render_template'   => 'template-parts/blocks/intro-section.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
        ));
        acf_register_block_type(array(
            'name'              => 'how-it-works',
            'title'             => __('Talkers How It Works Section'),
            'description'       => __('Section with How It Works step by step.'),
            'render_template'   => 'template-parts/blocks/how-it-works.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
        ));
        acf_register_block_type(array(
            'name'              => 'gallery',
            'title'             => __('Talkers Gallery Section'),
            'description'       => __('Section with Gallery Showcase.'),
            'render_template'   => 'template-parts/blocks/gallery.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
        ));
        acf_register_block_type(array(
            'name'              => 'quote',
            'title'             => __('Talkers Quote Section'),
            'description'       => __('Section with Backgrounded Quote.'),
            'render_template'   => 'template-parts/blocks/quote.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
        ));
        acf_register_block_type(array(
            'name'              => 'contact-forms',
            'title'             => __('Talkers Contact Section'),
            'description'       => __('Section with Contact Forms.'),
            'render_template'   => 'template-parts/blocks/contact.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
        ));
    }      
}
add_action('acf/init', 'ct_acf_init_block_types');
