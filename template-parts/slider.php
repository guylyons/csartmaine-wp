<?php
/**
 * Slider
 *
 */
?>
<style media="screen">
    .full-width {
        width: 100%;
        height: auto;
    }
</style>
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
           <section class="slider-item">
               <div class="half">
                   <img data-lazy="<?php echo $landing_slider_url; ?>" 
                        alt="<?php echo $landing_slider_hero["alt"]; ?>" class="full-width">
               </div>
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
