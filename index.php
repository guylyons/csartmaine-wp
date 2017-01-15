<?php
// index.php

get_header();
?>

<?php if( have_posts() ) : ?>
    <section class="content-area" id="content-area">

        <?php get_template_part( 'parts/hero' ); ?>

        <main role="main" class="site-main" id="main">

            <section class="container index-blog">
                <section class="row">

                    <?php while( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'parts/index', 'blog' ); ?>
                    <?php endwhile; ?>

                </section>
            </section>

        </main>
    </section>
<?php endif; ?>

<?php get_template_part( 'parts/recent', 'products' ); ?>
<?php get_template_part( 'parts/newsletter-signup' ); ?>

<?php get_footer(); ?>
