<?php
// header.php
$logo = get_field( 'logo', 8 );
$logo = $logo['sizes']['large'];
?>

<!DOCTYPE html>
<html id="top">
<?php get_template_part( 'template-parts/comodo' ) ?>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>

<nav class="nav nav--mobile">
    <?php csart_mobile_nav(); ?>
</nav>

<body <?php body_class() ?>>

    <section class="special-event" style="display: none;">
        <div class="row">
            <div>There's something exciting happening! <a href="#">find out more</a>.</div>
        </div>
    </section>

    <header class="header-wrap">
        <?php if( $logo ): ?>
            <section class="site-logo">
                <a href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php echo $logo; ?>" alt="CSArt Maine Logo">
                </a>
            </section>
        <?php endif; ?>
        <div class="container">
            <nav class="nav-primary">
                <?php csart_primary_nav(); ?>
            </nav><!-- .nav-primary -->
        </div>
            <section id="artists-dropdown" class="artists-dropdown">
                <div class="artist-dropdown__season">
                </div>
                <?php
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

                $artists = get_posts( $args );
                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                foreach( $artists as $artist ) : ?>
                <?php
                $artist_link = get_the_permalink( $artist->ID );
                if( $actual_link == $artist_link ) {
                    $active_result = "active";
                } else {
                    $active_result = "";
                }
                ?>
                    <a class="item" href="<?php the_permalink( $artist->ID ); ?>">
                        <span class="artist-name <?php echo $active_result; ?>">
                            <?php echo $artist->post_title; ?>
                        </span>
                    </a>
                <?php endforeach; ?>
                <?php if( !is_page( 'artists' )): ?>
                    <a class="item" href="/artists">
                        <span class="artists-index">
                            More...
                        </span>
                    </a>
                <?php endif; ?>
            </section>

            <nav class="nav-primary-scroll">
                <a href="#top">
                    <div class="site-title">
                        <?php echo bloginfo(); ?>
                    </div>
                </a>
                <?php csart_primary_nav(); ?>
            </nav><!-- .nav-primary-scroll -->

            <nav class="nav-mobile">
                <?php csart_mobile_nav(); ?>
            </nav><!-- .nav-mobile -->

            <div class="nav-mobile__toggle"></div>

        </div>
    </header>
