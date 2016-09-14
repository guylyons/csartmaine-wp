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
                ?>
                <section class="slider-item" style="background-image: url('<?php echo $landing_slider_url; ?>'); ?>')">
                    <section class="slider__opacity-layer">
                    </section>
                    <article class="slider-content half">
                        <?php echo $landing_slider_content; ?>
                        <a href="<?php echo $landing_slider_link; ?>" class="button">Learn More</a>
                    </article>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <section class="container">
        <section class="row">
            <?php get_template_part( 'parts/recent', 'posts' ); ?>
        </section>
        <section>
            <h5>Instagram Feed</h5>
            <?php echo wdi_feed(array('id'=>'1')); ?>
        </section>
    </section>

    <section class="container row">
        <h2>Meet a Local Artist</h2>
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
            $avatar = get_field( 'artist_avatar' );
            $avatar_url = $avatar['sizes']['product_thumb'];

            ?>

            <section class="image-doubler--outer" style="background-image: url('<?php echo $avatar_url; ?>');">
                <section class="image-doubler--inner">
                    <a href="<?php echo get_permalink(); ?>">
                        <img src="<?php echo $avatar_url; ?>" alt="<?php echo $name; ?>" />
                    </a>
                </section>
            </section>

        <?php endwhile; wp_reset_query(); ?>

    </section>

    <section class="newsletter-signup">
        <div class="container row">
            <?php the_field( 'newsletter_signup' ); ?>
            <form action="//csartmaine.us11.list-manage.com/subscribe/post?u=654a644cb0e243b967829f801&amp;id=4ca57f6a57" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-form-wrap" target="_blank" novalidate>
                <input class="email" placeholder="email address" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">

                <div id="mce-responses">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>

                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_654a644cb0e243b967829f801_4ca57f6a57" tabindex="-1" value=""></div>

                    <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="gradient_circle">
                </div>
            </form>
        </div>
    </section>

    <section class="contact-us" id="contactUs">
        <div class="container row">
            <section class="half"><?php the_field( 'contact_us_block' ); ?></section>
            <section class="half"><?php echo do_shortcode('[ninja_forms id=1]'); ?></section>
        </div>
    </section>

    <?php get_template_part( 'parts/recent-products' ); ?>

</section><!-- end container -->
</main>

<?php get_footer(); ?>
