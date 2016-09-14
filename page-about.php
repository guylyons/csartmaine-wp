<?php
/**
* About Page Template
*
*/
get_header(); ?>

<div class="content-wrap page-content" role="main">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'parts/hero' ); ?>

        <div class="container row">
            <article <?php post_class( 'group page-default' ); ?> role="article">
                <?php the_content(); ?>
            </article>

            <?php if( have_rows( 'team' )): ?>
                <section class="team">
                    <div class="row container">
                        <h1 class="team--headline">The Team</h1>
                    </div>
                    <div class="row container">
                        <?php while( have_rows( 'team' )): the_row(); ?>
                            <?php $image = get_sub_field( 'profile_picture' ); ?>
                            <div class="team__member">
                                <img class="profile-picture" src="<?php echo $image['sizes']['product_thumb']; ?>" alt="<?php echo get_sub_field( 'team_name' ); ?>" />
                                <h3><?php echo get_sub_field( 'team_name' ); ?></h3>
                                <?php echo get_sub_field( 'team_content' ); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </section>
            <?php endif; ?>

        </div>

    <?php endwhile; endif; ?>

</div><!-- end content -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
