<?php
/**
 * Artists Archive Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <?php get_template_part( 'template-parts/hero' ); ?>
        <?php get_template_part( 'template-parts/artists/index' ); ?>
        
        <?php endwhile; ?>
    <?php endif; ?>

</div><!-- .content-wrap -->

<?php get_footer(); ?>
