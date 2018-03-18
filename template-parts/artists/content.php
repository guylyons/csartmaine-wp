<?php
/* artist content */

$name = get_field('artist_name');
$avatar = get_field('artist_avatar');
$season = get_field('artist_season');
$terms = wp_get_post_terms($post->ID, 'season', $args);
?>

<div class="artist-item fifth">
    <a href="<?php the_permalink(); ?>" class="artist-item">
        <img src="<?php echo $avatar["sizes"]["thumbnail"]; ?>" alt="<?php echo $avatar["alt"]; ?>">
    </a>
    <div class="artist-item__name">
        <a href="<?php the_permalink(); ?>" class="artist-item"><?php echo $name; ?></a>
        <div class="artist-item__tax">
            <?php foreach ($terms as $term) : ?>
                <?php echo $term->name; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
