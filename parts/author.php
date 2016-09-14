<div class="post-author-meta">
    <?php
    $first_name = get_the_author_meta( 'first_name' );
    $last_name  = get_the_author_meta( 'last_name' );
    $size       = "";
    $title      = types_render_usermeta_field( 'title', array() );
    ?>
    <div class="post-author-avatar">
        <?php echo get_avatar( $post->post_author, $size ); ?>
    </div>
    <div class="post-author-details">
        <div class="post-author-name">
            <strong><?php echo $first_name . " " . $last_name; ?></strong>
        </div>
        <div class="post-author-title">
            <?php echo $title;  ?>
        </div>
    </div>
</div>
