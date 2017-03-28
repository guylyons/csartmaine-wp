<?php
/* single.php template */
$name = get_field( 'artist_name' );
$medium = get_field( 'artist_medium' );
$website = get_field( 'artist_website' );
$bio = get_field( 'artist_bio' );
$avatar = get_field( 'artist_avatar' );
if ($avatar) {
    $avatar_thumbnail = $avatar['sizes']['thumbnail'];
}
$facebook = get_field( 'facebook' );
$twitter = get_field( 'twitter' );
$instagram = get_field( 'instagram' );
$next_link = get_next_post_link();
$prev_link = get_previous_post_link();

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <section>
            <div class="artist_season_select">
                <?php
                $terms = get_the_terms( $post->ID, 'season' );
                foreach( $terms as $term ) {
                    echo '<div class="item">';
                    $slug = $term->slug;
                    echo "<a href='/season/$slug'>";
                    echo $term->name;
                    echo '</a>' . ' '; // space at the end here
                    echo '</div>';
                } ?>
            </div>
        </section>

        <section>
            <?php $prev = get_previous_post(); ?>
            <?php $next = get_next_post(); ?>

            <?php if( $next || $prev ): ?>
                <nav class="artist-nav">
                    <?php if( $next ): ?>
                        <a class="half" href="<?php the_permalink( $next->ID ); ?>">
                            <p><?php echo $next->post_title; ?></p>
                        </a>
                    <?php endif; ?>
                    <?php if( $prev ): ?>
                        <a class="half" href="<?php the_permalink( $prev->ID ); ?>/">
                            <p><?php echo $prev->post_title; ?></p>
                        </a>
                    <?php endif; ?>
                </nav>
            <?php endif; ?>
        </section>

        <section>
            <div class="row">
                <?php
                $related_products = get_posts(array(
                    'numberposts'	=> -1,
                    'post_type'		=> 'product',
                    'meta_key'		=> 'related_artist',
                    'meta_value'	=> $post->ID
                ));

                if( !$related_products == 0 ) {
                    foreach($related_products as $product) {
                        $title = $product->post_title;
                        $id    = $product->ID;
                        $link  = get_the_permalink( $id );
                        ?>

                        <div class="artist-related-products">
                            <div class="related-product">
                                <a href="<?php the_permalink( $id ); ?>">
                                    <?php echo get_the_title( $id ); ?>
                                </a>
                            </div>
                        </div>

                        <?php
                    }
                } ?>
            </div>
        </section>
    </main><!-- .site-main -->
</div>
<?php get_footer(); ?>
