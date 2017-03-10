<?php
/**
 * Single Blog Template
 *
 *
 * @since 1.0
 * @package WordPress
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php $hero_url = get_the_post_thumbnail_url( $post->ID ); ?>

        <section class="container">

            <?php if( is_page( 'Artists' ) ): ?>
                <?php if( $hero_url ): ?>
                    <header>
                        <div class="hero-image" style="background-image: url('<?php echo $hero_url; ?>');">
                            <!-- background-image: <?php echo $hero_image; ?> -->
                        </div>
                    </header>
                <?php endif; ?>
                <?php get_template_part( 'parts/page', 'artist' ); ?>
            <?php else: ?>
                <?php get_template_part( 'parts/blog/single' ); ?>
            <?php endif; ?>

            <?php get_template_part( 'parts/recent-products' ); ?>

        </section>
    </main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
