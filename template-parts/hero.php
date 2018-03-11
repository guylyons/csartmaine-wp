<?php
/*
 * Hero Template
 *
 */
$index_id = get_option('page_for_posts');
$shop_id  = get_option('woocommerce_shop_page_id');
$hero_title = '';
$hero_banner = '';
$hero_url = '';

if (is_blog()) {
    $hero_banner = get_field('hero_banner', $index_id);
    $hero_title  = get_the_title($index_id);
} elseif (is_archive() && !is_shop()) {
    $hero_banner = get_field('hero_banner', 145);
    $hero_title  = get_the_title(145);
} elseif (is_shop() || is_product() || is_product_category()) {
    $hero_banner = get_field('hero_banner', $shop_id);
    $hero_title  = get_the_title($shop_id);
} else {
    $hero_banner = get_field('hero_banner', $post->ID);
    $hero_title = get_the_title($post->ID);
}

if ($hero_banner != 0) {
    $hero_url = $hero_banner['sizes']['hero'];
}

?>

<?php if ($hero_url && is_single('post')) : ?>
    <header>
        <div class="hero-image" style="background-image: url('<?php echo $hero_url; ?>');">
            <div class="header">
                <h1><?php echo $hero_title; ?></h1>
            </div>
        </div>
    </header>
<?php else: ?>
    <header class="header-nobg">
        <div class="header">
            <h1><?php echo $hero_title; ?></h1>
        </div>
    </header>
<?php endif; ?>
