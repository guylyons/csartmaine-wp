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
<!-- comodo verify -->
<script type="text/javascript"> //<![CDATA[
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo title() ?> | CSArt Maine</title>
    <?php wp_head(); ?>
</head>

<nav class="nav nav--mobile">
    <?php csart_mobile_nav(); ?>
</nav>

<body <?php body_class() ?>>

    <section class="special-event">
        <div class="row">
            <div>There's something exciting happening! <a href="#">find out more</a>.</div>
        </div>
    </section>

    <header class="header-wrap">
        <div class="container">
            <?php if( $logo ): ?>
                <section>
                    <a href="<?php echo home_url(); ?>">
                        <img class="logo" src="<?php echo $logo; ?>" alt="CSArt Maine Logo">
                    </a>
                </section>
            <?php endif; ?>
            <nav class="nav-primary">
                <?php csart_primary_nav(); ?>
            </nav>

            <nav class="nav-primary-scroll">
                <a href="#top">
                    <div class="site-title">
                        <?php echo bloginfo(); ?>
                    </div>
                </a>
                <?php csart_primary_nav(); ?>
            </nav>
        </div>
    </header>
