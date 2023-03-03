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

    <section class="content width-df | callout-ctas even-columns even-columns--three even-columns--two--vw500 even-columns--one-vw500 even-columns--gap-2-vw200 even-columns--center-vw500 | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <div class="svg svg--57h | mi-center-vw500">
                    <?php load_inline_svg('icon-light-bulb.svg'); ?>
                </div>
                <?php echo get_field('box_1'); ?>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <div class="svg svg--57h | mi-center-vw500">
                    <?php load_inline_svg('icon-light-bulb.svg'); ?>
                </div>
                <?php echo get_field('box_2'); ?>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <div class="svg svg--57h | mi-center-vw500">
                    <?php load_inline_svg('icon-light-bulb.svg'); ?>
                </div>
                <?php echo get_field('box_3'); ?>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <div class="svg svg--57h | mi-center-vw500">
                    <?php load_inline_svg('icon-light-bulb.svg'); ?>
                </div>
                <?php echo get_field('box_4'); ?>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <div class="svg svg--57h | mi-center-vw500">
                    <?php load_inline_svg('icon-light-bulb.svg'); ?>
                </div>
                <?php echo get_field('box_5'); ?>
            </div>
        </div>

        <div class="callout-ctas__item">
            <div class="callout-ctas__text callout-ctas__text--box">
                <div class="svg svg--57h | mi-center-vw500">
                    <?php load_inline_svg('icon-light-bulb.svg'); ?>
                </div>
                <?php echo get_field('box_6'); ?>
            </div>
        </div>
    </section>

    <section class="content width-df | split-content even-columns even-columns--two even-columns--prioritize-text--vw800 even-columns--one-vw500 | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="split-content__text | mb-1--h2">
            <div>
                <?php echo get_field('split_content_text_1'); ?>

                <div class="contain | mt-2">
                    <div class="list">
                        <?php echo get_field('list_items'); ?>
                    </div>

                    <div class="sale">
                        <div class="text-2">
                            <p><?php echo get_field('cost'); ?></p>
                        </div>

                        <a href="/contact" class="button button--highlight">Schedule Consultation</a>

                        <div class="text-10">
                            <p><?php echo get_field('travel_fees'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="split-content__image split-content__image--rounded split-content__image--circle--mobile">
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

    <section class="content width-df | horizontal-content__item | list-boxes list-boxes--4 list-boxes--rounded | mt-6 mt-3-vw400 mb-7 mb-3-vw400">
        <div class="mb-1 ta-c">
            <p>Elliott Waksman is a well-renowned sport pyschologist in the Portland metro area. A few organizations he's worked with include:</p>
        </div>
        <ul>
            <li>Portland State University</li>
            <li>Nike</li>
            <li>Willamette University</li>
            <li>Lewis & Clark College</li>
            <li>Portland City United Soccer Club</li>
            <li>Vancouver Tennis Center</li>
            <li>Skating Club of Oregon High School</li>
            <li>Concordia University</li>
            <li>Lakeridge High School</li>
            <li>Athletes In Motion Baseball Club</li>
            <li>Multnomah Athletic Club</li>
            <li>Irvington Tennis Club</li>
            <li>Lincoln High School</li>
            <li>Glendale Community College</li>
            <li>La Salle High School</li>
            <li><a href="/success-stories">And Many More...</a></li>
        </ul>
    </section>
</main>

<?php
get_template_part( 'template-parts/admin', 'meta' );
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
