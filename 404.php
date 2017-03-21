<?php
/**
 * Default Page Template
 *
 */
get_header(); ?>

<div class="content-wrap page-404" role="main">
    <div class="container row">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/404nut.gif' ?>" alt="404 Donut">
        <h3>asdfg!</h3>
        <p>
            This page is no longer.
        </p>
        <p>
            So check out our <a href="/shop">Shop</a> for spectacular local art!
        </p>
    </div>

</div><!-- end content -->

<?php get_template_part( 'template-parts/recent-products' ); ?>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
