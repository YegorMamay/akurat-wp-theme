<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>
<div class="content">
    <?php get_template_part('loops/content', 'home'); ?>
    <?php
    $attachment_elem_id = get_post_meta(get_the_ID(), 'first_screen_image', true);
    $attachment_image = wp_get_attachment_url($attachment_elem_id);
    ?>
    <section class="top-section" style="background: url('<?php echo $attachment_image; ?>') no-repeat center / cover">
        <div class="container">
            <div class="top-section__description">
                <h1 class="top-section__title h1" id="dynamic-text"><?php echo get_post_meta(get_the_ID(), 'first_screen_title', true); ?></h1>
                <div class="top-section__text"><?php echo get_post_meta(get_the_ID(), 'first_screen_description', true); ?></div>
                <a href="#about" type="button" class="btn btn-primary top-section__button"><?php pll_e('button_info'); ?></a>
            </div>
            <script>
                if(document.querySelectorAll('#dynamic-text .text-render').length > 0) {
                    var typed = new Typed('#dynamic-text .text-render', {
                        strings: ['<?php echo get_post_meta(get_the_ID(), 'dynamic_text_1', true); ?>',
                            '<?php echo get_post_meta(get_the_ID(), 'dynamic_text_2', true); ?>',
                            '<?php echo get_post_meta(get_the_ID(), 'dynamic_text_3', true); ?>'],
                        typeSpeed: 50,
                        backSpeed: 50,
                        startDelay: 2000,
                        backDelay: 5000,
                        fadeOut: true,
                        loop: true,
                        cursorChar: '',
                    });
                }
            </script>
        </div>
    </section>
    <section class="block-about" id="about">
        <div class="container">
            <h2 class="main-title h2"><?php echo get_post_meta(get_the_ID(), 'about_title', true); ?></h2>
            <div class="block-about__wrapper">
                <?php
                global $post;
                $args = array(
                    'post_type'=> 'about',
                    'publish' => true,
                    'posts_per_page' => 20
                );
                $about_item = get_posts($args);
                foreach ($about_item as $post) {
                    ?>
                    <div class="block-about__item">
                        <div class="block-about__container">
                            <p class="block-about__title"><?php the_title(); ?></p>
                            <div class="block-about__description"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                    <?php
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <section class="tab-wrapper" id="service">
        <div class="container">
            <h2 class="main-title main-title--centered h2"><?php echo get_post_meta(get_the_ID(), 'service_title', true); ?></h2>
            <div class="tabs">
                <?php
                $count_tabs = 1;
                $count_tab_content = 1;
                $tabs = get_field('tabs');
                ?>
                <div class="tabs__group">
                <?php
                foreach ($tabs as $content) {
                    ?>
                    <div class="tabs__item<?php echo $count_tabs == 1 ? ' active': '' ?>" data-tab="tab<?php echo $count_tabs; ?>"><?php echo $content['new_tab']; ?></div>
                    <?php
                    $count_tabs++;
                } ?>
                </div>
                <?php
                wp_reset_postdata();
                foreach ($tabs as $content) {
                    ?>
                    <div class="tabs__mobile-item<?php echo $count_tab_content == 1 ? ' active': '' ?>"><?php echo $content['new_tab']; ?></div>
                    <div class="tabs__content<?php echo $count_tab_content == 1 ? ' active': '' ?>" id="tab<?php echo $count_tab_content; ?>">
                        <div class="tabs__wrapper">
                        <?php foreach ($content['tab_content'] as $value) {
                            ?>
                            <div class="item">
                                <div class="item__wrapper">
                                    <img class="item__image" src="<?php echo $value['tab_item_image']['url']; ?>">
                                    <div class="item__title"><?php echo $value['tab_item_info']['tab_item_title']; ?></div>
                                    <div class="item__description"><?php echo $value['tab_item_info']['tab_item_description']; ?></div>
                                    <div class="item__price"><?php echo $value['tab_item_info']['tab_item_price']; ?></div>
                                </div>
                            </div>
                            <?php
                        } ?>
                        </div>
                    </div>
                <?php
                $count_tab_content++;
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <?php $special_1 = get_field('special_1'); ?>
    <section class="block-special" style="background: url('<?php echo $special_1['special_image_1']; ?>') no-repeat center/cover">
        <div class="container">
        <div class="block-special__wrapper">
            <div class="block-special__caption">
                <div class="block-special__title">
                    <?php echo $special_1['special_text_1']; ?>
                </div>
                <button type="button" class="btn btn-primary block-special__button js-order-1"><?php pll_e('button_text_order'); ?></button>
            </div>
        </div>
        </div>
    </section>
    <section class="benefits-section" id="benefits">
        <div class="container">
            <div class="benefits-section__wrapper">
                <div class="benefits-section__title-wrapper">
                    <h2 class="main-title h2"><?php echo get_post_meta(get_the_ID(), 'benefits_title', true); ?></h2>
                </div>
                <?php
                global $post;
                $args = array(
                    'post_type'=> 'benefits',
                    'publish' => true,
                    'posts_per_page' => 20
                );
                $benefits_item = get_posts($args);
                foreach ($benefits_item as $post) {
                    ?>
                    <div class="benefits-section__item">
                        <div class="benefits-section__container">
                            <?php $post_thumbnail_id = get_post_thumbnail_id( $post ); ?>
                            <img class="benefits-section__image" src="<?php echo wp_get_attachment_image_url( $post_thumbnail_id ); ?>" alt="icon">
                            <div class="benefits-section__description"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                    <?php
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <?php $special_2 = get_field('special_2'); ?>
    <section class="block-special" style="background: url('<?php echo $special_2['special_image_2']; ?>') no-repeat center/cover">
        <div class="container">
            <div class="block-special__wrapper">
                <div class="block-special__caption">
                    <div class="block-special__title">
                        <?php echo $special_2['special_text_2']; ?>
                    </div>
                    <button type="button" class="btn btn-primary block-special__button js-order-2"><?php pll_e('button_text_order'); ?></button>
                </div>
            </div>
        </div>
    </section>
    <?php
    $order_block = get_post_meta(get_the_ID(), 'order_image', true);
    $order_block_image = wp_get_attachment_url($order_block);
    ?>
    <section class="order-section" id="order" style="background: url('<?php echo $order_block_image; ?>') no-repeat center/cover">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 col-xl-5">
                    <div class="order-section__title"><?php echo get_post_meta(get_the_ID(), 'order_title', true) ?></div>
                    <div class="order-section__sub-title"><?php echo get_post_meta(get_the_ID(), 'order_sub_title', true) ?></div>
                </div>
                <div class="col-12 col-lg-7 col-xl-7">
                    <div class="order-section__description">
                        <?php echo get_post_meta(get_the_ID(), 'order_title_right_column', true) ?>
                    </div>
                    <div class="block-calendar">
                        <?php echo do_shortcode('[booked-calendar]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bottom-section">
        <div class="container">
            <h2 class="main-title main-title--centered h2"><?php echo get_post_meta(get_the_ID(), 'how_we_work_title', true); ?></h2>
            <div class="bottom-section__wrapper">
                <?php
                global $post;
                $args = array(
                    'post_type'=> 'how_we_work',
                    'publish' => true,
                    'posts_per_page' => 6
                );

                $work_steps = get_posts($args);
                foreach ($work_steps as $post) {
                    ?>
                    <div class="bottom-section__item">
                        <div class="bottom-section__container">
                            <?php $post_thumbnail_id = get_post_thumbnail_id( $post ); ?>
                            <img class="bottom-section__icon" src="<?php echo wp_get_attachment_image_url( $post_thumbnail_id ); ?>" alt="icon">
                            <div class="bottom-section__description"><?php the_excerpt(); ?></div>
                            <div class="bottom-section__count"><?php the_title(); ?></div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <?php $special_3 = get_field('special_3'); ?>
    <section class="block-special" style="background: url('<?php echo $special_3['special_image_3']; ?>') no-repeat center/cover">
        <div class="container">
            <div class="block-special__wrapper">
                <div class="block-special__caption">
                    <div class="block-special__title">
                        <?php echo $special_3['special_text_3']; ?>
                    </div>
                    <button type="button" class="btn btn-primary block-special__button js-order-3"><?php pll_e('button_text_order'); ?></button>
                </div>
            </div>
        </div>
    </section>
    <section class="block-reviews" id="reviews">
        <div class="container">
            <h2 class="main-title main-title--centered h2"><?php echo get_post_meta(get_the_ID(), 'reviews_title', true); ?></h2>
            <?php echo do_shortcode('[bw-reviews]'); ?>
            <div class="reviews-button">
                <button type="button" class="btn btn-primary js-post-review">
                    <?php pll_e('button_review_text'); ?>
                </button>
                <a href="<?php echo get_post_type_archive_link('reviews'); ?>" class="btn btn-secondary reviews-button__link">
                    <?php pll_e('text_all_reviews'); ?>
                </a>
            </div>
        </div>
    </section>
    <section class="block-news" id="news">
        <div class="container">
            <div class="blog-section">
                <h2 class="main-title h2"><?php echo get_post_meta(get_the_ID(), 'news_title', true); ?></h2>
                <?php $page_id = 52; ?>
                <a href="<?php echo get_permalink(pll_get_post($page_id)); ?>" class="btn btn-secondary blog-section__button"><?php pll_e('articles_button_text'); ?></a>
            </div>
            <?php echo do_shortcode('[bw-advert count=3 class=front-news]'); ?>
        </div>
    </section>
</div><!-- /.container -->
<?php get_footer(); ?>
