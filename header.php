<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1" >
    <title><?= wp_title(); ?></title>    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="body">
        
    <header class="navbar">

        <div class="flex-container no-wrap">

            <div class="navbar__brand">
                <?php if ( function_exists( 'the_custom_logo' ) ) : 
                    the_custom_logo();
                endif; ?>
            </div>

            <?php if ( $nav_email = get_field('contact_email', 'option') ) : ?>

                <div class="navbar__contant">
                    <a href="mailto:<?= $nav_email; ?>" class="btn btn--contact">
                        <span><?= $nav_email; ?></span>
                        <img src="<?= get_template_directory_uri(); ?>/dist/assets/images/envelope-white.svg" alt="Mail" width="24" height="24">
                    </a>
                </div>

            <?php endif;?>
        </div>
    </header>