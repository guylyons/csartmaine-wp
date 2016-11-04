<?php
/**
 * The template for displaying link post formats
 *
 * Used for both single and index/archive/search.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'index-item' ); ?>>

	<section class="entry-content">

        <a href="<?php the_permalink(); ?>" class="index-content">
			<?php $hero_url = get_the_post_thumbnail_url( $post->ID, 'index_blog' ); ?>
            <section class="index-details"  style="background-image: url('<?php echo $hero_url; ?>');">
            	<time class="post-date"><?php the_date( 'd F, Y' ); ?></time>
	                <h2 class="index-title"><?php the_title(); ?></h2>
	                <div class="index-author">By <?php the_author(); ?></div>
            	<div class="index-excerpt"><?php the_excerpt(); ?></div>
            </section>
        </a>

	</section>

</article>
