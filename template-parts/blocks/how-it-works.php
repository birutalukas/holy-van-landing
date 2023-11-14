<?php $bullet_1_title = get_field('bullet_1_title'); ?>
<?php $bullet_2_title = get_field('bullet_2_title'); ?>
<?php $bullet_3_title = get_field('bullet_3_title'); ?>
<section class="how-it-works" id="how-it-works">
    <div class="container">
        
        <?php if ( $how_head = get_field('how_heading') ) : ?>
            <h2><?= $how_head; ?></h2>
        <?php endif; ?>

        <?php the_field('how_description') ?>

    </div>

    <?php if ( $bullet_1_title && $bullet_2_title && $bullet_3_title ) : ?>

        <div class="flex-container how-it-works__bulletpoints">

            <div class="bulletpoint"></div>
            <div class="connection"></div>
            <div class="bulletpoint"></div>
            <div class="connection"></div>
            <div class="bulletpoint"></div>

        </div>

        <div class="flex-container how-it-works__bullets">

            <div class="bullet bullet--narrow">
                <h3><?= $bullet_1_title; ?></h3>
                <?php the_field('bullet_1_description'); ?>
            </div>

            <div class="bullet bullet--wide">
                <h3><?= $bullet_2_title; ?></h3>
                <?php the_field('bullet_2_description'); ?>
            </div>

            <div class="bullet bullet--narrow bullet--last">
                <h3><?= $bullet_3_title; ?></h3>
                <?php the_field('bullet_3_description'); ?>
            </div>

            <?php if ( $cta = get_field('how_cta') ) : ?>
            
                <div class="how-it-works__cta">
                    <a href="<?= $cta['url']; ?>" target="<?= $cta['target']; ?>" class="btn btn--primary btn--center">
                        <?= $cta['title']; ?>
                    </a>
                </div>  
                
            <?php endif; ?>

        </div>
    

    <?php endif; ?>
</section>