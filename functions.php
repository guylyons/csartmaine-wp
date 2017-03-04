<?php

/*=====================================
    Image Crop Sizes
=====================================*/
add_image_size( 'product_thumb', 500, 500, true );
add_image_size( 'landing_posts', 800, 600, true );
add_image_size( 'index_blog', 600, 180, true );
add_image_size( 'hero', 1280, 400, true );

/*=====================================
    Enqueue Styles
=====================================*/
function csart_enqueue_styles() {
    wp_register_style( 'evil-icons', 'https://cdn.jsdelivr.net/evil-icons/1.8.0/evil-icons.min.css', false, '1.7.8' );
    wp_register_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', false, '2.2.0' );
    wp_register_style( 'csart-custom', get_template_directory_uri() . '/assets/css/main.css', false, '1.0' );

    wp_enqueue_style( 'evil-icons' );
    wp_enqueue_style( 'material-icons' );
    wp_enqueue_style( 'csart-custom' );
}

add_action( 'wp_enqueue_scripts', 'csart_enqueue_styles' );

function csart_enqueue_scripts() {
    wp_register_script( 'csart-global', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), '1.0', true );
    wp_register_script( 'Evil Icons', 'https://cdn.jsdelivr.net/evil-icons/1.8.0/evil-icons.min.js', true, '1.7.8' );
    wp_register_script( 'Slick Carousel', get_template_directory_uri() . '/assets/js/vendor/slick.min.js', array( 'jquery' ), '1.6.0', true );

    wp_enqueue_script( 'Evil Icons' );
    wp_enqueue_script( 'Slick Carousel' );
    wp_enqueue_script( 'csart-global' );
}

add_action( 'wp_enqueue_scripts', 'csart_enqueue_scripts' );

/*=====================================
    Register Menus
=====================================*/
function csart_register_menus() {
    register_nav_menus(array(
        'primary'   =>    __( 'Primary Navigation', 'csartmaine' ),
        'mobile'    =>    __( 'Mobile Navigation', 'csartmaine' ),
        'footer'    =>    __( 'Footer Navigation', 'csartmaine' ),
    ));
}

add_action( 'init', 'csart_register_menus' );

function csart_primary_nav() {
    wp_nav_menu(array(
        'container'       => false,                        // remove nav container
        'menu'            => 'Primary Nav',                // nav name
        'menu_id'         => 'nav-main',                   // custom id
        'menu_class'      => 'nav-main nav group',         // custom class
        'theme_location'  => 'primary',                    // where it's located in the theme
        'before'          => '',                           // before the menu
        'after'           => '',                           // after the menu
        'link_before'     => '',                           // before each link
        'link_after'      => '',                           // after each link
        'depth'           => 0,                            // set to 1 to disable dropdowns
    ));
}

function csart_mobile_nav() {
    wp_nav_menu(array(
        'container'       => false,                        // remove nav container
        'menu'            => 'Mobile Nav',                 // nav name
        'menu_id'         => 'nav-mobile',                 // custom id
        'menu_class'      => 'nav-mobile nav group',       // custom class
        'theme_location'  => 'mobile',                     // where it's located in the theme
        'before'          => '',                           // before the menu
        'after'           => '',                           // after the menu
        'link_before'     => '',                           // before each link
        'link_after'      => '',                           // after each link
        'depth'           => 1,                            // set to 1 to disable dropdowns
    ));
}

function csart_footer_nav() {
    wp_nav_menu(array(
        'container'       => false,                        // remove nav container
        'menu'            => 'Footer Nav',                 // nav name
        'menu_id'         => 'nav-footer',                 // custom id
        'menu_class'      => 'nav-footer nav group',       // custom class
        'theme_location'  => 'footer',                     // where it's located in the theme
        'before'          => '',                           // before the menu
        'after'           => '',                           // after the menu
        'link_before'     => '',                           // before each link
        'link_after'      => '',                           // after each link
        'depth'           => 1,                            // set to 1 to disable dropdowns
    ));
}

// Allow SVG
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_theme_support( 'woocommerce' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

add_theme_support( 'title-tag' );

function get_artist_name() {
    if( get_field( 'product_artist' ) ) {
        $artist = get_field( 'product_artist' );
        $artist_meta = get_post_meta( $artist->ID );

        echo '<div class="woocommerce-artist-name">';
        echo $artist_meta['artist_name'][0];
        echo '</div>';
    } else {
        echo "<div>CSArt Maine</div>";
    }
}

function is_blog() {
    return ( is_author() || is_category() || is_tag() || is_date() || is_home() ) && 'post' == get_post_type();
}

function wpb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );

	if ($image_set !== 'none') {
		update_option('image_default_link_type', 'none');
	}
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

function social_share() {
    $title = urlencode( get_the_title() );
    $url   = urlencode( get_the_permalink() );
    $facebook_url = 'http://www.facebook.com/sharer.php?u=' . $url . '';
    $twitter_url  = 'http://twitter.com/share?text=' . $title . '&url=' . $url . '';

    $link = "<a href='$facebook_url' target='_blank'>Share</a>";
    echo $link;
}

// Ninja Forms Hidden Fields
add_action( 'ninja_forms_display_after_fields', 'custom_extra_value' );

function custom_extra_value(){
    $ip = $_SERVER["REMOTE_ADDR"]; // Get our user's IP address.
    ?>
    <input type="hidden" name="_user_IP" value="<?php echo $ip;?>">
    <?php
}

function what_column_width() {
    $product_column_width = get_field( 'product_column_width' );
    if( $product_column_width != '' ) {
        return $product_column_width;
    }
}

function csart_login_logo() { ?>
    <style type="text/css">
    .login {
        border-top: 2px solid #ffd673;
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pat.png);
        background-size: 80px;
    }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png);
            padding-bottom: 30px;
            padding-bottom: 75px;
            background-size: cover;
            width: 160px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'csart_login_logo' );

function csart_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'csart_login_logo_url' );

?>
