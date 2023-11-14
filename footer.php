            <footer>
                <div class="flex-container no-wrap">
                    <div class="content--left">

                        <?php if ( $footer_logo = get_field('footer_logo', 'option') ) : ?>
                            <div class="footer__logo">
                                <a href="/">
                                    <img src="<?= $footer_logo['url']; ?>" alt="<?= $footer_logo['alt']; ?>" width="150" height="80">
                                </a>
                            </div>
                        <?php endif; ?>

                    </div>
                    <div class="content--right">

                        <?php if ( $footer_email = get_field('contact_email', 'option') ) : ?>
                            <h4>Contatti</h4>     
                            <span class="contact-email">
                                <img src="<?= get_template_directory_uri();?>/dist/assets/images/envelope-black.svg" alt="Mail" width="20" height="20">
                                <a href="mailto:<?= $footer_email; ?>"><?= $footer_email; ?></a>
                            </span>
                        <?php endif; ?>

                        <?php ct_display_footer_menu(); ?>
                    </div>
                </div>
            </footer>
        <?php wp_footer(); ?>
    </body>
</html>