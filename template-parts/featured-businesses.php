<section class="featured-businesses">
    <!-- <h2><?php _e( 'Destacados', 'zonabrunca2020' ) ?></h2> -->

    <div class="slider-nav">
        <?php
        $the_query = new WP_Query( array(
            'category_name' => 'destacados,featured',
            'post_type' => 'any'
        ) );
        ?>

        <?php 
        while ( $the_query->have_posts() ) : 
            $the_query->the_post();
            
            echo '<div><article class="card">';
                echo '<a href="' . esc_url( get_permalink() ) . '">';
                    $img = get_the_post_thumbnail($the_query->post->ID, 'medium');
                    if($img)
                        echo '<figure class="card-image">' . get_the_post_thumbnail($the_query->post->ID, 'medium') . '</figure>';
                    else {
                        echo '<figure class="card-image"><img src="wp-content/uploads/2020/02/PZ-scaled-1-300x169.jpg" class="attachment-medium size-medium wp-post-image" alt="" srcset="/wp-content/uploads/2020/02/PZ-scaled-1-300x169.jpg 300w, /wp-content/uploads/2020/02/PZ-scaled-1-1024x576.jpg 1024w, /wp-content/uploads/2020/02/PZ-scaled-1-768x432.jpg 768w, /wp-content/uploads/2020/02/PZ-scaled-1-1536x864.jpg 1536w, /wp-content/uploads/2020/02/PZ-scaled-1-2048x1152.jpg 2048w, /wp-content/uploads/2020/02/PZ-scaled-1-1200x675.jpg 1200w, /wp-content/uploads/2020/02/PZ-scaled-1-1980x1114.jpg 1980w" sizes="(max-width: 300px) 100vw, 300px" width="300" height="169"></figure>';
                    }
                echo '</a>';

                ?>
                <div class="content-card">
                    <div class="categories-card">
                        <span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
                        <?php the_category( ' ' ); ?>
                    </div>
                    <?php
                    echo '<a href="' . esc_url( get_permalink() ) . '">';
                    echo '<h3>' . get_the_title() . '</h3>';
                    echo '</a>';
                    ?>
                </div>
                <?php
                echo '</a>';
            echo '</article></div>';
        endwhile; 
        wp_reset_postdata(); 
        ?>
    </div>

    <script>
    jQuery(document).ready(function() {
        jQuery('.slider-nav').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: true,
            centerMode: true,
            focusOnSelect: true
        });
    })
    </script>
</section>
