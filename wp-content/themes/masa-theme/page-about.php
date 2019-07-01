<?php get_header(); ?>

    <div class="about">

        <!-- A B O U T -->
        <div id="aboutContainer" class="about__container">
            <?php if( have_rows('about_group') ):

            while( have_rows('about_group') ): the_row();

            $titleAbout = get_sub_field('title_about');
            $imageAbout = get_sub_field('image_about');
            $contentAbout = get_sub_field('content_about');

            ?>
            <div class="about__masa">
                <img class="about__masa--logo" src="<?php echo THEMEURL; ?>/images/about/masa.svg" alt="">
                <img class="about__masa--one" src="<?php echo $imageAbout['url']; ?>" alt="<?php echo $imageAbout['alt']; ?>" />
            </div>

            <div class="about__content">
                <h3><?php echo $titleAbout; ?></h3>
                <div class="text" >
                    <?php echo $contentAbout; ?>
                </div>
            </div>

            <?php endwhile; ?>

            <?php endif; ?>
        </div>

        <!-- F O U N D E R S  -->
        <div id="foundersContainer" class="about__container">
            <?php if( have_rows('founders_group') ):

            while( have_rows('founders_group') ): the_row();

            $titleFounders = get_sub_field('title_founders');
            $imageFounders = get_sub_field('imagen_founders');
            $contentFounders = get_sub_field('content_founders');

            ?>
            <div class="about__masa">
                <img class="about__masa--logo" src="<?php echo THEMEURL; ?>/images/about/masa.svg" alt="">
                <img class="about__masa--two" src="<?php echo $imageFounders['url']; ?>" alt="<?php echo $imageFounders['alt']; ?>" />
            </div>

            <div class="about__content">
                <h3><?php echo $titleFounders; ?></h3>
                <div class="text founders">
                    <?php echo $contentFounders; ?>
                </div>
            </div>

            <?php endwhile; ?>

            <?php endif; ?>
        </div>

        <!-- C O N T A C T  -->
        <div id="contactContainer" class="about__container">
            <?php if( have_rows('contact_group') ):

            while( have_rows('contact_group') ): the_row();

            $titleContact = get_sub_field('title_contact');
            $imageContact = get_sub_field('image_contact');
            $contentContact = get_sub_field('content_contact');

            ?>
            <div class="about__masa">
                <img class="about__masa--logo" src="<?php echo THEMEURL; ?>/images/about/masa.svg" alt="">
                <img class="about__masa--three" src="<?php echo $imageContact['url']; ?>" alt="<?php echo $imageContact['alt']; ?>" />
            </div>

            <div class="about__content contact">
                <h3><?php echo $titleContact; ?></h3>
                <div class="text">
                    <?php echo $contentContact; ?>
                </div>
            </div>

            <?php endwhile; ?>

            <?php endif; ?>
        </div>

        <div class="about__footer">
            <ul>
                <li id="about" class="about__footer-link">About</li>
                <li id="founders" class="about__footer-link">Founders</li>
                <li id="contact" class="about__footer-link">Contact</li>
            </ul>
        </div>
    </div>

<?php get_footer();
