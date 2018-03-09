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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aliquam quisquam, reiciendis officiis dolorem architecto ab minus odit. Quaerat dolorum, consequatur inventore est minima culpa rerum accusamus reiciendis perferendis iste!</p>
            </div>
            <div class="item">
                <h2>Grid Item</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aliquam quisquam, reiciendis officiis dolorem architecto ab minus odit. Quaerat dolorum, consequatur inventore est minima culpa rerum accusamus reiciendis perferendis iste!</p>
            </div>
            <div class="item">
                <h2>Grid Item</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aliquam quisquam, reiciendis officiis dolorem architecto ab minus odit. Quaerat dolorum, consequatur inventore est minima culpa rerum accusamus reiciendis perferendis iste!</p>
            </div>
             <div class="item">
                <h2>Grid Item</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aliquam quisquam, reiciendis officiis dolorem architecto ab minus odit. Quaerat dolorum, consequatur inventore est minima culpa rerum accusamus reiciendis perferendis iste!</p>
            </div>
            <div class="item">
                <h2>Grid Item</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aliquam quisquam, reiciendis officiis dolorem architecto ab minus odit. Quaerat dolorum, consequatur inventore est minima culpa rerum accusamus reiciendis perferendis iste!</p>
            </div>
            <div class="item">
                <h2>Grid Item</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aliquam quisquam, reiciendis officiis dolorem architecto ab minus odit. Quaerat dolorum, consequatur inventore est minima culpa rerum accusamus reiciendis perferendis iste!</p>
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
