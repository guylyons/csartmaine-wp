<?php
// header.php

$logo = get_field( 'logo', 8 );
$logo = $logo['sizes']['large'];

function title() {
    if( is_blog() ) {
        return 'Blog';
    } else if( is_shop() ) {
        return 'Shop';
    } else if( is_page( 'artists' ) ) {
        return 'Artist';
    } else if ( is_front_page() ) {
	return "Community Supported Art Maine";
    } else {
        return get_the_title();
    }
}
?>

<!DOCTYPE html>
<html id="top">

<?php if( is_page( 'checkout' ) ): ?>
    <!-- comodo verify -->
    <script type="text/javascript"> //<![CDATA[
    var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
    document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
    //]]>
    </script>
<?php endif; ?>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title() ?> | CSArt Maine</title>
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
