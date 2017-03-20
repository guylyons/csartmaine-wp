<?php
$cat_id = get_field( 'primary_category' );
if ( $cat_id ) { $cat = get_category( $cat_id ); }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content' ); ?>>

    <?php while( have_posts() ): the_post(); ?>
        <?php $hero_url = get_the_post_thumbnail_url( $post->ID ); ?>
        <?php if( $hero_url ): ?>
            </section>
                <div class="hero-image full-height" style="background-image: url('<?php echo $hero_url; ?>');">
                    <!-- image-url: <?php echo $hero_url; ?> -->
                    <header  class="post-header">
                        <?php $subhead = get_field( 'subhead' ); ?>
                        <div class="post-meta"><?php if( $cat ) { echo $cat->name . ' | '; } ?><?php the_author(); ?> | <time><?php the_date( 'd F Y' ); ?></time></div>
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <?php if( $subhead ) { echo '<h5 class="post-subhead">' . $subhead . '</h5>'; } ?>
                    </header>
                </div>
            <section class="container">
        <?php endif; ?>
        <div class="blog-article">
            <section class="post-tags">
                <?php get_template_part( 'parts/blog/tags' ); ?>
            </section>
            <article class="post-article">
                <?php the_content(); ?>
            </article>
            <section class="post-comments">
                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>
            </section>
            <section class="blog-nav">
                <div class="container row">
                    <?php $prev = get_previous_post(); ?>
                    <?php $next = get_next_post(); ?>
                    <?php if( $prev ): ?>
                        <a class="half" href="<?php the_permalink( $prev->ID ); ?>">
                            <div class="blog-nav__box">
                                <div data-icon="ei-chevron-left" data-size="m"></div> <?php echo $prev->post_title; ?>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if( $next ): ?>
                        <a class="half" href="<?php the_permalink( $next->ID ); ?>/">
                            <div class="blog-nav__box">
                                <?php echo $next->post_title; ?> <div data-icon="ei-chevron-right" data-size="m"></div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </section>
    <?php endwhile; ?>

</article>
