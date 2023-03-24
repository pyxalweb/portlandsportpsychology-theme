<?php /* Template Name: Waksman's Workbook */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

// get_template_part( 'template-parts/content', 'masthead' );
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead waksmans-workbook'); ?>>
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | mbl-7 mbl-3-vw400 ta-c | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="list-slideshow | content-slider pagination-text | ta-c">
            <div class="glide" data-autoplay="5000">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide"><h2>A Practical Mental Skills Workbook for Student-Athletes</h2></li>
                        <li class="glide__slide"><p>Improve your self-confidence.</p></li>
                        <li class="glide__slide"><p>Maintain a more mentally tough approach throughout training and competition.</p></li>
                        <li class="glide__slide"><p>Realize how life skills are learned through sport.</p></li>
                    </ul>

                    <!--
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                    </div>
                    -->
                </div>
            </div>
        </div>

        <p>Elliott Waksman's Sport Psychology Program teaches mental skills, which when consistently incorporated, lead to success on and off the field.</p>

        <a href="#order-now" class="button button--highlight | mi-center mt-2">Order Now</a>
    </section>

    <section class="content-wide | bg-grey-swoop | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw200 pt-3-vw200">
            <div class="df fd-c jc-c | o-2 | o-1-vw500 | pbl-5 pbl-3-vw400 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
                <div class="df fd-c g-1 | ta-c-vw200 | text-6--h2">
                    <h2>Waksman's Workbook</h2>
                    
                    <div class="points | text-4--h3 | mt-1">
                        <div class="points__item">
                            <div class="svg svg--57h | mi-center-vw200">
                                <?php load_inline_svg('icon-light-bulb.svg'); ?>
                            </div>
                            <div class="points__text">
                                <h3>Improve Self-Confidence</h3>
                                <p>Learn practical techniques to bounce back from mistakes and build self-confidence.</p>
                            </div>
                        </div>

                        <div class="points__item">
                            <div class="svg svg--57h | mi-center-vw200">
                                <?php load_inline_svg('icon-light-bulb.svg'); ?>
                            </div>
                            <div class="points__text">
                                <h3>Increase Motivation Levels</h3>
                                <p>Fun exercises, like Waksman's "bag-tag" technique spark persistence and motivation.</p>
                            </div>
                        </div>

                        <div class="points__item">
                            <div class="svg svg--57h | mi-center-vw200">
                                <?php load_inline_svg('icon-light-bulb.svg'); ?>
                            </div>
                            <div class="points__text">
                                <h3>Success On & Off the Field</h3>
                                <p>Grit and mental toughness are life skills every student-athlete can learn to improve their game and quality of life.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="df fd-c | image--maxheight-760 image--objectfit--scaledown | pb-3-vw200 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <img src="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes">
            </div>
        </div>
    </section>

    <section class="content width-df | mbl-7 mbl-3-vw400 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%" id="order-now">
        <div class="mb-2 ta-c">
            <h2>Order Now!</h2>
            <div class="text-3 text-strike">
                <p><span>$30</span></p>
            </div>
            <p>Free Shipping!</p>
            <p>This workbook is a resource for student-athletes looking to improve sport performance and learn valuable life skills.</p>
        </div>

        <div class="df g-clamp-2-5-5 | fd-c-vw500">
            <div class="fg-1 fs-1 fb-50 | pt-3 ta-c">
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

            <div class="fg-1 fs-1 fb-50">
                <div class="mt-1">
                    <script type="text/javascript" src="https://form.jotform.com/jsform/230560584312147"></script>
                </div>
            </div>
        </div>

        <div class="testimonials | content-slider pagination-text | mbl-5 mbl-3-vw400 | text-4 ta-c">
            <figure class="testimonials__item">
                <blockquote>Scott read and filled out your workbook and said it changed his life. He takes it with him to all his tournaments.</blockquote>
                <figcaption>Alice, <cite>Sport Mother, La Salle High School, Milwaukie, Oregon</cite></figcaption>
            </figure>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
