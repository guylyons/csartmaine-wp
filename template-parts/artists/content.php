<?php
/* artist content */

$name = get_field('artist_name');
$avatar = get_field('artist_avatar');
if ($avatar) {
    $avatar_url = $avatar['url'];
}
$season = get_field('artist_season');
// var_dump($avatar);
?>

<div class="artist-item fifth">
    <a href="<?php the_permalink(); ?>" class="artist-item">
        <img src="<?php echo $avatar["sizes"]["thumbnail"]; ?>" alt="<?php echo $avatar["alt"]; ?>">
        <h2 class="artist-item__name"><?php echo $name; ?></h2>
    </a>
</div>
