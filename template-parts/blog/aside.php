<aside>
    <?php
    $args = array(
        'post_type'         =>    'product',
        'posts_per_page'    =>    4,
        'order'             =>    'ASC',
        'orderby'           =>    'rand',
    );
    $product_query = new WP_Query( $args );
    ?>
    <h2 class="center">New in the Shop</h2>
    <hr>
    <br>
    <?php while( $product_query->have_posts() ) : $product_query->the_post(); ?>
        <?php
        $product_image_url = get_the_post_thumbnail_url( $post->ID, 'shop_catalog', array(
            // 'title'  => $props['title'],
            // 'alt'    => $props['alt'],
        ) );
        ?>
        <div class="new-products center">
            <a href="<?php the_permalink(); ?>">
                <div class="new-products-content">
                    <img src="<?php echo $product_image_url; ?>" class="new-products-image">
                    <div class="new-products--artist-name">
                        <?php get_artist_name(); ?>
                        <?php the_title(); ?>
                    </div>
                </div>
            </a>
        </div>
    <?php endwhile; ?>
</aside>
