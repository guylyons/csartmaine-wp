<?php

/*=====================================
    Image Crop Sizes
=====================================*/
add_image_size( 'product_thumb', 500, 500, true );
add_image_size( 'landing_posts', 800, 600, true );
add_image_size( 'index_blog', 600, 180, true );
add_image_size( 'hero', 1280, 400, true );

/* Enqueue Scripts and Styles */
include('includes/enqueue.php');
/* Walker Navigation */
include('includes/menus.php');
/* Helper Functions */
include('includes/helpers.php');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_theme_support( 'woocommerce' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_theme_support( 'title-tag' );

function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);
