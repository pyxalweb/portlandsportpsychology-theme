<?php /* Template Name: Thank You */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior push'); ?>>
    <section class="content width-df | mbl-7 mbl-3-vw400 ta-c | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <?php the_content(); ?>

        <div class="mbl-2">
            <?php echo get_field('content_1'); ?>
        </div>

        <?php
            // Contact - Thank You
            // Waksman's Workbook - Thank You (PayPal)
            if (is_page(145) || is_page(171)) {
        ?>
            <a href="/" class="button button--highlight | mi-center">Return to Website</a>
        <?php
            }
        ?>
    </section>
</main>

<?php
get_footer();
