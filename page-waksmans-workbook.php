<?php /* Template Name: Waksman's Workbook */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

get_template_part( 'template-parts/content', 'masthead' );
?>

<main id="site-content" <?php post_class($class = 'site-content interior'); ?>>
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | mbl-7 mbl-3-vw400 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <h2>Lorem ipsum dolor sit em heading</h2>
        <p>This workbook is a resource for student-athletes looking to improve sport performance and learn valuable life skills.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat impedit earum et ipsa reprehenderit vero sint, quod quisquam, labore voluptate pariatur laboriosam ipsum autem reiciendis officiis quia. Veniam, consectetur maxime! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi illum repudiandae quaerat. Ut facere totam quasi dolores laborum tempora rerum reprehenderit vero nesciunt asperiores voluptatibus magni consequuntur cupiditate, adipisci incidunt.</p>
    </section>

    <section class="content-wide | bg-grey-swoop-02 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="content width-df | split-content even-columns even-columns--two even-columns--two--reverse even-columns--one-vw200 even-columns--gap-0-vw200">
            <div class="split-content__text | pbl-5 pbl-3-vw400 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
                <div class="split-content__text__flex | text-6--h2">
                    <h2>Waksman's Workbook</h2>
                    
                    <div class="points | text-4--h3 | mt-1">
                        <div class="points__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="39" height="57">
                            <div class="points__text">
                                <h3>Improve Self-Confidence</h3>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce.</p>
                            </div>
                        </div>

                        <div class="points__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="39" height="57">
                            <div class="points__text">
                                <h3>Increase Motivation Levels</h3>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce.</p>
                            </div>
                        </div>

                        <div class="points__item">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="39" height="57">
                            <div class="points__text">
                                <h3>Success On & Off the Field</h3>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Fusce.</p>
                            </div>
                        </div>
                    </div>

                    <a href="/" aria-label="Order Waksman's Workbook Now" class="button">Order Now</a>
                </div>
            </div>

            <div class="split-content__image split-content__image--scale-down | pb-3-vw200 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <img src="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes">
            </div>
        </div>

        <div class="text-wrap | text-2 ta-c | pb-5 pb-4-vw400">
            <p>$350 per workshop<br>Additional travel fees may apply</p>
        </div>
    </section>









    <section class="content width-df | split-content even-columns even-columns--two even-columns--one-vw200 | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="split-content__text | mb-1--h2">
            <div>
                <?php echo get_field('split_content_text_1'); ?>
                <a href="#" class="button | mt-1">Schedule Consultation</a>
            </div>
        </div>

        <div class="split-content__image split-content__image--circle--mobile split-content__image--rounded">
            <?php
            $image = get_field('split_content_image_1');
            if ($image):
                $url = $image['url'];
                $alt = $image['alt'];
            ?>
            <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="1920" height="500">
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
