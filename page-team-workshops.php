<?php /* Template Name: Team Workshops */ ?>

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
                <a href="/contact" class="button | mt-1">Schedule Consultation</a>
            </div>
        </div>

        <div class="split-content__image split-content__image--circle--mobile split-content__image--rounded">
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

    <section class="content width-df | callout-ctas even-columns even-columns--three even-columns--two--vw500 even-columns--one-vw500 even-columns--gap-2-vw200 even-columns--center-vw500 | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="51" height="57">
                <?php echo get_field('box_1'); ?>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="54" height="57">
                <?php echo get_field('box_2'); ?>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="52" height="57">
                <?php echo get_field('box_3'); ?>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="52" height="57">
                <?php echo get_field('box_4'); ?>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="52" height="57">
                <?php echo get_field('box_5'); ?>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="52" height="57">
                <?php echo get_field('box_6'); ?>
            </div>
        </div>
    </section>

    <section class="content-wide | bg-grey-swoop-01 mt-4 pbl-5 pbl-4-vw400 ta-c | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="content width-df | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
            <div class="list-boxes list-boxes--5 list-boxes--underlined | mb-4">
                <?php echo get_field('list_items'); ?>
            </div>

            <div class="text-wrap | text-2">
                <?php echo get_field('cost'); ?>
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
