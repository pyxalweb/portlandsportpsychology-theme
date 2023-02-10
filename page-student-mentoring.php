<?php /* Template Name: Student Mentoring */ ?>

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

    <section class="content width-df | split-content even-columns even-columns--two even-columns--one-vw200 | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="split-content__text | mb-1--h2">
            <div>
                <?php echo get_field('split_content_text_1'); ?>
                <a href="#" class="button | mt-1">Schedule Consultation</a>
            </div>
        </div>

        <div class="split-content__image split-content__image--circle--mobile split-content__image--rounded | pb-3-vw200">
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