<?php /* Template Name: Contact */ ?>

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
	<?php // get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw500 | mbl-7 mbl-3-vw400 ta-c-vw200 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="df fd-c">
            <div class="mb-4">
                <h1>Contact Elliott Waksman, MA, CMPC today</h1>
            </div>

            <!-- EW jotform -->
            <script type="text/javascript" src="https://form.jotform.com/jsform/231270849695164"></script>

            <!-- AW jotform -->
            <!--
            <script type="text/javascript" src="https://form.jotform.com/jsform/230519508961056"></script>
            -->
        </div>

        <div class="df fd-c">
            <div class="df g-clamp-1-3-3 | fd-c-vw200 | text-400--h2 text-400--h3 | mb-2 pb-2 bb-2px-grey-100">
                <div class="fg-0 fs-1 fb-auto">
                    <?php get_template_part( 'template-parts/content', 'contact-info' ); ?>
                </div>

                <div class="fg-0 fs-1 fb-auto | contact__social">
                    <h3>Follow Me</h3>
                    <?php get_template_part( 'template-parts/content', 'social' ); ?>
                </div>
            </div>

            <div class="bb-vw500-2px-grey-100 | mb-2 pb-2 bb-2px-grey-100">
                <h2>Improve sport performance and learn valuable life skills</h2>

                <div class="df cg-1 | text-400--h2 text-400--h3">
                    <div class="fg-1 fs-1 fb-auto">
                        <p>Waksman's workbook makes the perfect gift for student-athletes</p>
                        <div class="mt-1">
                            <a href="/waksmans-workbook" aria-label="Order Waksman's Workbook Now" class="button">Order Now</a>
                        </div>
                    </div>

                    <div class="fg-1 fs-0 fb-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes" width="144" height="190">
                    </div>
                </div>
            </div>

            <div class="image--maxheight-760 image--rounded image--circle--vw200">
                <?php
                $image = get_field('image_1');
                if ($image):
                    $url = $image['url'];
                    $alt = $image['alt'];
                ?>
                <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="676" height="280">
                <?php endif; ?>
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
