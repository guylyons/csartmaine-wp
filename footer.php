
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
                <?php the_field( 'footer_statement' ); ?>
                <p>
                    CSArt Maine is a subscription-based art share program based in Portland, ME. Inspired by a national movement, CSArt Maine creates alternative and sustainable models for producing and purchasing art while fostering a community for established and emerging artists in Maine.
                </p>
            </section>
            <section>
                <ul>
                    <h5>Contact</h5>
                    <li><a href="mailto:meg@csartmaine.org">meg willing</a></li>
                    <li><a href="mailto:alana@csartmaine.org">Alana Dao</a></li>
                    <li><a href="mailto:guy@csartmaine.org">Guy Lyons</a></li>
                </ul>
            </section>
            <section>
                <h5>Navigate</h5>
                <?php csart_footer_nav(); ?>
            </section>
            <section>
                <ul>
                    <h5>Follow</h5>
                    <li><a href="https://facebook.com/csartmaine">Facebook</a></li>
                    <li><a href="https://instagram.com/csartmaine">Instagram</a></li>
                    <li><a href="https://twitter.com/csartmaine">Twitter</a></li>
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
        </section>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

<div id="fb-root"></div>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>


<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</html>
