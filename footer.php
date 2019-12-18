<footer class="footer js-footer">
    <?php /* if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; */ ?>
    <div class="container">
        <div class="pre-footer">
            <div class="row align-items-center">
                <div class="col-12 col-lg-2">
                    <div class="logo">
                        <?php get_default_logo_link([
                            'name'    => 'logo-white.svg',
                            'options' => [
                                'class'  => 'logo-img',
                                'width'  => 130,
                                'height' => 39,
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="pre-footer__middle-section">
                        <?php echo do_shortcode('[bw-phone]'); ?>
                        <div class="pre-footer__item-wrapper">
                            <?php echo do_shortcode('[bw-social]'); ?>
                            <?php echo do_shortcode('[bw-messengers]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-2">
                    <div class="newsletter">
                        <p class="newsletter__title"><?php pll_e('Email') ?></p>
                        <?php
                        $email = get_theme_mod('bw_additional_email');
                        if (!empty($email)) { ?>
                            <a class="newsletter__link" href="mailto:<?php echo esc_attr($email); ?>">
                                <?php echo esc_html($email); ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom-section">
        <div class="container">
            <div class="copyright">
                <div class="date">&copy; <?php echo date('Y'); ?>. Все права защищены</div>
                <div class="developer">
                    <?php pll_e('text_developer'); ?><a href="https://brainworks.pro/" target="_blank">BrainWorks</a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div><!-- .wrapper end Do not delete! -->

<?php scroll_top(); ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
