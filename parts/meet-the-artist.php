<section class="container row">
    <?php
    $args = array(
        'post_type'  =>  'artists',
        'orderby'      =>  'rand',
        'posts_per_page' => 1
    );
    $artist_query = new WP_Query( $args );
    ?>
    <?php while( $artist_query->have_posts() ) : $artist_query->the_post(); ?>

        <?php
        $name = get_field( 'artist_name' );
        $bio  = get_field( 'artist_bio' );
        $avatar = get_field( 'artist_avatar' );
        if ( $avatar['sizes']['product_thumb'] ) {
            $avatar_url = $avatar['sizes']['product_thumb'];
        } else {
            $avatar_url = '';
        }

        ?>
        <section class="col2">
            <h1>Meet an artist</h1>
            <h4 class="artist-name"><?php echo $name ?></h4>
            <?php echo $bio ?>
            <div>
                <a href="<?php echo get_permalink(); ?>" class="button">Learn More</a>
            </div>
        </section>
        <section class="col2">
            <a href="<?php echo get_permalink(); ?>">
                <img src="<?php echo $avatar_url; ?>" alt="<?php echo $name; ?>" />
            </a>
        </section>

    <?php endwhile; wp_reset_query(); ?>

</section>
