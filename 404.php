<?php /* 404 error page */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior push'); ?>>
	<section class="masthead-interior | pbl-7 pbl-3-vw400 mb-4 mb-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df">
            <h1>404!</h1>
            <div class="mt-1">
                <p><?php echo get_field('heading'); ?></p>
            </div>
        </div>

        <img src="<?php echo content_url(); ?>/uploads/2023/05/kids-playing-soccer-masthead.jpg" alt="Kids playing soccer" width="1920" height="500" class="content-bg__photo">
    </section>

	<section class="content width-sm | mb-4 ta-c | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
		<p>Sorry, the page you are looking for does not exist.</p>
        <div class="mt-1 mi-center-child">
            <a href="/" class="button">Return to Home</a>
        </div>
	</section>
</main>

<?php
get_footer();
