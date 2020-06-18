<div><article class="card">
    <a href="<?php echo esc_url( get_permalink() ) ?> ">
    <?php
        $img = get_the_post_thumbnail($the_query->post->ID, 'medium', ['loading' => 'lazy']);
        if($img)
            echo '<figure class="card-image">' . $img . '</figure>';
        else {
            echo '<figure class="card-image"><img loading="lazy" src="/wp-content/themes/zonabrunca2020/imgs/BallenaUvita-mobile.jpg"></figure>';
        }
    ?>
    </a>

    <div class="content-card">
        <a href="<?php echo esc_url( get_permalink() ) ?> ">
            <h3><?php the_title() ?></h3>
        </a>
        <div class="categories-card">
            <span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
            <?php the_category( ', ' ); ?>
        </div>
        <a href="<?php echo esc_url( get_permalink() ) ?> ">
            <div class="excerpt-card">
                <?php the_excerpt(); ?>
            </div>
        </a>
    </div>
</article></div>