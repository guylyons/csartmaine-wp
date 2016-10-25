 <?php $toggle = get_field( 'cta_apply_toggle', 145 ); ?>
 <?php if( $toggle === true ): ?>
    <section class="artist-call">
        <div class="blog-container row">
            <h1 class="artist-call__headline"><?php the_field( 'cta_apply_headline', 145 ); ?></h1>
            <div class="artist-call__paragraph">
                <?php the_field( 'cta_apply_content', 145 ); ?>
            </div>
            <a href="/apply" class="button">Apply</a>
        </div>
    </section>
<?php endif; ?>