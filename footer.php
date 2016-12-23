<section class="reminder">
    <h3>Never miss a beat!</h3>
    <p>The CSArt Maine News Share has you covered!</p>
    <form action="//csartmaine.us11.list-manage.com/subscribe/post?u=654a644cb0e243b967829f801&amp;id=4ca57f6a57" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate newsletter-form-wrap" target="_blank" novalidate>
        <input class="email" placeholder="email address" type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">

        <div id="mce-responses">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>

            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_654a644cb0e243b967829f801_4ca57f6a57" tabindex="-1" value=""></div>

            <input type="submit" value="OK" name="subscribe" id="mc-embedded-subscribe" class="submit">
        </div>
    </form>
    <div class="ei-close"></div>
</section>

<section class="artist-application">
    <div class="artist-application__inner">
        <h2>Artist Inquiry Form</h2>
        <?php echo do_shortcode( '[ninja_forms id=5]' ); ?>
    </div>
</section>

<footer class="footer-wrap">
    <div class="container">
        <nav class="footer-nav row">
            <section class="footer-statement">
                <?php the_field( 'footer_statement', 8 ); ?>
            </section>
            <section>
                <h5>Navigate</h5>
                <?php csart_footer_nav(); ?>
            </section>
            <section>
                <ul class="social-icons">
                    <h5>Follow</h5>
                    <li><div data-icon="ei-sc-facebook" data-size="s"></div> <a href="https://facebook.com/csartmaine">Facebook</a></li>
                    <li><div data-icon="ei-sc-instagram" data-size="s"></div> <a href="https://instagram.com/csartmaine">Instagram</a></li>
                    <li><div data-icon="ei-sc-twitter" data-size="s"></div> <a href="https://twitter.com/csartmaine">Twitter</a></li>
                </ul>
            </section>
        </nav>
    </div>
    <section class="footer__callout">
        <section class="container">
            <h5 class="title">
                Made by creative people <em>for</em> creative people.
            </h5>
            <div style="color: #404040;">
                © 2016 CSArt Maine, LLC.
            </div>
            <div class="pay-methods">
                <?php echo do_shortcode( '[wc_payment_methods]' ); ?>
            </div>
        </section>
    </section>
</footer>
<?php wp_footer(); ?>

<?php if ( ! current_user_can( 'edit_pages' ) ) : ?>
    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-87481709-1', 'auto');
      ga('send', 'pageview');

    </script>
<?php endif; ?>

</body>
</html>
