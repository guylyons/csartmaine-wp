<?php $count = 0; ?>
<section class="container recent-posts">
    <h4>Recent Posts</h4>
    <?php
    $args = array(
        'post_type' => 'post'
    );
    $recent_posts = get_posts( $args );
    foreach( $recent_posts as $recent_post ) {
        $title   = $recent_post->post_title;
        $author  = $recent_post->post_author;
        $ID      = $recent_post->ID;
        $img_url = get_the_post_thumbnail_url( $ID, 'landing_posts' );
        $count++;
        ?>
        <?php if( $img_url ): ?>
            <li class="recent-posts__item">
        <?php else: ?>
            <li class="recent-posts__item">
        <?php endif; ?>
            <a class="recent-posts__link" href="<?php the_permalink( $ID ); ?>"  data-img-url="<?php echo $img_url; ?>">
                <?php echo $count; ?>. <?php echo $title; ?>
            </a>
        </li>
    <?php } ?>
</section>

<?php if( is_front_page() ): ?>

    <section class="triangle-image">
    </section>

<?php endif; ?>
