<?php
/**
 * Front Page template
 *
 *
 * @package WordPress
 */

get_header();
?>

<main role="main" class="main">

    <section>
        <div class="grid">
            <div class="item">
                <h2>Grid Item</h2>
            </div>
            <div class="item">
                <h2>Grid Item</h2>
            </div>
            <div class="item">
                <h2>Grid Item</h2>
            </div>
             <div class="item">
                <h2>Grid Item</h2>
            </div>
            <div class="item">
                <h2>Grid Item</h2>
            </div>
            <div class="item">
                <h2>Grid Item</h2>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/slider' ); ?>

    <section class="introduction">
        <div class="introduction__content">
            <?php the_content(); ?>
        </div>
    </section>

    <?php get_template_part( 'template-parts/meet-the-artist' ); ?>
    <?php get_template_part( 'template-parts/recent-products' ); ?>
    <?php get_template_part( 'template-parts/newsletter-signup' ); ?>

</main>

<?php get_footer(); ?>
