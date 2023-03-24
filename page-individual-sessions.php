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
	<?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content width-df | dg gtc-3 g-clamp-1-3-3 | gtc-1-vw500 | mbl-4 | ta-c-vw500 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-light-bulb.svg'); ?>
            </div>
            <?php echo get_field('box_1'); ?>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-light-bulb.svg'); ?>
            </div>
            <?php echo get_field('box_2'); ?>
        </div>

        <div class="df fd-c g-1 p-2 h-100 | b-2px-grey-100 br-2">
            <div class="svg svg--57h | mi-center-vw500">
                <?php load_inline_svg('icon-confidential.svg'); ?>
            </div>
            <?php echo get_field('box_3'); ?>
        </div>
    </section>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-66-33-vw800 | gtc-1-vw500 | mbl-4 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%">
        <div class="df fd-c jc-c | mb-1--h2">
            <div>
                <?php echo get_field('split_content_text_1'); ?>
                
                <div class="df jc-sb g-1 | jc-s-vw500 g-2-vw500 | fd-c-vw300 ai-c-vw300 | mt-2">
                    <div class="fg-1 fs-1 fb-auto | list">
                        <?php echo get_field('list_items'); ?>
                    </div>

                    <div class="fg-0 fs-0 fb-auto | sale">
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

        <div class="image--maxheight-760 image--rounded image--circle--vw200">
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
