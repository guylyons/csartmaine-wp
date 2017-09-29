<?php
$cat_id = get_field( 'primary_category' );
if ( $cat_id ) { $cat = get_category( $cat_id ); }
?>

<?php while( have_posts() ): the_post(); ?>
    <div class="blog-single">
        <?php get_template_part( 'template-parts/blog/hero' ); ?>
        <?php get_template_part( 'template-parts/blog/article' ); ?>
        <?php get_template_part( 'template-parts/blog/nav' ); ?>
    </div>
    <?php get_template_part( 'template-parts/newsletter-signup' ); ?>
<?php endwhile; ?>
