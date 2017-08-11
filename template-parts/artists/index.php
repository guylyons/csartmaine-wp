<?php
// FIXME: make the term dynamic via ACF
$args = array(
    'post_type'  =>  'artists',
    'tax_query'  =>  array(
        array(
            'taxonomy'    =>    'season',
            'field'       =>    'slug',
            'terms'       =>    'S4'
        ),
    )
);
$artist_query = new WP_Query( $args );
?>

<section class="artist-index-wrap">
    <div class="container">
        <div class="row">
            <?php get_template_part( 'template-parts/artists/season-select' ); ?>
            <h2>Season: S4</h2>
            <div class="artist-index">
                <?php while( $artist_query->have_posts() ) : $artist_query->the_post(); ?>
                    <?php get_template_part( 'template-parts/artists/content' ); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <section class="instagram-feed center">
        <h2>Be a part of the local conversartion.</h2>
        <div class="container row">
            <?php echo do_shortcode( '[instashow id="1"]' ); ?>
            <h3><strong>#CSArtMaine</strong></h3>
            <p>Share your art, stories and passions with us on Instagram, and hashtag us!</p>
        </div>
    </section>
</div>
<?php get_template_part( 'template-parts/recent-products' ); ?>

<?php get_template_part( 'template-parts/cta-apply' ); ?>
