<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zonabrunca2020
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

	get_template_part( 'template-parts/entry-header-front-page' );

	get_template_part( 'template-parts/services-bar' );

	?>

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();
		?>

	</div> <!--section-inner-->

	<?php
	get_template_part( 'template-parts/cards-zonas' );
	?>

</article><!-- .post -->
