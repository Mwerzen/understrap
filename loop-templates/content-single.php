<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php get_breadcrumb(); ?>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title mt-2 mb-0">', '</h1>' ); ?>

		<div class="entry-meta mb-4">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

    <div class="row justify-content-center">
        <div class="pr-2 pl-2">
	        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
        </div>
    </div>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
