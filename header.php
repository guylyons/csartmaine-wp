<?php
/**
 * Default Header Template
 *
 */

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
        <?php
        $logo = get_field( 'logo', 8 );
        $logo = $logo['sizes']['large']; ?>
        <?php if( $logo ): ?>
            <section class="site-logo">
                <a href="<?php echo home_url(); ?>">
                    <img class="logo" src="<?php echo $logo; ?>" alt="CSArt Maine Logo">
                </a>
            </section>
        <?php endif; ?>
        <nav class="nav-primary">
            <?php csart_primary_nav(); ?>
        </nav><!-- .nav-primary -->
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

            <div class="nav-mobile-toggle"></div>

        </div>
    </header>
