<?php
/* Custom Shortcodes */

// [latest-shop-item]
function shortcode_latest_shop_item($atts) {
    $heading = "<h2>Collect</h2>";
    $args = array(
        'numberposts' => 1,
        'offset' => 0,
        'category' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'product',
        'post_status' => 'publish',
        'suppress_filters' => true
    );

    $recent_posts = wp_get_recent_posts($args);

    foreach ($recent_posts as $post) {
        echo '<a href="' . get_the_permalink($post["ID"]) . '">';
        echo '<h3>' . $post["post_title"] . '</h3>';
        echo '<img src="' . get_the_post_thumbnail_url($post["ID"], "thumbnail")
            . '"></a>';
    }
    wp_reset_query();
}
add_shortcode('latest-shop-item', 'shortcode_latest_shop_item');

// [latest-blog-item]
function shortcode_latest_blog_item($atts) {
    $heading = '<h2>Blog</h2>';
    $args = array(
        'numberposts' => 1,
        'offset' => 0,
        'category' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'suppress_filters' => true
    );

    $recent_posts = wp_get_recent_posts($args);

    foreach ($recent_posts as $post) {
        echo '<a href="' . get_the_permalink($post["ID"]) . '">';
        echo '<h3>' . $post["post_title"] . '</h3>';
        echo '<img src="' . get_the_post_thumbnail_url($post["ID"], "thumbnail")
            . '"></a>';
    }
    wp_reset_query();
}
add_shortcode('latest-blog-item', 'shortcode_latest_blog_item');

// [newsletter-signup]
function shortcode_newsletter_signup($atts) {
    $header = '<h2>Newsletter</h2>';
    get_template_part('template-parts/newsletter-signup');
}
add_shortcode('newsletter_signup', 'shortcode_newsletter_signup');

// [logo]
function shortcode_logo($atts) {
    $logo = get_field('logo', 8);
    $logo = $logo['sizes']['large'];

    echo '<div class="item-logo"><img src="' . $logo . '"
          alt="CSArt Maine Logo"></div>';
}
add_shortcode('logo', 'shortcode_logo');
