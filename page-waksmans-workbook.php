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

    <section class="content width-df | mbl-7 mbl-3-vw400 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="mb-2 ta-c">
            <h2>Order Now!</h2>
            <div class="text-3">
                <p class="text-strike"><span>$30</span></p>
            </div>
            <p>Free Shipping!</p>
        </div>

        <div class="contact">
            <div class="contact__text | pt-3 ta-c">
                <p><strong>28 worksheets to serve as learning tools for student-athletes.</strong></p>
                
                <div class="mbl-2 pbl-2 bt-2px-grey-100 bb-2px-grey-100">
                    <p>Most sport psychology books provide only text. The philosophy behind this workbook is much different. This workbook provides the student-athletes opportunities to write down his/her own experiences, apply the material to his/her unique situation, and learn in a fun, applicable process.</p>
                </div>

                <p>Upon completion of the workbook, the student-athlete will be able to proficiently complete the following tasks:</p>

                <div class="list-highlight | mt-2 bg-grey-100 p-2">
                    <ul>
                        <li>Generate positive self-talk statements</li>
                        <li>Create both outcome and process goals</li>
                        <li>Develop a more healthy, positive perspective regarding sport injury</li>
                        <li>Incorporate visualization into his/her sport game plan</li>
                        <li>Improve self-confidence</li>
                        <li>Maintain a more mentally tough approach throughout training and competition</li>
                        <li>Increase motivation levels</li>
                        <li>Describe how life skills are learned through sport</li>
                    </ul>
                </div>

                <div class="mt-2 mi-center-child">
                    <?php
                    $image = get_field('contact_image_1');
                    if ($image):
                        $url = $image['url'];
                        $alt = $image['alt'];
                    ?>
                    <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="230" height="230">
                    <?php endif; ?>
                </div>
            </div>

            <div class="contact__form">
                <div class="mt-1">
                    <script type="text/javascript" src="https://form.jotform.com/jsform/230560584312147"></script>
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
