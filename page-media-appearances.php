<?php /* Template Name: Media Appearances */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
    <section class="pbl-7 pbl-3-vw400 mb-7 mb-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df">
            <h1><?php echo get_field('heading'); ?></h1>
            <div class="mt-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
            </div>
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

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw500 | mbl-7 mbl-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div>
            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2><?php echo get_field('media_heading_1'); ?></h2>
                <?php echo get_field('media_description_1'); ?>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <?php echo get_field('media_content_1'); ?>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>

            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2><?php echo get_field('media_heading_2'); ?></h2>
                <?php echo get_field('media_description_2'); ?>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <?php echo get_field('media_content_2'); ?>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>

            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2><?php echo get_field('media_heading_3'); ?></h2>
                <?php echo get_field('media_description_3'); ?>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <?php echo get_field('media_content_3'); ?>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>
        </div>

        <div>
            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2><?php echo get_field('media_heading_4'); ?></h2>
                <?php echo get_field('media_description_4'); ?>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <?php echo get_field('media_content_4'); ?>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>

            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2><?php echo get_field('media_heading_5'); ?></h2>
                <?php echo get_field('media_description_5'); ?>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <?php echo get_field('media_content_5'); ?>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>

            <div class="expandable-list | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" data-reduce="3">
                <h2><?php echo get_field('media_heading_6'); ?></h2>
                <?php echo get_field('media_description_6'); ?>

                <div class="list--dots | mbl-2 bg-grey-100 p-2 br-2 bs-400">
                    <?php echo get_field('media_content_6'); ?>

                    <button class="expandable-list__more">View More</button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
