<?php
/**
 * Apply Page Template
 *
 */

get_header(); ?>

<div class="content-wrap page-content" role="main">

  <style>
   .img-responsive {
     width: 100%;
     height: auto;
     border: 10px solid #eee;
     border-radius: 5px;
   }
  </style>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'template-parts/hero' ); ?>
    <div class="container row">
      <div class="half">
        <img class="img-responsive" src="https://www.csartmaine.org/wp-content/uploads/2017/09/csartmaine-cta.jpg" alt="CSArt Maine Flyer"/>
      </div>
      <div class="half">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>

</div><!-- .content-wrap -->

<?php get_footer(); ?>
