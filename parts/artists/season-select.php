<?php
$season_terms = get_terms( array(
    'taxonomy'   =>   'season',
    'hide_empty' =>   false
) );

?>

<section class="artist_season_select">
    <div class="row">
        <div class="artist_season_select--title">
            Season Select
        </div>
        <?php foreach( $season_terms as $term ): ?>
            <a href="<?php echo get_term_link( $term->term_taxonomy_id ) ?>">
                <div class="item">
                    <?php echo $term->slug; ?>
                </div>
            </a>
            <?php if( is_page( $term->slug ) ): ?>
                Fuck.
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
