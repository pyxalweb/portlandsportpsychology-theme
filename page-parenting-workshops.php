<?php /* Template Name: Parenting Workshops */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
    <section class="masthead-interior | pbl-7 pbl-3-vw400 mb-4 mb-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
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

    <section class="content-photo | content-photo--gtc-66-33-vw800 | content-photo--gtc-1-vw500 | content width-df | mb-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
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

    <section class="mt-4 pbl-7 pbl-3-vw400 | bg--stripe | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df | ta-c text-1000--h2">
            <h2>What clients are saying</h2>

            <div class="testimonials | content-slider pagination-text | mt-1 | text-600">
                <div class="glide" data-autoplay="10000">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <figure class="testimonials__item | glide__slide">
                                <blockquote><?php echo get_field('testimonial_quote_1'); ?></blockquote>
                                <figcaption><?php echo get_field('testimonial_name_1'); ?>, <cite><?php echo get_field('testimonial_organization_1'); ?></cite></figcaption>
                            </figure>

                            <figure class="testimonials__item | glide__slide">
                                <blockquote><?php echo get_field('testimonial_quote_2'); ?></blockquote>
                                <figcaption><?php echo get_field('testimonial_name_2'); ?>, <cite><?php echo get_field('testimonial_organization_2'); ?></cite></figcaption>
                            </figure>
                        </div>

                        <div class="glide__bullets" data-glide-el="controls[nav]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
