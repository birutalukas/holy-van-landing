<?php
$intro_head = get_field('intro_heading'); 
$intro_description = get_field('intro_description');
?>

<?php if ( $intro_head || $intro_description) : ?>

    <section class="flex-container intro__wrapper" id="intro">
        <div class="content--left">
        
            <?php if ( $intro_head ) : ?>

                <h2><?= $intro_head; ?></h2>

            <?php endif; ?>

            <?php if ( $graph = get_field('intro_graphic') ) : ?>

                <img src="<?= $graph['url']; ?>" alt="<?= $graph['alt'] ?>" width="290" height="140">

            <?php endif; ?>
        </div>
        <div class="content--right">
            <?= $intro_description; ?>
        </div>
    </section>

<?php endif; ?>