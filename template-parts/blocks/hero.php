<?php if ( have_rows('hero_slide_images') ) : ?>

    <section class="hero" id="hero">
        <div class="hero__slider">

            <?php while ( have_rows('hero_slide_images') ) : the_row(); ?>

                <?php if ( $image = get_sub_field('image') ) : ?>

                    <div class="hero__slide" style="background:linear-gradient(#000000, #00000000), url(<?= $image['url']; ?>); background-size: cover;">
                        <div class="container hero__slide-content">
                            
                            <?php if ( $intro = get_sub_field('introduction') ) : ?>
                                <span><?= $intro; ?></span>
                            <?php endif; ?>

                            <?php if ( $title = get_sub_field('title') ) : ?>
                                <h1><?= $title; ?></h1>
                            <?php endif; ?>

                            <?php the_sub_field('description'); ?>
                        </div>
                    </div>

                <?php endif;?>

            <?php endwhile; ?>

        </div>

        <?php if ( $scroll_to = get_field('scroll_to_content') ) : ?>
            <a href="<?= $scroll_to; ?>" class="btn--scroll-bottom">Scopri di più <img src="<?= get_template_directory_uri(); ?>/dist/assets/images/arrow-narrow-down.svg" alt=""></a>
        <?php endif; ?>

    </section>

<?php endif; ?>
