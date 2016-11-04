<?php
// index.php

get_header();
?>

<main role="main" class="main">

    <section class="slider row section-1" id="front-page-slider">
        <?php $landing_slider = get_field( 'landing_slider' ); ?>
        <?php if( $landing_slider ): ?>
            <?php while( have_rows( 'landing_slider' )): the_row(); ?>
                <?php
                $landing_slider_hero    = get_sub_field( 'landing_slider_hero' );
                $landing_slider_url     = $landing_slider_hero['url'];
                $landing_slider_content = get_sub_field( 'landing_slider_content' );
                $landing_slider_link    = get_sub_field( 'landing_slider_link' );
                $slider_button_text     = get_sub_field( 'slider_button_text' );
                ?>
                <section class="slider-item" style="background-image: url('<?php echo $landing_slider_url; ?>'); ?>')">
                    <section class="slider__opacity-layer">
                    </section>
                    <article class="slider-content half">
                        <?php echo $landing_slider_content; ?>
                        <?php if( $landing_slider_link ): ?>
                            <a href="<?php echo $landing_slider_link; ?>" class="button"><?php echo $slider_button_text; ?></a>
                        <?php endif ?>
                    </article>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section class="container">
        <section class="row">
            <?php get_template_part( 'parts/recent', 'posts' ); ?>
        </section>
    </section>

    <?php get_template_part( 'parts/newsletter-signup' ); ?>

    <section class="container row">
        <?php
        $args = array(
            'post_type'  =>  'artists',
            'orderby'      =>  'rand',
            'posts_per_page' => 1
        );
        $artist_query = new WP_Query( $args );
        ?>
        <?php while( $artist_query->have_posts() ) : $artist_query->the_post(); ?>

            <?php
            $name = get_field( 'artist_name' );
            $bio  = get_field( 'artist_bio' );
            $avatar = get_field( 'artist_avatar' );
            if ( $avatar['sizes']['product_thumb'] ) {
                $avatar_url = $avatar['sizes']['product_thumb'];
            } else {
                $avatar_url = '';
            }

            ?>
            <section class="image-doubler--outer" style="background-image: url('<?php echo $avatar_url; ?>');">
                <section class="image-doubler--inner">
                    <a href="<?php echo get_permalink(); ?>">
                        <img src="<?php echo $avatar_url; ?>" alt="<?php echo $name; ?>" />
                    </a>
                </section>
            </section>
            <section class="half">
                <h2>Meet <?php echo $name ?></h2>
                <?php echo $bio ?>
            </section>

        <?php endwhile; wp_reset_query(); ?>

    </section>

    <?php get_template_part( 'parts/recent-products' ); ?>

    </section><!-- end container -->
</main>

<?php get_footer(); ?>
