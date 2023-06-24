<?php /* Template Name: Test */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior push'); ?>>
	<section class="masthead-interior | pbl-7 pbl-3-vw400 mb-4 mb-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">

        <!-- Call the function and pass in the ACF Field Name -->
        <?php getImage('image_1'); ?>

    </section>
</main>

<?php
get_footer();
