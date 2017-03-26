<?php
$cat_id = get_field( 'primary_category' );
if ( $cat_id ) { $cat = get_category( $cat_id ); }
?>

<?php while( have_posts() ): the_post(); ?>
    <div class="blog-single">
        <?php get_template_part( 'template-parts/blog/hero' ); ?>
        <div class="row">
            <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
            <?php get_template_part( 'template-parts/blog/article' ); ?>
            <?php get_template_part( 'template-parts/blog/aside' ); ?>
        </div>
        <?php get_template_part( 'template-parts/blog/nav' ); ?>
    </div>
    <?php get_template_part( 'template-parts/newsletter-signup' ); ?>
<?php endwhile; ?>
