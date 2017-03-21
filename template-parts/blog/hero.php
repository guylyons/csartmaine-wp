<?php $hero_url = get_the_post_thumbnail_url( $post->ID ); ?>
<?php if( $hero_url ): ?>
    </section>
        <div class="hero-image" style="background-image: url('<?php echo $hero_url; ?>');">
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
