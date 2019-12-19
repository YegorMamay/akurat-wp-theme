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
                <h1 class="top-section__title h1"><?php echo get_post_meta(get_the_ID(), 'first_screen_title', true); ?></h1>
                <div class="top-section__text"><?php echo get_post_meta(get_the_ID(), 'first_screen_description', true); ?></div>
                <a href="#" type="button" class="btn btn-primary top-section__button"><?php pll_e('button_info'); ?></a>
            </div>
        </div>
    </section>
    <section class="benefits">
        <div class="container">
            <h2 class="main-title h2"><?php echo get_post_meta(get_the_ID(), 'benefits_title', true); ?></h2>
            <div class="benefits__wrapper">
                <?php
                global $post;
                $args = array(
                    'post_type'=> 'about',
                    'publish' => true,
                    'posts_per_page' => 20
                );
                $benefits_item = get_posts($args);
                foreach ($benefits_item as $post) {
                    ?>
                    <div class="benefits__item">
                        <div class="benefits__container">
                            <p class="benefits__title"><?php the_title(); ?></p>
                            <div class="benefits__description"><?php the_excerpt(); ?></div>
                        </div>
                    </div>
                    <?php
                }

                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    <section class="block-news">
        <div class="container">
            <div class="blog-section">
                <h2 class="main-title h2"><?php echo get_post_meta(get_the_ID(), 'news_title', true); ?></h2>
                <?php $page_id = 54; ?>
                <a href="<?php echo get_page_link( $page_id ); ?>" class="btn btn-secondary blog-section__button"><?php pll_e('articles_button_text'); ?></a>
            </div>
            <?php echo do_shortcode('[bw-advert count=3 class=front-news]'); ?>
        </div>
    </section>
</div><!-- /.container -->
<?php get_footer(); ?>
