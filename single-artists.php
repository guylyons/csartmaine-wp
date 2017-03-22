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

        <article class="artist-profile">
            <section class="container">

                <img class="artist-profile__avatar" src="<?php echo $avatar_thumbnail; ?>" alt="<?php the_title(); ?> image">

                <table class="artist-profile__content">
                    <tbody>

                        <th>
                            <h1><?php echo $name; ?></h1>
                        </th>

                        <?php if( $medium ): ?>
                            <tr>
                                <td><?php echo $medium; ?></td>
                            </tr>
                        <?php endif; ?>

                        <?php if( $website): ?>
                            <tr>
                                <td>
                                    <a href="<?php echo $website; ?>">Website</a>
                                </td>
                            </tr>
                        <?php endif; ?>

                        <tr class="artist_season_select">
                            <td>
                                <?php
                                $terms = get_the_terms( $post->ID, 'season' );
                                foreach( $terms as $term ) {
                                    echo '<div class="item">';
                                    $slug = $term->slug;
                                    echo "<a href='/season/$slug'>";
                                    echo $term->name;
                                    echo '</a>' . ' '; // space at the end here
                                    echo '</div>';
                                }
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td><?php echo $bio; ?></td>
                        </tr>
                    </tbody>
                </table>

                <?php $prev = get_previous_post(); ?>
                <?php $next = get_next_post(); ?>

                <?php if( $next || $prev ): ?>
                    <nav class="artist-nav">
                        <?php if( $next ): ?>
                            <a class="half" href="<?php the_permalink( $next->ID ); ?>">
                                <div class="blog-nav__box artist-nav__prev">
                                    <div data-icon="ei-chevron-left" data-size="m"></div> <p><?php echo $next->post_title; ?></p>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if( $prev ): ?>
                            <a class="half" href="<?php the_permalink( $prev->ID ); ?>/">
                                <div class="blog-nav__box artist-nav__next">
                                    <p><?php echo $prev->post_title; ?></p> <div data-icon="ei-chevron-right" data-size="m"></div>
                                </div>
                            </a>
                        <?php endif; ?>
                    </nav>
                <?php endif; ?>

                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => -1,
                        'meta_key' => 'related_artist'                        
                        );

                        $product_query = new WP_Query( $args );

                        if( $product_query->have_posts() ) {
                            while( $product_query->have_posts() ) {
                                $product_query->the_post();

                                the_title();
                            }
                        } else {
                            echo 'ut oh';
                        }

                    ?>
                </div>

            </section>
        </article>

    </main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
