<?php /* Template Name: Contact */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw500 | mbl-7 mbl-3-vw400 ta-c-vw200 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="df fd-c">
            <div class="mb-4">
                <h1><?php echo get_field('heading'); ?></h1>
            </div>

            <!-- EW jotform -->
            <script type="text/javascript" src="https://form.jotform.com/jsform/231270849695164"></script>

            <!-- AW jotform -->
            <!--
            <script type="text/javascript" src="https://form.jotform.com/jsform/230519508961056"></script>
            -->
        </div>

        <div class="df fd-c">
            <div class="df g-clamp-1-3-3 | fd-c-vw200 | text-400--h2 text-400--h3 | mb-2 pb-2 bb-2px-grey-100">
                <div class="fg-0 fs-1 fb-auto">
                    <?php get_template_part( 'template-parts/content', 'contact-info' ); ?>
                </div>

                <div class="fg-0 fs-1 fb-auto | contact__social">
                    <h3><?php echo get_field('social_heading'); ?></h3>
                    <?php get_template_part( 'template-parts/content', 'social' ); ?>
                </div>
            </div>

            <div class="bb-vw500-2px-grey-100 | mb-2 pb-2 bb-2px-grey-100">
                <h2><?php echo get_field('workbook_heading'); ?></h2>

                <div class="df cg-1 | text-400--h2 text-400--h3">
                    <div class="fg-1 fs-1 fb-auto">
                        <p><?php echo get_field('workbook_paragraph'); ?></p>
                        <div class="mt-1">
                            <a href="/waksmans-workbook" aria-label="Order Waksman's Workbook Now" class="button">Order Now</a>
                        </div>
                    </div>

                    <div class="fg-1 fs-0 fb-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/photos/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes" width="144" height="190">
                    </div>
                </div>
            </div>

            <div class="image--maxheight-760 image--rounded image--circle--vw200">
                <?php
                $image = get_field('image_1');
                if ($image):
                    $url = $image['url'];
                    $alt = $image['alt'];
                ?>
                <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="676" height="280">
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
