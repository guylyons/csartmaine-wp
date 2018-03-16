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
$artist_query = new WP_Query($args);
?>

<section class="artist-index-wrap">
    <div class="container">
        <div class="row">
            <?php get_template_part('template-parts/artists/season-select'); ?>
            <h2>Season: S4</h2>
            <div class="artist-index row">
                <?php if (have_posts()) : $i=0; ?>
                    <?php while (have_posts()) : the_post(); $i++; ?>
                        <?php get_template_part('template-parts/artists/content'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
