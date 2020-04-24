<?php
get_header();


$the_query = new WP_Query( array( 'category_name' => 'cosas-que-hacer' ) );
if ( $the_query->have_posts() ) {
  while ( $the_query->have_posts() ) {
    echo '<h2>' . get_the_title() . '</h2>';
  }
} else {
    // no posts found
    echo 'No se encontraron resultados';
}
/* Restore original Post Data */
wp_reset_postdata();

get_footer();
?>
