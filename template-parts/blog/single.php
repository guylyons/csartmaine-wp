<?php
/* get the primary category */
$cat_id = get_field('primary_category');
if ($cat_id) {
    $cat = get_category($cat_id);
}

?>

<?php while (have_posts()): the_post(); ?>
<?php echo $cat->name; ?>
    <div class="blog-single">
        <?php get_template_part('template-parts/blog/hero'); ?>
        <?php get_template_part('template-parts/blog/article'); ?>
        <?php get_template_part('template-parts/blog/nav'); ?>
    </div>
<?php endwhile; ?>
