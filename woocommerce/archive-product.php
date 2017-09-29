<?php
/**
* The Template for displaying product archives, including the main shop page which is a post type archive
*
* This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
*
* HOWEVER, on occasion WooCommerce will need to update template files and you
* (the theme developer) will need to copy the new files to your theme to
* maintain compatibility. We try to do this as little as possible, but it does
* happen. When this occurs the version of the template file will be bumped and
* the readme will list any important changes.
*
* @see 	    https://docs.woothemes.com/document/template-structure/
* @author 		WooThemes
* @package 	WooCommerce/Templates
* @version     2.0.0
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header( 'shop' );
?>

<?php get_template_part( 'template-parts/hero' ); ?>

<nav class="nav nav-categories">
    <ul>
        <?php
        $categories = get_categories( array( 'taxonomy' => 'product_cat' ) );
        foreach($categories as $cat): ?>
            <?php $term = get_term( $cat->term_id ); ?>
            <li>
                <a href="<?php echo get_term_link( $term->term_id ); ?>"><?php echo $term->name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>

<section class="container shop-wrap">

<?php
/**
* woocommerce_before_main_content hook.
*
* @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
* @hooked woocommerce_breadcrumb - 20
*/
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
do_action( 'woocommerce_before_main_content' );

?>
<?php if ( apply_filters( 'woocommerce_show_page_title', false ) ) : ?>

    <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

<?php endif; ?>

<div class="row">
    <?php
    /**
    * woocommerce_archive_description hook.
    *
    * @hooked woocommerce_taxonomy_archive_description - 10
    * @hooked woocommerce_product_archive_description - 10
    */
    do_action( 'woocommerce_archive_description' );
    ?>
</div>

<?php woocommerce_breadcrumb(); ?>
<?php woocommerce_product_subcategories(); ?>

<?php if ( have_posts() ) : ?>
    <?php
    /**
    * woocommerce_before_shop_loop hook.
    *
    * @hooked woocommerce_result_count - 20
    * @hooked woocommerce_catalog_ordering - 30
    */
    do_action( 'woocommerce_before_shop_loop' );
    ?>

    <?php if(!is_product_category()): ?>
        <?php get_template_part( 'template-parts/shop/custom-landing' ); ?>
    <?php endif; ?>

    <?php woocommerce_product_loop_start(); ?>

    <?php
    // ignore the featured posts
    $feature_a = get_field( 'feature_a', 139 );
    $feature_b = get_field( 'feature_b', 139 );

    if(!is_product_category()) {
        global $product;
        $args = array(
            'post_type'    =>    'product',
            'post__not_in' =>  array(
                $feature_a->ID,
                $feature_b->ID
            )
        );

        query_posts($args);
    }

    ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <?php wc_get_template_part( 'content', 'product' ); ?>

    <?php endwhile; // end of the loop. ?>

    <?php woocommerce_product_loop_end(); ?>

    <?php
    /**
    * woocommerce_after_shop_loop hook.
    *
    * @hooked woocommerce_pagination - 10
    */
    do_action( 'woocommerce_after_shop_loop' );
    ?>

<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

    <?php wc_get_template( 'loop/no-products-found.php' ); ?>

<?php endif; ?>

<?php
/**
* woocommerce_after_main_content hook.
*
* @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
*/
do_action( 'woocommerce_after_main_content' );
?>

</section>

<?php get_template_part( 'template-parts/newsletter-signup' ); ?>

<?php get_footer( 'shop' ); ?>
