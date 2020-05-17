<?php
get_header();

$uri = $_SERVER['REQUEST_URI'];
$uri = array_filter(explode("/", $uri));
$category = $uri[1] == 'category' ? $uri[2] : $uri[3];
?>

<main id="site-content" role="main">
  <h1 class="category-title"><?php single_cat_title(); ?></h1>
  <hr>

  <?php
  $query = new WP_Query( array(
    'category_name' => $category,
    'post_type' => 'any'
  ) );
  ?>

  <?php 
  while ( $query->have_posts() ) : 
    $query->the_post(); 
    get_template_part( 'template-parts/content', get_post_type() );
  endwhile; 
  wp_reset_postdata(); 
  ?>
</main>

<?php
get_footer();
?>
