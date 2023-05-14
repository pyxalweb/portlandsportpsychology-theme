<?php /* Template Name: Individual Sessions */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | pbl-7 pbl-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <h1><?php echo get_field('heading'); ?></h1>
        <div class="mt-1">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
        </div>

        <a href="contact" class="button button--highlight | mi-center mt-2">Schedule your complimentary initial consult today!</a>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-icon.svg" alt="" class="content-bg__circle">
    </section>

    <section class="content width-df | dg gtc-3 g-clamp-1-3-3 | gtc-1-vw500 | mb-4 | ta-c-vw500 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <h2><?php echo get_field('callout_heading_1'); ?></h2>
            <p><?php echo get_field('callout_paragraph_1'); ?></p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <h2><?php echo get_field('callout_heading_2'); ?></h2>
            <p><?php echo get_field('callout_paragraph_2'); ?></p>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2" style="opacity:0;">
            <h2><?php echo get_field('callout_heading_3'); ?></h2>
            <p><?php echo get_field('callout_paragraph_3'); ?></p>
        </div>
    </section>

    <section class="content-photo | content-photo--gtc-66-33-vw800 | content-photo--gtc-1-vw500 | content width-df | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
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

                        <a href="contact" class="button button--highlight | mi-center">Schedule Consultation</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="image--maxheight-760 image--rounded image--circle--vw200" style="opacity:0;">
            <?php
            $image = get_field('split_content_image_1');
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
