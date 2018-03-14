<?php
/**
 * Artists Archive Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content" role="main">

    <?php get_template_part('template-parts/hero'); ?>

    <div class="container">
        <?php get_template_part('template-parts/artists/index'); ?>
        <?php get_template_part('template-parts/cta-apply'); ?>
    </div>

</div><!-- .content-wrap -->

<?php get_footer(); ?>
