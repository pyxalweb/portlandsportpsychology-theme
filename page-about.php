<?php /* Template Name: About */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
    <section class="content-photo | content-photo--gtc-1-vw500 | content width-df | mbl-7 mbl-4 mb-1--h2 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div>
            <h1><?php echo get_field('heading'); ?></h1>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
        </div>

        <div class="image--maxheight-936 image--rounded | image--size-50--vw500 | mi-center-child-vw500 | image--circle--vw200 image--position-down--vw200 image--size-100--vw200">
            <?php
            $image = get_field('image_1');
            if ($image):
                $url = $image['url'];
                $alt = $image['alt'];
            ?>
            <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="676" height="936">
            <?php endif; ?>
        </div>
    </section>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw500 | mbl-4 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="df fd-c jc-c | o-2 | o-1-vw500">
            <div>
                <?php echo get_field('content_1'); ?>
            </div>
        </div>

        <div class="df fd-c jc-c p-clamp-1-5-2 | br-2 | o-1 | o-2-vw500">
            <div class="video-embed">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/5LVy1iWk54o" title="YouTube video player" frameallow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw500 | mbl-4 mbl-2-vw500 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="list--color | bg-grey-100 bs-400 br-2 p-2">
            <?php echo get_field('box_1'); ?>
        </div>
        <div class="list--color | bg-grey-100 bs-400 br-2 p-2">
            <?php echo get_field('box_2'); ?>
        </div>
    </section>

    <section class="content width-df | dg gtc-2 g-clamp-1-3-3 | gtc-1-vw500 | mbl-4 mbl-2-vw500 mb-4-vw500 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="list--color | bg-grey-100 bs-400 br-2 p-2">
            <?php echo get_field('box_3'); ?>
        </div>
        <div class="list--color | bg-grey-100 bs-400 br-2 p-2">
            <?php echo get_field('box_4'); ?>
        </div>
    </section>

    <section class="content width-xs | mbl-4 animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="text-1000--h2 | ta-c">
            <h2><?php echo get_field('content_2'); ?></h2>
        </div>
        <div class="image--rounded | mi-center-child mbl-2">
            <?php
            $image = get_field('paisley');
            if ($image):
                $url = $image['url'];
                $alt = $image['alt'];
            ?>
            <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="360" height="504">
            <?php endif; ?>
        </div>
        <div class="list--style-none | paragraph-mb-0 | ta-c bg-grey-100 bs-400 br-2 p-2">
            <div class="mb-2">
                <h2><?php echo get_field('box_5_c'); ?></h2>
            </div>
            <div class="dg gtc-2 g-1 | gtc-1-vw300">
                <div>
                    <?php echo get_field('box_5_a'); ?>
                </div>
                <div>
                    <?php echo get_field('box_5_b'); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
