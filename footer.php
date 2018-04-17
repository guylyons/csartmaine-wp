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
                    <li><a href="https://facebook.com/csartmaine">Facebook</a></li>
                    <li><a href="https://instagram.com/csartmaine">Instagram</a></li>
                    <li><a href="https://twitter.com/csartmaine">Twitter</a></li>
                </ul>
            </section>
        </nav>
    </div>
    <section class="footer__callout">
        <section>
            <p>© 2018 CSArt Maine, LLC.</p>
        </section>
    </section>
</footer>
<?php wp_footer(); ?>

<?php get_template_part( 'template-parts/google-analytics' ); ?>

</body>
</html>
