<?php
$name = get_field( 'artist_name' );
$avatar = get_field( 'artist_avatar' );
if ($avatar) {
    $avatar_url = $avatar['url'];
}
$season = get_field( 'artist_season' );

?>

<a href="<?php the_permalink(); ?>" class="artist-item">
    <div class="artist-item__avatar" style="background-image: url('<?php echo $avatar_url; ?>')">
        <h2 class="artist-item__name"><?php echo $name; ?></h2>
    </div>
    <div class="artist-item__meta">
        <div>
            <?php echo $name; ?>
        </div>
        <div class="tiny-hr">
        </div>
        <div>
            View Profile
        </div>
    </div>
</a>
