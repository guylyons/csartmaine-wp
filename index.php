<?php
get_header();
?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'posts_per_page' => 6,
  'paged'          => $paged
);

$the_query = new WP_Query($args);
?>

<?php if (have_posts()) : ?>
    <section class="content-area" id="content-area">

        <?php get_template_part('template-parts/hero'); ?>

        <main role="main" class="site-main" id="main">

            <section class="container index-blog">
                <section class="row">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <?php get_template_part('template-parts/blog/index'); ?>
                    <?php endwhile; ?>

                </section>
            </section>

        </main>
    </section>
    <div class="pagination">
        <?php the_posts_pagination($args); ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>
