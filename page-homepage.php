<?php /* Template Name: Homepage */ ?>

<?php
get_header();
?>

<section id="site-masthead" class="masthead" role="complementary" aria-label="Page heading and decorative looping video">
    <div class="masthead__overlay homepage | animate-scroll-fade-in" data-delay="0.5" style="opacity:0;">
        <div class="masthead__overlay__box">
            <div class="masthead__overlay__heading">
                <h1><?php echo get_the_title(); ?> <span><?php echo get_field('credentials'); ?></span></h1>
            </div>
            <div class="masthead__overlay__subtext">
                <p></p>
                <p><?php echo get_field('titles'); ?></p>
            </div>
            <div class="masthead__overlay__text">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
            </div>
            <div class="masthead__overlay__buttons">
                <a href="contact" class="button button--highlight">Schedule Consultation</a>
                <a href="waksmans-workbook" class="button button--highlight">Buy Workbook</a>
            </div>
        </div>
    </div>

    <video class="masthead__media video" autoplay muted loop playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/videos/homepage.webm" type="video/webm">
        <source src="<?php echo get_template_directory_uri(); ?>/videos/homepage.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</section>

<main id="site-content" class="site-content">
    <section class="callouts | content width-df | mbl-7 mbl-3-vw400 | text-500--h2 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="100%">
        <div class="callout" style="opacity:0;">
            <div class="callout__text | text-100">
                <div class="svg svg--57h | svg--mi-center-vw800">
                    <?php load_inline_svg('icon-brain.svg'); ?>
                </div>
                <h2><?php echo get_field('callout_1_heading'); ?></h2>
                <p><?php echo get_field('callout_1_paragraph'); ?></p>
            </div>
            <div class="callout__button">
                <a href="individual-sessions" aria-label="Learn more about Individual Sessions" class="button">Get Started</a>
            </div>
        </div>

        <div class="callout" style="opacity:0;">
            <div class="callout__text | text-100">
                <div class="svg svg--57h | svg--mi-center-vw800">
                    <?php load_inline_svg('icon-clipboard.svg'); ?>
                </div>
                <h2><?php echo get_field('callout_2_heading'); ?></h2>
                <p><?php echo get_field('callout_2_paragraph'); ?></p>
            </div>
            <div class="callout__button">
                <a href="team-workshops" aria-label="Learn more about Team Workshops" class="button">Get Started</a>
            </div>
        </div>

        <div class="callout" style="opacity:0;">
            <div class="callout__text | text-100">
                <div class="svg svg--57h | svg--mi-center-vw800">
                    <?php load_inline_svg('icon-parents.svg'); ?>
                </div>
                <h2><?php echo get_field('callout_3_heading'); ?></h2>
                <p><?php echo get_field('callout_3_paragraph'); ?></p>
            </div>
            <div class="callout__button">
                <a href="parenting-workshops" aria-label="Learn more about Parenting Workshops" class="button">Get Started</a>
            </div>
        </div>

        <div class="callout" style="opacity:0;">
            <div class="callout__text | text-100">
                <div class="svg svg--57h | svg--mi-center-vw800">
                    <?php load_inline_svg('icon-graduation.svg'); ?>
                </div>
                <h2><?php echo get_field('callout_4_heading'); ?></h2>
                <p><?php echo get_field('callout_4_paragraph'); ?></p>
            </div>
            <div class="callout__button">
                <a href="mentoring" aria-label="Learn more about Student Mentoring" class="button">Get Started</a>
            </div>
        </div>
    </section>

    <section class="mbl-7 mbl-3-vw400 bg--stripe | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content-photo | content-photo--gtc-1-vw300 | content width-df">
            <div class="content-photo__container | pbl-5 pbl-3-vw400 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <div class="content-photo__text | text-1000--h2 | ta-c-vw300">
                    <h2><?php echo get_field('bio_heading'); ?></h2>
                    <div class="gap-line | gap-line--vw300 | text-700">
                        <p><?php echo get_field('bio_tagline'); ?></p>
                    </div>
                    <p><?php echo get_field('bio_paragraph'); ?></p>
                    <a href="about-elliott" aria-label="Learn more about Elliott Waksman" class="button | mi-center">About Waksman</a>
                </div>
            </div>

            <div class="image image--circle--vw300 | pb-3-vw300 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
                <?php
                $image = get_field('image_1');
                if ($image):
                    $url = $image['url'];
                    $alt = $image['alt'];
                ?>
                <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="680" height="640">
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="content width-df | mbl-7 mbl-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="dg g-clamp-1-5-5 gtc-25-75 gtc-1-vw300">
            <div class="ta-c-vw200 | gap-line | gap-line--vw200 | text-1000--h2">
                <h2><?php echo get_field('testimonials_heading'); ?></h2>
            </div>

            <div class="ta-c-vw200 | list-boxes list-boxes--4 list-boxes--rounded">
                <div class="mb-1">
                    <p><?php echo get_field('testimonials_intro'); ?></p>
                </div>
                <?php echo get_field('testimonials_list'); ?>
            </div>
        </div>

        <div class="testimonials | content-slider pagination-text | mbl-5 mbl-3-vw400 | text-600 ta-c">
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

                        <figure class="testimonials__item | glide__slide">
                            <blockquote><?php echo get_field('testimonial_quote_3'); ?></blockquote>
                            <figcaption><?php echo get_field('testimonial_name_3'); ?>, <cite><?php echo get_field('testimonial_organization_3'); ?></cite></figcaption>
                        </figure>

                        <figure class="testimonials__item | glide__slide">
                            <blockquote><?php echo get_field('testimonial_quote_4'); ?></blockquote>
                            <figcaption><?php echo get_field('testimonial_name_4'); ?>, <cite><?php echo get_field('testimonial_organization_4'); ?></cite></figcaption>
                        </figure>
                    </div>

                    <div class="glide__bullets" data-glide-el="controls[nav]">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-7 mt-3-vw400 bg--stripe | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content-photo | content-photo--gtc-1-vw300 | content width-df | pt-3-vw300">
            <div class="content-photo__container | o-2 | o-1-vw500 | pbl-5 pbl-3-vw300 pt-0-vw300 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
                <div class="content-photo__text text-1000--h2">
                    <div class="ta-c-vw300">
                        <h2><?php echo get_field('product_heading'); ?></h2>
                    </div>
                    
                    <div class="list--style-none | text-500--h3 | mt-1">
                        <li class="list--svg | mbl-2">
                            <div class="list--svg--icon">
                                <?php load_inline_svg('icon-dot.svg'); ?>
                            </div>
                            <div class="list--svg--text">
                                <h3><?php echo get_field('product_bullet_heading_1'); ?></h3>
                                <p><?php echo get_field('product_bullet_description_1'); ?></p>
                            </div>
                        </li>

                        <li class="list--svg | mbl-2">
                            <div class="list--svg--icon">
                                <?php load_inline_svg('icon-dot.svg'); ?>
                            </div>
                            <div class="list--svg--text">
                                <h3><?php echo get_field('product_bullet_heading_2'); ?></h3>
                                <p><?php echo get_field('product_bullet_description_2'); ?></p>
                            </div>
                        </li>

                        <li class="list--svg | mbl-2">
                            <div class="list--svg--icon">
                                <?php load_inline_svg('icon-dot.svg'); ?>
                            </div>
                            <div class="list--svg--text">
                                <h3><?php echo get_field('product_bullet_heading_3'); ?></h3>
                                <p><?php echo get_field('product_bullet_description_3'); ?></p>
                            </div>
                        </li>
                    </div>

                    <a href="waksmans-workbook" aria-label="Order Waksman's Workbook Now" class="button button--highlight | mt-2-vw300 mi-center">Order Now</a>
                </div>
            </div>

            <div class="content-photo__container | animate-scroll-slide-horizontal | mi-center-child | pt-4-vw300" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/waksmans-sport-psychology-workbook-no-shadow.png" type="image/png" media="(max-width: 800px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes" width="460" height="604">
                </picture>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
