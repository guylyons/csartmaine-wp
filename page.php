<?php
/**
 * Default Page Template
 *
 */

 // This way we only use the narrow container on select pages.
 // of course there is a better way to do this. So come back and fix it!

get_header(); ?>

<div class="content-wrap page-content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'parts/hero' ); ?>

        <?php if( is_page( 'Artists' ) ) : ?>

            <?php get_template_part( 'parts/artist', 'index' ); ?>

        <?php else: ?>

            <div class="blog-container row">
                <article <?php post_class( 'group page-default' ); ?> role="article">
                    <?php the_content(); ?>
                </article>
            </div>

        <?php endif; ?>

    <?php endwhile; endif; ?>

</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
