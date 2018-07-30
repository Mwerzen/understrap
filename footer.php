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
                            <div class="col-md-3 mb-3">
                                <h6 class="mb-1">Airplane Buying Guide</h6>
                                <ul class="m-0 p-0">
                                    <li><a href="/sample-page/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 mb-3">
                                <h6 class="mb-1">Airplane Buying Guide</h6>
                                <ul class="m-0 p-0">
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 mb-3">
                                <h6 class="mb-1">Airplane Buying Guide</h6>
                                <ul class="m-0 p-0">
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 mb-3">
                                <h6 class="mb-1">Airplane Buying Guide</h6>
                                <ul class="m-0 p-0">
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                    <li><a href="/">Picking the Best Airplane</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row mt-5 pt-3" id="footer-legal">
                            <div class="col-md-4" id="footer-copy">
                                Copyright © by XYZ <?php the_time('Y'); ?>
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-5" id="footer-policies">
                                <a href="<?php echo get_page_link( get_page_by_title( "Disclaimer" )->ID ); ?>">Disclaimer</a> &bull;
                                <a href="<?php echo get_page_link( get_page_by_title( "Cookie Policy" )->ID ); ?>">Cookie Policy</a> &bull;
                                <a href="<?php echo get_page_link( get_page_by_title( "Privacy Policy" )->ID ); ?>">Privacy Policy</a> &bull;
                                <a href="<?php echo get_page_link( get_page_by_title( "Terms and Conditions" )->ID ); ?>">Terms and Conditions</a>
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


<?php if ( ! is_user_logged_in() ) : ?>
    <!-- insert Google Tag Code into theme if desired -->
<?php endif; ?>

</body>

</html>

