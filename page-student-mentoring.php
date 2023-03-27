<?php /* Template Name: Student Mentoring */ ?>

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
        <h1>Student Mentoring</h1>
        <div class="mt-1">
            <p>Elevate your mental performance consulting career with AASP-certified mentoring services, specializing in student-athletics and leadership development.</p>
        </div>

        <a href="contact" class="button button--highlight | mi-center mt-2">Schedule Consultation</a>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-icon.svg" alt="" class="content-bg__circle">
    </section>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-66-33-vw800 | gtc-1-vw500 | mb-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="df fd-c jc-c | mb-1--h2" style="opacity:0;">
            <div>
                <?php echo get_field('split_content_text_1'); ?>
                
                <div class="df jc-sb g-1 | jc-s-vw500 g-2-vw500 | fd-c-vw300 ai-c-vw300 | mt-2">
                    <div class="fg-1 fs-1 fb-auto | list">
                        <?php echo get_field('list_items'); ?>
                    </div>

                    <div class="fg-0 fs-0 fb-auto | sale">
                        <div class="text-2">
                            <p><?php echo get_field('cost'); ?></p>
                        </div>

                        <a href="/contact" class="button button--highlight">Schedule Consultation</a>

                        <div class="text-10">
                            <p><?php echo get_field('travel_fees'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="image--maxheight-760 image--rounded image--circle--vw200 | pb-3-vw200" style="opacity:0;">
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
