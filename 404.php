<?php
/**
 * Default Page Template
 *
 */
get_header(); ?>

<div class="content-wrap page-404" role="main">
    <div class="container row">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/404nut.gif' ?>" alt="404 Donut">
        <h3>Darn!</h3>
        <p>
            We were unable to locate the page you were looking for 😭
        </p>
        <p>
            Perhaps you wanted some art?
            <a href="/shop" class="button">Shop</a>
        </p>
    </div>

</div><!-- end content -->

<?php get_template_part( 'template-parts/recent-products' ); ?>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
