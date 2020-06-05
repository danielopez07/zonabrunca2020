<section class="featured-businesses">
    <!-- <h2><?php _e( 'Destacados', 'zonabrunca2020' ) ?></h2> -->

    <div class="slider-nav">
        <?php
        if( is_front_page() ) {
            $the_query = new WP_Query( array(
                // 'category_name' => 'destacados,featured',
                'post_type' => array('cosas-que-hacer', 'donde-comer', 'donde-alojarse', 'servicios'),
                'nopaging' => true
            ) );
        } else {
            // for use in regions pages
            
            $uri = $_SERVER['REQUEST_URI'];
            $uri = array_filter( explode( "/", $uri ) );
            if ( $uri[1] != 'zona' ) {
                $category = $uri[1] . '-' . $uri[3];
                $category = str_replace( "-2", "", $category );
            } else {
                $category = $uri[2];
            }

            $the_query = new WP_Query( array(
                'category_name' => $category,
                'post_type' => array('cosas-que-hacer', 'donde-comer', 'donde-alojarse', 'servicios'),
                'nopaging' => true
            ) );
        }
        ?>

        <?php 
        while ( $the_query->have_posts() ) : 
            $the_query->the_post();

            set_query_var( 'the_query', $the_query );
            get_template_part( 'template-parts/featured-businesses-card' );
        endwhile; 
        wp_reset_postdata(); 
        ?>
    </div>
</section>
