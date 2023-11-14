<?php if ( have_rows('gallery') ) : ?>

    <section class="gallery__wrapper" id="gallery">

        <div class="gallery__overlay"></div>
        
        <div class="gallery--left slide-left">

            <?php if ( $gal_title = get_field('gallery_title') ) : ?>
                <h2><?= $gal_title; ?></h2>
            <?php endif;?>

            <?php the_field('gallery_description'); ?>

            <?php if ( $gal_cta = get_field('gallery_cta') ) : ?>
                <a href="<?= $gal_cta['url']; ?>" target="<?= $gal_cta['target']; ?>" class="btn btn--primary">
                    <?= $gal_cta['title']; ?>
                </a>
            <?php endif;?>

        </div>
        
        <div class="gallery--right">
            <div class="gallery__slider">

                <?php while ( have_rows('gallery') ) : the_row(); ?>

                    <?php $title = get_sub_field('gallery_item_title'); ?>
                    <?php $img = get_sub_field('gallery_item_image'); ?>

                    <?php if ( $img ) : ?>

                        <div class="gallery__item" style="background-image: url(<?= $img['url']; ?>) ">
                            <?php if ( $title ) : ?>
                                <span class="gallery__item-title"><?= $title; ?></span>
                            <?php endif; ?>
                        </div>
                    
                    <?php endif;?>


                <?php endwhile; ?>

            </div>
        </div>

    </section>
<?php endif; ?>