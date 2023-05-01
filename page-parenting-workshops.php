<?php /* Template Name: Parenting Workshops */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

// get_template_part( 'template-parts/content', 'masthead' );
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | pbl-7 pbl-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <h1>Parenting Workshops</h1>
        <div class="mt-1">
            <p>Parent workshops are dynamic presentations, which introduce success strategies to best support student-athletes.</p>
        </div>

        <a href="contact" class="button button--highlight | mi-center mt-2">Schedule your complimentary initial consult today!</a>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-icon.svg" alt="" class="content-bg__circle">
    </section>

    <section class="content-photo | content-photo--gtc-66-33-vw800 | content-photo--gtc-1-vw500 | content width-df | mb-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="content-photo__container | mb-2-vw500 mb-1--h2" style="opacity:0;">
            <div>
                <?php echo get_field('split_content_text_1'); ?>
                
                <div class="box | mt-2">
                    <div class="box__item | box__list | list--dots">
                        <h2>Workshop Objectives</h2>
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

    <section class="mt-7 mt-3-vw400 pbl-7 pbl-3-vw400 | bg--stripe | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df | ta-c text-1000--h2">
            <h2>What clients are saying</h2>

            <div class="testimonials | content-slider pagination-text | mt-1 | text-600">
                <div class="glide" data-autoplay="10000">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <figure class="testimonials__item | glide__slide">
                                <blockquote>Elliott's approach to parent education provides immediate rewards to those in attendance. By teaching our parents how to best promote the success of their children, we now have a much calmer and more supportive sideline.</blockquote>
                                <figcaption>Sean Janson, <cite>Executive Director, Washington Timbers Soccer Club</cite></figcaption>
                            </figure>

                            <figure class="testimonials__item | glide__slide">
                                <blockquote>We had a great evening with you – engaging presentation and lively conversation. It was everything we hope for in our Teen Topic Talks. I really appreciate the time you took to prepare and the extra touches you provided. You did a terrific job!</blockquote>
                                <figcaption>Brian Devine, <cite>Vice Principal, La Salle High School</cite></figcaption>
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
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
