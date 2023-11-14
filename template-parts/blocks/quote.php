<?php $bg_image = get_field('background_image'); ?>
<section class="quote" id="quote" style="background: linear-gradient(#000000, #00000000), url( <?= $bg_image['url']; ?> ); background-size: cover;">
    <div class="container">
        <div class="quote__content slide-down">
                <?php the_field('quote_content'); ?>
            
            
        </div>
        <?php if ( $q_author = get_field('quote_author') ) : ?>

            <span class="quote__author slide-up"><?= $q_author; ?></span>

        <?php endif; ?>
    </div>
</section>