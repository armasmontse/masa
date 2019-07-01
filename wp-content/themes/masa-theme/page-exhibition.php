<?php get_header(); 


$content = get_field('content_exhibition');
$images = get_field('galery_exhibition');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
$linkPdf = get_field('pdf_exhibition');

?>

    <div class="exhibition">
        
        <?php get_template_part('views/general/sidebar'); ?>

        <div class="exhibition__container">
            <h2 class="exhibition__title"><?php the_title(); ?></h2>
            <h3 class="exhibition__sbtitle"><?php the_field('subtitle_exhibition'); ?></h3>

            <div class="exhibition__content">
                <div class="exhibition__text">
                    <?php the_field('content_exhibition');?>
                    <?php
                    if( $linkPdf ): ?>
                        <a class="exhibition__link" href="<?php $linkPdf ?>">DOWNLOAPRESS-RELEASE</a>
                    <?php endif; ?>
                </div>
                
                <div class="exhibition__gallery">
                    <div class="exhibition__list">
                        <h3 class="title"><?php the_field('title_collective_exhibition');?></h3>
                        <h4 class="subtitle"><?php the_field('subtitle_collective_exhibition');?></h4>
                        <?php the_field('content_collective_exhibition');?>
                        <h3 class="title marg"><?php the_field('title_additional_exhibition');?></h3>
                        <?php the_field('content_additional_exhibition');?>
                    </div>

                    <?php
                    if( $images ): ?>
                        <ul>
                            <?php foreach( $images as $image ): ?>
                                <li>
                                
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                </div>
            </div>

        </div>
    </div>

<?php get_footer(); ?>