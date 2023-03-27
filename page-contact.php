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

    <section class="content width-df | mbl-7 mbl-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="df g-clamp-2-5-5 | fd-c-vw500">
            <div class="fg-1 fs-1 fb-50">
                <h2>Contact Elliott</h2>
                <p>Please feel free to contact Elliott Waksman via phone or email to discuss appointments, team workshops, or other sport psychologist consultation requests.</p>

                <div class="df g-clamp-1-3-3 | fd-c-vw200 | text-9--h2 text-9--h3 | mbl-2 pbl-2 bt-2px-grey-100 bb-2px-grey-100">
                    <div class="fg-0 fs-1 fb-auto">
                        <?php get_template_part( 'template-parts/content', 'info' ); ?>
                    </div>

                    <div class="fg-0 fs-1 fb-auto | contact__social">
                        <h3>Follow Me</h3>
                        <?php get_template_part( 'template-parts/content', 'social' ); ?>
                    </div>
                </div>

                <div class="bb-vw500-2px-grey-100 pb-2-vw500">
                    <h2>Looking to buy Waksman's Workbook?</h2>

                    <div class="df cg-1 | text-9--h2 text-9--h3">
                        <div class="fg-1 fs-1 fb-auto">
                            <p>A practical mental skills workbook for student-athletes by Elliott Waksman. Improve self-confidence, increase motivation levels, and find success on & off the field!</p>
                            <div class="mt-1">
                                <a href="/waksmans-workbook" aria-label="Order Waksman's Workbook Now" class="button">Order Now</a>
                            </div>
                        </div>

                        <div class="fg-1 fs-0 fb-auto">
                            <img src="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes" width="144" height="190">
                        </div>
                    </div>
                </div>
            </div>

            <div class="fg-1 fs-1 fb-50">
                <h2>Send an Email</h2>
                <p>Have a question or comment?<br>Want to schedule a consultation, workshop, etc?</p>
                <div class="mt-2">
                    <script type="text/javascript" src="https://form.jotform.com/jsform/230519508961056"></script>
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
