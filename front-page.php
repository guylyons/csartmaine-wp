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
    <section class="slider row section-1" id="front-page-slider">
       <?php $landing_slider = get_field( 'landing_slider' ); ?>
       <?php if( $landing_slider ): ?>
           <?php while( have_rows( 'landing_slider' )): the_row(); ?>
               <?php
               $landing_slider_hero    = get_sub_field( 'landing_slider_hero' );
               $landing_slider_url     = $landing_slider_hero['sizes']['hero'];
               $landing_slider_content = get_sub_field( 'landing_slider_content' );
               $landing_slider_link    = get_sub_field( 'landing_slider_link' );
               $slider_button_text     = get_sub_field( 'slider_button_text' );
               ?>
               <section class="slider-item full-height" style="background-image: url('<?php echo $landing_slider_url; ?>'); ?>')">
                   <section class="slider__opacity-layer">
                   </section>
                   <article class="slider-content half">
                       <?php echo $landing_slider_content; ?>
                       <?php if( $landing_slider_link ): ?>
                           <a href="<?php echo $landing_slider_link; ?>" class="button"><?php echo $slider_button_text; ?></a>
                       <?php endif ?>
                   </article>
               </section>
           <?php endwhile; ?>
       <?php endif; ?>
   </section>

    <section class="introduction">
        <div class="introduction__content">
            <?php the_content(); ?>
        </div>
    </section>

    <?php get_template_part( 'parts/meet-the-artist' ); ?>

    <?php get_template_part( 'parts/recent-products' ); ?>
    <?php get_template_part( 'parts/newsletter-signup' ); ?>

    </section><!-- end container -->
</main>

<?php get_footer(); ?>
