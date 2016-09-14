<?php
/* single.php template */

$name = get_field( 'artist_name' );
$season = get_field( 'artist_season' );
$medium = get_field( 'artist_medium' );
$website = get_field( 'artist_website' );
$bio = get_field( 'artist_bio' );
$avatar = get_field( 'artist_avatar' );
$avatar = $avatar['sizes']['product_thumb'];
$facebook = get_field( 'facebook' );
$twitter = get_field( 'twitter' );
$instagram = get_field( 'instagram' );

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <article class="artist-profile">
            <section class="container">

                <img class="artist-profile__avatar" src="<?php echo $avatar; ?>" alt="<?php the_title(); ?> image">

                <table class="artist-profile__content">
                    <tbody>
                        <th>
                            <h1><?php echo $name; ?></h1>
                        </th>
                        <tr>
                            <td><?php echo $medium; ?></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="<?php echo $website; ?>">
                                    Website
                                </td>
                        </tr>
                        <tr>
                            <td><?php echo $bio; ?></td>
                        </tr>
                    </tbody>
                </table>

                <?php get_template_part( 'parts/recent-products' ); ?>

            </section>
        </article>
    </main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
