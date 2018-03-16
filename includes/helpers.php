<?php
/**
 * Helper Functions
 *
 * @since 2.0.0
 * @package WordPress
 */

function get_artist_name()
{
    if (get_field('related_artist')) {
        $artist = get_field('related_artist');
        $artist_meta = get_post_meta($artist->ID);

        echo '<div class="woocommerce-artist-name">';
        echo $artist_meta['artist_name'][0];
        echo '</div>';
    } else {
        /* echo "<div>CSArt Maine</div>"; */
    }
}

function is_blog()
{
    return (is_author() || is_category() || is_tag() || is_date() || is_home()) && 'post' == get_post_type();
}

function what_column_width()
{
    $product_column_width = get_field('product_column_width');
    if ($product_column_width != '') {
        return $product_column_width;
    }
}

function csart_login_logo()
{
    ?>
    <style type="text/css">
     .login {
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
<?php
}
add_action('login_enqueue_scripts', 'csart_login_logo');

function csart_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'csart_login_logo_url');

function social_share()
{
    $title = urlencode(get_the_title());
    $url   = urlencode(get_the_permalink());
    $facebook_url = 'http://www.facebook.com/sharer.php?u=' . $url . '';
    $twitter_url  = 'http://twitter.com/share?text=' . $title . '&url=' . $url . '';

    $link = "<a href='$facebook_url' target='_blank'>Share</a>";
    echo $link;
}
