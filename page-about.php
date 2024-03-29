<?php /* Template Name: About */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior push'); ?>>
    <section class="content-photo | content-photo--gtc-1-vw500 | content width-df | mbl-7 mbl-4 mb-1--h2 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="mb-1-vw500">
            <div class="mb-1">
                <h1><?php echo get_field('heading'); ?></h1>
            </div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
        </div>

        <div class="image--rounded | image--size-50--vw500 | mi-center-child-vw500 | image--size-100--vw200">
            <?php
            $image = get_field('image_1');
            if ($image):
                $url = $image['url'];
                $alt = $image['alt'];
            ?>
            <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="676" height="770">
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

    <section class="content width-sm | mbl-4 animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="text-1000--h2 | mb-1 ta-c">
            <h2><?php echo get_field('content_2'); ?></h2>
        </div>
        <div class="df jc-c g-1 fd-c-vw300">
            <div class="image--rounded | mi-center-child">
                <?php
                $image = get_field('paisley');
                if ($image):
                    $url = $image['url'];
                    $alt = $image['alt'];
                ?>
                <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="360" height="504">
                <?php endif; ?>
            </div>

            <div class="paragraph-mb-0 bg-grey-100 bs-400 br-2 p-2 mi-center-vw300">
                <div class="mb-1">
                    <h2><?php echo get_field('box_5_c'); ?></h2>
                </div>
                <div class="list--color | mb-1">
                    <?php echo get_field('box_5_a'); ?>
                </div>
                <div class="list--color">
                    <?php echo get_field('box_5_b'); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
