<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <nav aria-label="breadcrumb">
        <ol id="breadcrumb" class="breadcrumb p-0 mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo get_page_link( get_page_by_title( "Blog" )->ID ); ?>">Blog</a></li>
            <li class="breadcrumb-item"><a href="#"><?php the_category(' '); ?></a></li>
        </ol>
    </nav>

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
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
