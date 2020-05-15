<?php
get_header();

$uri = $_SERVER['REQUEST_URI'];
$uri = array_filter(explode("/", $uri));
$category = $uri[2];
?>

<main id="site-content" role="main">

  <div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

    <div class="entry-content">
      <h2 class="widget-title"><?php echo $category; ?></h2>

      <?php
      $query = new WP_Query( array(
        'category_name' => $category,
        'post_type' => 'any'
      ) );
      ?>

      <?php while ( $query->have_posts() ) : $query->the_post(); ?>

        <ul>
        <li><strong><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></strong><br />

        <?php the_excerpt(); ?> </li>
        </ul>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>


<main>

<?php
get_footer();
?>
