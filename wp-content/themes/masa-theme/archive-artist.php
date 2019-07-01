<?php get_header(); ?>

<?php

    global $wp_query;

    // Query post type 'artist'
    $query_args = array(
        'post_type'         => 'artist',
        'post_status'       => 'publish',
        'posts_per_page'    => -1,
    );

    $query = new WP_Query( $query_args );

?>
    <section class="archive-artist">
        
        <?php get_template_part('views/general/sidebar'); ?>

        <div class="archive-artist__return">
            <a href=" <?php echo BLOGURL ?>/exhibition">Exhibition</a>
        </div>
        
        <div class="archive-artist__container">
            
            <h2 class="archive-artist__title">
                Artists
            </h2>

            <div class="archive-artist__loop">
                
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <!-- <div class="artist__row"> -->

                        <!-- <div class="artist__name"> -->
                            <a class="artist__name" href=" <?php echo get_permalink(); ?> ">
                                <?php the_title(); ?>
                            </a>
                        <!-- </div> -->
    
                        <div class="artist__thumbnail">
                            <?php echo get_the_post_thumbnail( $_post->ID, 'large' ); ?>
                        </div>

                    <!-- </div> -->
                        
                <?php endwhile; endif;?>

            </div>
            
        </div>

    </section>

<?php get_footer();?>