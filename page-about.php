<?php /* Template Name: About */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

get_template_part( 'template-parts/content', 'masthead' );
?>

<main id="site-content" <?php post_class($class = 'site-content interior | mb-1--h2'); ?>>
    <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | split-content even-columns even-columns--two even-columns--one-vw200 even-columns--gap-2-vw200 | mbl-4 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="split-content__text">
            <div>
                <?php echo get_field('split_content_text_1'); ?>
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

    <section class="content width-df | split-content even-columns even-columns--two even-columns--two--reverse even-columns--one-vw200 even-columns--gap-2-vw200 | mbl-4 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="split-content__text">
            <div>
                <?php echo get_field('split_content_text_2'); ?>
            </div>
        </div>

        <div class="split-content__video split-content--bg">
            <div class="video-embed">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5LVy1iWk54o" title="YouTube video player" frameallow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="content width-df | even-columns even-columns--two even-columns--one-vw500 | mbl-4 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="border-box">
            <?php echo get_field('box_1'); ?>
        </div>
        <div class="border-box">
            <?php echo get_field('box_2'); ?>
        </div>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
