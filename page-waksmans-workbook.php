<?php /* Template Name: Waksman's Workbook */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead waksmans-workbook'); ?>>
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | mbl-7 mbl-3-vw400 ta-c | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <h1><?php echo get_field('heading'); ?></h1>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>

        <a href="#order-now" class="button button--highlight | mi-center mt-2">Order Now</a>
    </section>

    <section class="mt-7 mt-3-vw400 bg--stripe | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content-photo | content-photo--gtc-1-vw300 | content width-df | pt-3-vw300">
            <div class="content-photo__container | o-2 | o-1-vw500 | pbl-5 pbl-3-vw400 pt-0-vw300 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
                <div class="content-photo__text | ta-c-vw300 | text-1000--h2">
                    <h2><?php echo get_field('product_heading'); ?></h2>
                    
                    <div class="points | text-500--h3 | mt-1">
                        <div class="points__item">
                            <div class="points__icon">
                                <?php load_inline_svg('icon-dot.svg'); ?>
                            </div>
                            <div class="points__text">
                                <h3><?php echo get_field('product_bullet_heading_1'); ?></h3>
                                <p><?php echo get_field('product_bullet_description_1'); ?></p>
                            </div>
                        </div>

                        <div class="points__item">
                            <div class="points__icon">
                                <?php load_inline_svg('icon-dot.svg'); ?>
                            </div>
                            <div class="points__text">
                                <h3><?php echo get_field('product_bullet_heading_2'); ?></h3>
                                <p><?php echo get_field('product_bullet_description_2'); ?></p>
                            </div>
                        </div>

                        <div class="points__item">
                            <div class="points__icon">
                                <?php load_inline_svg('icon-dot.svg'); ?>
                            </div>
                            <div class="points__text">
                                <h3><?php echo get_field('product_bullet_heading_3'); ?></h3>
                                <p><?php echo get_field('product_bullet_description_3'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-photo__container | image--maxheight-760 | image--maxheight-reset | image--objectfit--scaledown | animate-scroll-slide-horizontal | mi-center-child | pbl-4 pb-0-vw300" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook-no-shadow.png" type="image/png" media="(max-width: 800px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes" width="676" height="760">
                </picture>
            </div>
        </div>
    </section>

    <section class="content width-xs | mbl-7 mbl-3-vw400 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%" id="order-now">
        <div class="mb-2 ta-c | text-1000--h2" style="opacity:0;">
            <h2><?php echo get_field('info_heading'); ?></h2>
            <div class="text-900 text-strike">
                <p><span><?php echo get_field('info_price'); ?></span></p>
            </div>
            <div class="text-background text-background--grey-100 | mt-05 mb-1 b-2px-grey-200 bs-400 br-1">
                <p><?php echo get_field('info_highlight'); ?></p>
            </div>
            <p><?php echo get_field('info_description'); ?></p>
        </div>
    </section>

    <section class="content width-df | mb-7 mb-3-vw400 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%" id="order-now">
        <div class="df g-clamp-2-5-5 | fd-c-vw500" style="opacity:0;">
            <div class="fg-1 fs-1 fb-50 | pt-4 bt-2px-grey-100 | text-500--h3">
                <h3><?php echo get_field('about_heading'); ?></h3>
                
                <div class="mt-1 mb-4 pb-4 bb-2px-grey-100">
                    <p><?php echo get_field('about_description'); ?></p>
                </div>

                <div class="list-highlight | list--dots | mt-2 bg-grey-100 pbl-4 pi-2 br-2">
                    <div class="ta-c">
                        <h3><?php echo get_field('objectives_heading'); ?></h3>
                    </div>

                    <?php echo get_field('objectives_list'); ?>
                </div>
            </div>

            <div class="fg-1 fs-1 fb-50">
                <div class="mb-2 ta-c | text-1000--h2">
                    <h2><?php echo get_field('form_heading'); ?></h2>
                </div>

                <!-- EW jotform -->
                <script type="text/javascript" src="https://form.jotform.com/jsform/231268550096155"></script>
                
                <!-- AW jotform -->
                <!--
                <script type="text/javascript" src="https://form.jotform.com/jsform/230560584312147"></script>
                -->
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
