<?php $tags = wp_get_post_tags( $post->ID ); ?>
<?php if( $tags ): ?>
    <ul class="post-tags">
        <?php foreach( $tags as $tag ): ?>
            <li class="post-tag">
                <?php echo $tag->name; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
