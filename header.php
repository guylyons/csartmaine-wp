<?php
// header.php

$logo = get_field( 'logo', 8 );
$logo = $logo['sizes']['large'];
?>

<!DOCTYPE html>
<html id="top">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <?php $title = $pagename ? ucfirst( $pagename ) . ' | CSArt Maine' : 'CSArt Maine'; ?> -->
    <title><?php wp_title( '|', true, 'right' ); ?>CSArt Maine</title>
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
            <nav class="nav-primary">
                <?php if( $logo ): ?>
                    <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo $logo; ?>" alt="CSArt Maine Logo"></a>
                    <?php csart_primary_nav(); ?>
                <?php endif; ?>
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
