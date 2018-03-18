<?php
/* Image cropping */
set_post_thumbnail_size(300, 300, true);
add_image_size('product_thumb', 500, 500, true);
add_image_size('index_blog', 600, 180, true);
add_image_size('hero', 1280, 400, true);

/* Enqueue Scripts and Styles */
require 'includes/enqueue.php';
/* Walker Navigation */
require 'includes/menus.php';
/* Helper Functions */
require 'includes/helpers.php';
/* Custom Post Types & Taxonomies */
require 'includes/cpt.php';

add_theme_support('title-tag');

function wpb_imagelink_setup()
{
    $image_set = get_option('image_default_link_type');

    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

/* WooCommerce features */
add_theme_support('woocommerce');
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
