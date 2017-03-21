<?php
/**
 * Default Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/hero' ); ?>

        <?php if( is_page( 'Artists' ) ) : ?>
            <?php get_template_part( 'template-parts/artists/index' ); ?>
        <?php else: ?>
            <div class="blog-container row">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
    <?php endwhile; endif; ?>

</div><!-- .content-wrap -->

<?php get_footer(); ?>
