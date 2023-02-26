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

    <section class="content width-df | mbl-7 mbl-3-vw400 ta-c | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <h2>Waksman's Sport Psychology Program</h2>
        <p><strong>A Practical Mental Skills Workbook for Student-Athletes</strong></p>
        <p>This workbook is a resource for student-athletes looking to improve sport performance and learn valuable life skills.</p>
        <p>Elliott Waksman's Sport Psychology Program teaches mental skills, which when consistently incorporated, lead to success on and off the field. Upon completion of the workbook, the student-athlete will be able to proficiently complete the following tasks: improve self-confidence, maintain a more mentally tough approach throughout training and competition, and describe how life skills are learned through sport.</p>
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
                </div>
            </div>

            <div class="split-content__image split-content__image--scale-down | pb-3-vw200 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <img src="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes">
            </div>
        </div>
    </section>

    <section class="content width-xs | mbl-7 mbl-3-vw400 ta-c | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <h2>Order Now!</h2>
        <div class="text-3">
            <p>$30</p>
        </div>
        <p>(Free shipping!)</p>
        <div class="mt-1">
            <script type="text/javascript" src="https://form.jotform.com/jsform/230560584312147"></script>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
