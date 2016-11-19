<?php

$index_id = get_option( 'page_for_posts' );
$shop_id  = get_option( 'woocommerce_shop_page_id' );
$hero_title = '';
$hero_banner = '';
$hero_url = '';

if( is_blog() ) {
    $hero_banner = get_field( 'hero_banner', $index_id );
    $hero_title  = get_the_title( $index_id );
    $custom_title = get_field( 'custom_title', $index_id );
    $custom_color = get_field( 'title_color', $index_id );
} else
if ( is_shop() || is_product()  ) {
    $hero_banner = get_field( 'hero_banner', $shop_id );
    $hero_title  = get_the_title( $shop_id );
    $custom_title = get_field( 'custom_title', $shop_id );
    $custom_color = get_field( 'title_color', $shop_id );
} else {
    $hero_banner = get_field( 'hero_banner', $post->ID );
    $hero_title = get_the_title( $post->ID );
    $custom_title = get_field( 'custom_title', $post->ID );
    $custom_color = get_field( 'title_color', $post->ID );
}

if ( $hero_banner != 0 ) {
    $hero_url = $hero_banner['url'];
}

?>

<?php if( $hero_url ): ?>
    <header>
        <div class="hero-image" style="background-image: url('<?php echo $hero_url; ?>');">
            <!-- echo the image here. -->
            <?php if( $custom_color ): ?>
                <style>
                    .header h1 { background: <?php echo $custom_color; ?>; }
                </style>
            <?php endif; ?>
            <?php if( $custom_title ): ?>
                <div class="header">
                    <h1><?php echo $custom_title ?></h1>
                </div>
            <?php else: ?>
                <div class="header">
                    <h1><?php echo $hero_title; ?></h1>
                </div>
            <?php endif; ?>
        </div>
    </header>
<?php else: ?>
    <?php if( $hero_title != '' ): ?>
        <header>
            <div class="header header-nobg">
                <h1><?php echo $hero_title; ?></h1>
            </div>
        </header>
    <?php endif; ?>
<?php endif; ?>
