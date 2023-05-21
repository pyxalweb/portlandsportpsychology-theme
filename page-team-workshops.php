<?php /* Template Name: Team Workshops */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="masthead-interior | pbl-7 pbl-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df">
            <h1><?php echo get_field('heading'); ?></h1>
            <div class="mt-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
            </div>
            <a href="contact" class="button button--highlight | mi-center mt-2">Schedule Consultation</a>
        </div>

        <?php
		$image = get_field('masthead');
		if ($image):
			$url = $image['url'];
			$alt = $image['alt'];
		?>
		<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="1920" height="500" class="content-bg__photo">
        <?php endif; ?>
    </section>

    <section class="mt-4 animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df | text-1300--h2 | mb-2 ta-c">
            <h2><?php echo get_field('workshop_topics_group_heading'); ?></h2>
        </div>

        <div class="content width-df | numbered-content | boxed-content | mb-4 ta-c | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
            <div class="boxed-content__item | bg-white b-2px-grey-200 br-2 bs-300" style="opacity:0;">
                <h2><?php echo get_field('workshop_topic_heading_1'); ?></h2>
                <p><?php echo get_field('workshop_topic_paragraph_1'); ?></p>
            </div>

            <div class="boxed-content__item | bg-white b-2px-grey-200 br-2 bs-300" style="opacity:0;">
                <h2><?php echo get_field('workshop_topic_heading_2'); ?></h2>
                <p><?php echo get_field('workshop_topic_paragraph_2'); ?></p>
            </div>
        
            <div class="boxed-content__item | bg-white b-2px-grey-200 br-2 bs-300" style="opacity:0;">
                <h2><?php echo get_field('workshop_topic_heading_3'); ?></h2>
                <p><?php echo get_field('workshop_topic_paragraph_3'); ?></p>
            </div>

            <div class="boxed-content__item | bg-white b-2px-grey-200 br-2 bs-300" style="opacity:0;">
                <h2><?php echo get_field('workshop_topic_heading_4'); ?></h2>
                <p><?php echo get_field('workshop_topic_paragraph_4'); ?></p>
            </div>

            <div class="boxed-content__item | bg-white b-2px-grey-100 br-2 bs-300" style="opacity:0;">
                <h2><?php echo get_field('workshop_topic_heading_5'); ?></h2>
                <p><?php echo get_field('workshop_topic_paragraph_5'); ?></p>
            </div>

            <div class="boxed-content__item | bg-white b-2px-grey-100 br-2 bs-300" style="opacity:0;">
                <h2><?php echo get_field('workshop_topic_heading_6'); ?></h2>
                <p><?php echo get_field('workshop_topic_paragraph_6'); ?></p>
            </div>
        </div>
    </section>

    <section class="content-photo | content-photo--gtc-66-33-vw800 | content-photo--gtc-1-vw500 | content width-df | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="content-photo__container | mb-4-vw500 mb-1--h2" style="opacity:0;">
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

                        <div class="text-300">
                            <p><?php echo get_field('travel_fees'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="image image--rounded image--center--vw500 image--circle--vw500 image--size-50--vw500 image--size-100--vw200" style="opacity:0;">
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
