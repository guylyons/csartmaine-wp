<?php
$shop_id = 139;
$feature_a = get_field( 'feature_a', $shop_id );
$feature_b = get_field( 'feature_b', $shop_id );
if(is_shop() && $feature_a || $feature_b):
?>

<section class="container">
    <?php $_product = wc_get_product( $feature_a->ID ); ?>
    <ul class="products">
        <li class="col2 product featured">
            <a href="<?php the_permalink($feature_a->ID); ?>" class="woocommerce-LoopProduct-link">
                <img src="//placehold.it/800x300" title="" alt="">
                <h3><?php echo $feature_a->post_title; ?></h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                    $</span><?php echo $_product->get_price(); ?></span></span>
            </a>
        </li>
        <?php $_product = wc_get_product( $feature_b->ID ); ?>
        <li class="col2 product featured">
            <a href="<?php the_permalink($feature_b->ID); ?>" class="woocommerce-LoopProduct-link">
                <img src="//placehold.it/800x300" title="" alt="">
                <h3><?php echo $feature_b->post_title; ?></h3>
                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                    $</span><?php echo $_product->get_price(); ?></span></span>
            </a>
        </li>
    </ul>
</section>
<?php endif; ?>
