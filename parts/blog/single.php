<?php
$cat_id = get_field( 'primary_category' );
if ( $cat_id ) { $cat = get_category( $cat_id ); }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-content' ); ?>>
    <?php while( have_posts() ): the_post(); ?>

        <?php $hero_url = get_the_post_thumbnail_url( $post->ID ); ?>
        <?php if( $hero_url ): ?>
            </section>
                <header>
                    <div class="hero-image" style="background-image: url('<?php echo $hero_url; ?>');">
                        <!-- echo the image here. -->
                    </div>
                </header>
            <section class="container">
        <?php endif; ?>

        <main class="blog-article">
            <header  class="post-header">
                <?php $subhead = get_field( 'subhead' ); ?>
                <div class="post-meta"><?php if( $cat ) { echo $cat->name . ' | '; } ?><?php the_author(); ?> | <time><?php the_date( 'd F Y' ); ?></time></div>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <?php if( $subhead ) { echo '<h5 class="post-subhead">' . $subhead . '</h5>'; } ?>
            </header>
            <section class="post-tags">
                <?php get_template_part( 'parts/blog/tags' ); ?>
            </section>
            <article class="post-article">
                <?php the_content(); ?>
            </article>

        </main>

        <article class="recent-tweets">
            <h4 class="title">Recent Tweets</h4>
            <?php $tweets = getTweets(); ?>
            <?php
            if( $tweets ) {
                $count = 0;
                echo '<ul class="tweets">';
                foreach( $tweets as $tweet ) {
                    $created_at = strtotime( $tweet['created_at'] );
                    $date       = date( 'm/d/y ', $created_at );
                    $count++;
                    if ( $count >= 4 ) {
                        break;
                    } else {
                        echo '<li>';
                        echo '<a target="_blank" href="http://www.twitter.com/csartmaine">@csartmaine</a> ';
                        echo $tweet['text'];
                        echo '<div>' . $date . '</div>';
                        echo '</li>';
                    }
                }
                echo '</ul>';
            }
            ?>
        </article>

        <section class="post-comments">
            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>
        </section>
    </section>

    <?php endwhile; ?>
</article>
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
        <?php /* get_template_part( 'parts/recent', 'posts' ); */ ?>
        <?php /* get_sidebar(); */ ?>
    </div>
</section>
