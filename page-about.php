<?php /* Template Name: About */ ?>

<?php
get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
endwhile;

// get_template_part( 'template-parts/content', 'masthead' );
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
    <?php //get_template_part( 'template-parts/content', 'page' ); ?>

    <section class="content-photo | content-photo--gtc-1-vw500 | content width-df | mbl-7 mbl-4 mb-1--h2 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div>
            <h1>Waksman has worked in the field of sport psychology since 2010, helping individuals and groups boost their mental toughness.</h1>
            <?php echo get_field('split_content_text_1'); ?>
        </div>

        <div class="image--maxheight-936 image--rounded | image--size-50--vw500 | mi-center-child-vw500 | image--circle--vw200 image--position-down--vw200 image--size-100--vw200">
            <?php
            $image = get_field('split_content_image_1');
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
                <?php echo get_field('split_content_text_2'); ?>
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

    <div class="content width-df | mbl-4 animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <p>If you are not meeting with Waksman in a professional setting, you will most likely find him on his yoga mat, cheering on the Blazers, defending his co-ed kickball championship, or laughing alongside his playful dog, Paisley, and wonderful wife, Camille, in Portland, Oregon.</p>
    </div>

    <section class="content width-df | mbl-4 animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="text-500--h4 | dg gtc-3 g-clamp-1-3-3 | gtc-1-vw500">
            <div class="text-1000--h2">
                <h2>Meet Waksman's Office Manager</h2>
                <h3>Paisley - Ball is life since 2017</h3>
            </div>
            <div class="image--rounded | mi-center-child-vw500">
                <?php
                $image = get_field('paisley');
                if ($image):
                    $url = $image['url'];
                    $alt = $image['alt'];
                ?>
                <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="360" height="504">
                <?php endif; ?>
            </div>
            <div class="list--color | bg-grey-100 bs-400 br-2 p-2">
                <h4>Likes</h4>
                <ul>
                    <li>Peanut butter</li>
                    <li>Brooms</li>
                    <li>Mid-morning naps</li>
                    <li>Fetch</li>
                </ul>
                <br>

                <h4>Dislikes</h4>
                <ul>
                    <li>Fireworks</li>
                    <li>Swimming</li>
                    <li>Motorcycles</li>
                    <li>Monday morning alarms</li>
                </ul>
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
