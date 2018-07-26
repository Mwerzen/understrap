<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper navbar-fixed-bottom" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

        <footer class="site-footer" id="colophon">

		    <div class="row">

			    <div class="col-md-12">

					<div class="site-info">

                        <div class="row" id="footer-links">
                            <div class="col-md-3">
                                <h6>Airplane Buying Guide</h6>
                                <ul class="m-0 p-0">
                                    <li><a href="/sample-page/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h6>Waterski Buying Guide</h6>
                                <ul class="m-0 p-0">
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h6>Jetpack Buying Guide</h6>
                                <ul class="m-0 p-0">
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h6>Car Buying Guide</h6>
                                <ul class="m-0 p-0">
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row mt-5 pt-3" id="footer-legal">
                            <div class="col-md-4" id="footer-copy">
                                Copyright © by Mike Werzen <?php the_time('Y'); ?>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-5" id="footer-policies">
                                <a href>Disclaimer</a> &bull;
                                <a href>Cookie Policy</a> &bull;
                                <a href>Privacy Policy</a> &bull;
                                <a href>Terms and Conditions</a>
                            </div>

                        </div>
					</div><!-- .site-info -->

			    </div><!--col end -->

		    </div><!-- row end -->

        </footer>

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

