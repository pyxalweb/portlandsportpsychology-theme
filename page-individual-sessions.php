<?php /* Template Name: Individual Sessions */ ?>

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
	<?php
	//get_template_part( 'template-parts/content', 'page' );
	?>

    <section class="content width-df | callout-ctas even-columns even-columns--three even-columns--two--vw500 even-columns--one-vw200 even-columns--gap-5-vw200 | mbl-7 mbl-vw400-3 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="callout-ctas__item">
            <div class="callout-ctas__text">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="51" height="57">
                <h2>Initial Consultation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non porttitor massa. Curabitur porta ornare molestie. Ut vehicula dictum ex eu imperdiet. Donec viverra.</p>
            </div>
            <div class="callout-ctas__link">
                <a href="/" aria-label="Learn more about Individual Sessions" class="button">Learn More</a>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="54" height="57">
                <h2>Weekly Sessions</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non porttitor massa. Curabitur porta ornare molestie. Ut vehicula dictum ex eu imperdiet. Donec viverra.</p>
            </div>
            <div class="callout-ctas__link">
                <a href="/" aria-label="Learn more about Team Workshops" class="button">Learn More</a>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-light-bulb.svg" alt="" width="52" height="57">
                <h2>Confidential</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non porttitor massa. Curabitur porta ornare molestie. Ut vehicula dictum ex eu imperdiet. Donec viverra.</p>
            </div>
            <div class="callout-ctas__link">
                <a href="/" aria-label="Learn more about Parenting Workshops" class="button">Learn More</a>
            </div>
        </div>
    </section>

    <section class="content width-df | split-content even-columns even-columns--two even-columns--one-vw200 even-columns--gap-0-vw200 | mbl-7 mbl-vw400-3 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="split-content__text | pbl-5 pbl-vw400-3 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
            <div>
                <?php
                    echo get_field('split_content_text_1');
                ?>
            </div>
        </div>

        <div class="split-content__image split-content__image--circle--mobile | pb-3-vw200 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
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

<!-- ID <?php // display the ID
the_ID(); ?> -->
<!-- <?php // display the name of the Page Template
$template_path = get_post_meta(get_the_ID(), '_wp_page_template', true);
$templates = wp_get_theme()->get_page_templates();
echo $templates[$template_path];
?>
-->

<?php
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
