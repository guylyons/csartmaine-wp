<?php
/**
* About Page Template
*
*/
get_header(); ?>

<div class="content-wrap page-content" role="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/hero'); ?>

        <?php if (have_rows('team')) : ?>
            <section class="team row">
                <?php while (have_rows('team')): the_row(); ?>
                    <?php $image = get_sub_field('profile_picture'); ?>
                    <div class="team__member third">
                        <img class="profile-picture" src="<?php echo $image['url']; ?>" alt="<?php echo get_sub_field('team_name'); ?>" />
                        <div class="team__member-content">
                            <h3><?php echo get_sub_field('team_name'); ?></h3>
                            <!-- <?php echo get_sub_field('team_content'); ?> -->
                        </div>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>

        <!-- <?php the_content(); ?> -->
    </div>

    <?php endwhile; endif; ?>

</div><!-- end content -->



<?php get_footer(); ?>
