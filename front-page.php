<?php
/**
 * The template for displaying the font page.
 *
 * Based on singular.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zonabrunca2020
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content-front-page' );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
