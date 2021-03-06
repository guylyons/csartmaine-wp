<?php
/**
 * Front Page Template
 *
 * @package WordPress
 *
 * @author  Guy Lyons <guylyons2@gmail.com>
 * @license MIT <github.com/guylyons/csartmaine-wp/license>
 *
 **/

get_header();
$logo = get_field('logo', 8);
$logo = $logo['sizes']['large'];
?>

<main role="main" class="main">

    <section>
        <div class="grid">
            <div class="item">
                <h2>Collect</h2>
                <?php
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
                ?>

                <?php foreach ($recent_posts as $post): ?>
                    <a href="<?php the_permalink($post["ID"]); ?>">
                        <h3><?php echo $post["post_title"]; ?></h3>
                        <img src="<?php echo get_the_post_thumbnail_url($post["ID"], "thumbnail"); ?>">
                    </a>
                <?php endforeach; wp_reset_query(); ?>
            </div>
            <div class="item item-logo">
                <img src="<?php echo $logo; ?>" alt="CSArt Maine Logo">
            </div>
            <div class="item">
                <?php the_content(); ?>
            </div>
        </div>
        <div class="grid">
            <div class="item">
                <?php the_field('custom_grid_block_1'); ?>
            </div>
            <div class="item">
                <h2>Newsletter</h2>
               <?php get_template_part('template-parts/newsletter-signup'); ?>
            </div>
            <div class="item">
                <h2>Blog</h2>
                <?php
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
                ?>

                <?php foreach ($recent_posts as $post): ?>
                    <a href="<?php the_permalink($post["ID"]); ?>">
                        <h3><?php echo $post["post_title"]; ?></h3>
                        <img src="<?php echo get_the_post_thumbnail_url($post["ID"], "thumbnail"); ?>">
                    </a>
                <?php endforeach; wp_reset_query(); ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
