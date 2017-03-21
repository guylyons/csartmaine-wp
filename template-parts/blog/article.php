<div class="blog-article">
    <section class="post-tags">
        <?php get_template_part( 'template-parts/blog/tags' ); ?>
    </section>
    <article class="post-article">
        <?php the_content(); ?>
    </article>
    <section class="post-comments">
        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
    </section>
</div>
