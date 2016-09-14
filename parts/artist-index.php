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
    'order'      =>  'ASC',
    'orderby'    =>  'name',
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

    <?php $toggle = get_field( 'cta_apply_toggle', 145 ); ?>
    <?php if( $toggle === true ): ?>
        <section class="artist-call">
            <div class="blog-container row">
                <h1 class="artist-call__headline"><?php the_field( 'cta_apply_headline', 145 ); ?></h1>
                <div class="artist-call__paragraph">
                    <?php the_field( 'cta_apply_content', 145 ); ?>
                </div>
                <a href="/#contactUs" class="button">Apply</a>
            </div>
        </section>
    <?php endif; ?>

    <?php get_template_part( 'parts/recent-products' ); ?>
