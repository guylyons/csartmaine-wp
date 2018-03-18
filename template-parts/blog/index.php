<?php
/**
* The template for displaying link post formats
*
* Used for both single and index/archive/search.
*
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-item third'); ?>>
    <section class="entry-content">
        <a href="<?php the_permalink(); ?>" class="index-content">
            <?php $hero_url = get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>
            <section class="index-details">
                <img src="<?php echo $hero_url; ?>">
                <h2 class="index-title"><?php the_title(); ?></h2>

                <div class="index-author"><time class="post-date"><?php the_date('d F, y'); ?></time> By <?php the_author(); ?></div>
            </section>
        </a>
    </section>
</article>
