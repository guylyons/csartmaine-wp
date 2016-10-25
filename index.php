<?php
// index.php

get_header();
?>

<?php if( have_posts() ) : ?>
    <section class="content-area" id="content-area">

        <?php get_template_part( 'parts/hero' ); ?>

        <main role="main" class="site-main" id="main">

            <section class="newsletter-signup">
		<section class="row blog-container" style="text-align: center;">
                    <h2>Stay in The Loop with CSArt Maine.</h2>
                    <p>
			Get the newest information about what’s going on with your favorite artists, community supported art, and other random happenings around Maine and elsewhere.
                    </p>

                    <form action="//csartmaine.us11.list-manage.com/subscribe/post?u=654a644cb0e243b967829f801&amp;id=4ca57f6a57" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-form-wrap" target="_blank" novalidate>
			<input class="email" placeholder="email address" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">

			<div id="mce-responses">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>

                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_654a644cb0e243b967829f801_4ca57f6a57" tabindex="-1" value=""></div>

                            <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="gradient_circle">
			</div>
                    </form>

		</section>
            </section>

            <section class="container index-blog">
                <section class="row">

                    <?php while( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'parts/index', 'blog' ); ?>
                    <?php endwhile; ?>

                </section>
            </section>

        </main>
    </section>
<?php endif; ?>

<?php get_template_part( 'parts/recent', 'products' ); ?>

<?php get_footer(); ?>
