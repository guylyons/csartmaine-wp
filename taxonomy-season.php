<?php
/**
* Default Archives Template
*
*/
get_header(); ?>

<div class="content-wrap taxonomy-content" role="main">

    <header>
        <h1>Season: <?php single_cat_title(); ?></h1>
    </header>

    <section class="artist-index-wrap">
        <div class="container">
            <div class="row">
                <?php get_template_part( 'template-parts/artists/season-select' ); ?>
                <div class="artist-index">
                    <?php while( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/artists/content' ); ?>

                    <?php endwhile; ?>

                </div>
            </div>
        </section>

    </div><!-- end content -->

    <?php // get_sidebar(); ?>

    <?php get_footer(); ?>
