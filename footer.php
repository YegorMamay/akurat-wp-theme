<footer class="footer js-footer" id="contacts">
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
                <div class="date"><span class="date__symbol">&copy;</span><?php echo date('Y'); ?>. Всі права захищені</div>
                <div class="developer">
                    <?php pll_e('text_developer'); ?><a href="https://brainworks.pro/" target="_blank">BrainWorks</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- .wrapper end Do not delete! -->

<?php scroll_top(); ?>

<div class="is-hide">
    <svg width="0" height="0" class="hidden">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.068 60.112" id="arrow-left">
            <path fill="none" stroke="#fff" stroke-width="3" stroke-miterlimit="10" d="M25.874.909L3.68 30.056l22.194 29.147"></path>
            <path opacity=".5" fill="none" stroke-width="3" stroke-miterlimit="10" d="M24.08.909L1.885 30.056 24.08 59.203"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.068 60.111" id="arrow-right">
            <path fill="none" stroke="#fff" stroke-width="3" stroke-miterlimit="10" d="M1.193 59.203l22.194-29.147L1.193.909"></path>
            <path opacity=".5" fill="none" stroke-width="3" stroke-miterlimit="10" d="M2.987 59.203l22.195-29.147L2.987.909"></path>
        </symbol>
    </svg>
    <?php svg_sprite(); ?>
</div>

<?php wp_footer(); ?>
<script type="text/javascript">
    var viberLink = $('.messenger-viber').attr('href');
    if($(window).width() < 1024) {
        var resultLink = viberLink.replace('chat?', 'add?');
        $('.messenger-viber').attr('href', resultLink);
    }
</script>
</body>
</html>
