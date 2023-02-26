<?php /* Template Name: No Masthead */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

// get_template_part( 'template-parts/content', 'masthead' );
?>

<main id="site-content" <?php post_class($class = 'site-content interior'); ?>>
	<?php // get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | mbl-7 mbl-3-vw400 ta-c | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <h1>Thank You!</h1>
        <h2>Your message has been successfully sent.</h2>
        <div class="mbl-2">
            <p>I will respond to you as soon as possible.<br>In the meantime, please feel free to continue to take a look around my website.</p>
        </div>
        <a href="/" class="button | mi-center">Return Home</a>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
