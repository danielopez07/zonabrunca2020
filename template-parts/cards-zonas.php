<section class="zona-cards">
<?php
// The Query
$args = array('post_type' => 'zona');
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<article class="zona-card">';
        echo '<a href="' . get_permalink() . '">';
        $img = get_the_post_thumbnail($the_query->post->ID, 'medium');
        if($img)
          echo '<figure class="zona-card-image">' . get_the_post_thumbnail($the_query->post->ID, 'medium') . '</figure>';
        else {
          echo '<figure class="zona-card-image"><img src="wp-content/uploads/2020/02/PZ-scaled-1-300x169.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="/wp-content/uploads/2020/02/PZ-scaled-1-300x169.jpg 300w, /wp-content/uploads/2020/02/PZ-scaled-1-1024x576.jpg 1024w, /wp-content/uploads/2020/02/PZ-scaled-1-768x432.jpg 768w, /wp-content/uploads/2020/02/PZ-scaled-1-1536x864.jpg 1536w, /wp-content/uploads/2020/02/PZ-scaled-1-2048x1152.jpg 2048w, /wp-content/uploads/2020/02/PZ-scaled-1-1200x675.jpg 1200w, /wp-content/uploads/2020/02/PZ-scaled-1-1980x1114.jpg 1980w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="169"></figure>';
        }
        echo '<h2>' . get_the_title() . '</h2>';
        echo '</a>';
        echo '</article>';
    }
} else {
    // no posts found
    echo 'No se encontraron resultados';
}
/* Restore original Post Data */
wp_reset_postdata();
?>
</section>
