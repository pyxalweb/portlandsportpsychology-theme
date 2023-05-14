<?php /* Template Name: Mentoring */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
    <section class="content width-df | pbl-7 pbl-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <h1><?php echo get_field('heading'); ?></h1>
        <div class="mt-1">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
        </div>

        <a href="contact" class="button button--highlight | mi-center mt-2">Schedule Consultation</a>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-icon.svg" alt="" class="content-bg__circle">
    </section>

    <section class="content-photo | content-photo--gtc-66-33-vw800 | content-photo--gtc-1-vw500 | content width-df | mb-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="content-photo__container | mb-2-vw500 mb-1--h2" style="opacity:0;">
            <div>
                <h2><?php echo get_field('main_content_heading'); ?></h2>
                <?php echo get_field('main_content'); ?>
                
                <div class="box | mt-2">
                    <div class="box__item | box__list | list--dots">
                        <?php echo get_field('list_items'); ?>
                    </div>

                    <div class="box__item | box__sale">
                        <div class="text-800">
                            <p><?php echo get_field('cost'); ?></p>
                        </div>

                        <a href="/contact" class="button button--highlight | mi-center">Schedule Consultation</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="image--maxheight-760 image--rounded image--circle--vw200 | pb-3-vw200" style="opacity:0;">
            <?php
            $image = get_field('main_content_image');
            if ($image):
                $url = $image['url'];
                $alt = $image['alt'];
            ?>
            <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="676" height="760">
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
