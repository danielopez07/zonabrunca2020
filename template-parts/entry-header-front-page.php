<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>

<header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">

	<div class="entry-header-inner section-inner medium">
		<?php get_search_form(); ?>
		<?php // echo get_the_post_thumbnail_url(); ?>



	</div><!-- .entry-header-inner -->

</header><!-- .entry-header -->
