<?php /* Template Name: Contact */ ?>

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
	<?php // get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | mbl-7 mbl-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="contact">
            <div class="contact__text">
                <h2>Contact Information</h2>
                <p>Please feel free to contact Elliott Waksman via phone or email to discuss appointments, team workshops, or other sport psychologist consultation requests.</p>

                <div class="contact__text__split | text-9--h2 text-9--h3 | mbl-2 pbl-2 bt-2px-grey-100 bb-2px-grey-100">
                    <div>
                        <?php get_template_part( 'template-parts/content', 'info' ); ?>
                    </div>

                    <div class="contact__social">
                        <h3>Follow Me</h3>
                        <?php get_template_part( 'template-parts/content', 'social' ); ?>
                    </div>
                </div>
            </div>

            <div class="contact__form">
                <script type="text/javascript" src="https://form.jotform.com/jsform/230519508961056"></script>
            </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
