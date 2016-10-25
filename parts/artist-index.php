<div class="artist-index__opening-blurb">
    <div class="container row">
        <div class="row blog-container">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php
$args = array(
    'post_type'  =>  'artists',
    'tax_query'  =>  array(
        array(
            'taxonomy'    =>    'season',
            'field'       =>    'slug',
            'terms'       =>    'S3'
        ),
    )
);
$artist_query = new WP_Query( $args );
?>

<section class="artist-index-wrap">
    <div class="container">

        <div class="row">
            <?php get_template_part( 'parts/season-select' ); ?>
            <h2>Season: S3</h2>
            <div class="artist-index">
                <?php while( $artist_query->have_posts() ) : $artist_query->the_post(); ?>

                    <?php get_template_part( 'parts/artist-index-content' ); ?>

                <?php endwhile; ?>

            </div>
        </div>
    </section>

    <?php get_template_part( 'parts/recent-products' ); ?>
