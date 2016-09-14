<?php
$args = array(
    'post_type'         =>    'product',
    'posts_per_page'    =>    4,
    'order'             =>    'ASC',
    'orderby'           =>    'rand'
);
$product_query = new WP_Query( $args );
?>
<?php if( $product_query->have_posts() ) : ?>
    </section>
    <section class="section-4">
        <section class="container row">
            <?php while( $product_query->have_posts() ) : $product_query->the_post(); ?>
                <?php
                $product_image_url = get_the_post_thumbnail_url( $post->ID, 'shop_catalog', array(
                    // 'title'  => $props['title'],
                    // 'alt'    => $props['alt'],
                ) );
                 ?>
                 <div class="new-products quarter">
                     <a href="<?php the_permalink(); ?>">
                         <div class="new-products-content">
                             <img src="<?php echo $product_image_url; ?>" class="new-products-image">
                             <div class="new-products--artist-name">
                                 <?php get_artist_name(); ?>
                                 <?php get_template_part( 'woocommerce/single-product/price' ); ?>
                             </div>
                         </div>
                     </a>
                     <?php get_template_part( 'woocommerce/single-product/sale-flash' ); ?>
                 </div>
            <?php endwhile; ?>

        </section>
    </section>
<?php endif; ?>
