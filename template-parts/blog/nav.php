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
