<section class="featured-businesses">
    <!-- <h2><?php _e( 'Destacados', 'zonabrunca2020' ) ?></h2> -->

    <div class="slider-nav">
        <?php
        $the_query = new WP_Query( array(
            // 'category_name' => 'destacados,featured',
            'post_type' => array('cosas-que-hacer', 'donde-comer', 'donde-alojarse', 'servicios'),
            'nopaging' => true
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
                        echo '<figure class="card-image"><img src="/wp-content/themes/zonabrunca2020/imgs/BallenaUvita-mobile.jpg"></figure>';
                    }
                echo '</a>';

                ?>
                <div class="content-card">
                    <?php
                    echo '<a href="' . esc_url( get_permalink() ) . '">';
                    echo '<h3>' . get_the_title() . '</h3>';
                    echo '</a>';
                    ?>
                    <div class="categories-card">
                        <span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
                        <?php the_category( ', ' ); ?>
                    </div>
                    <div class="excerpt-card">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <?php
            echo '</article></div>';
        endwhile; 
        wp_reset_postdata(); 
        ?>
    </div>

    <script>
    jQuery(document).ready(function() {
        jQuery('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            // autoplay: true,
            // autoplaySpeed: 3000,
            speed: 300,
            dots: false,
            centerMode: true,
            // focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerMode: false,
                        }
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    })
    </script>
</section>
