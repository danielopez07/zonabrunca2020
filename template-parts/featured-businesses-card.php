<div><article class="card">
    <a href="<?php esc_url( get_permalink() ) ?> '">
    <?php
        $img = get_the_post_thumbnail($the_query->post->ID, 'medium');
        if($img)
            echo '<figure class="card-image">' . get_the_post_thumbnail($the_query->post->ID, 'medium') . '</figure>';
        else {
            echo '<figure class="card-image"><img src="/wp-content/themes/zonabrunca2020/imgs/BallenaUvita-mobile.jpg"></figure>';
        }
    ?>
    </a>

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
</article></div>