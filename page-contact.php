<?php /* Template Name: Contact */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior push'); ?>>
    <section class="masthead-interior | pbl-7 pbl-3-vw400 mb-4 mb-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df">
            <h1><?php echo get_field('heading'); ?></h1>
            <div class="mt-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
            </div>
        </div>

        <?php
		$image = get_field('masthead');
		if ($image):
			$url = $image['url'];
			$alt = $image['alt'];
		?>
		<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="1920" height="500" class="content-bg__photo">
        <?php endif; ?>
    </section>

    <section class="content width-sm | mb-4 | ta-c-vw500 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="text-400--h2 text-400--h3 | df g-3 jc-c mb-2 db-vw500">
            <div class="mb-1-vw500">
                <?php get_template_part( 'template-parts/content', 'contact-info' ); ?>
            </div>

            <div class="contact__social">
                <h3><?php echo get_field('social_heading'); ?></h3>
                <?php get_template_part( 'template-parts/content', 'social' ); ?>
            </div>
        </div>

        <div class="white-rectangle">
            <!-- EW jotform -->
            <script type="text/javascript" src="https://form.jotform.com/jsform/231270849695164"></script>

            <!-- AW jotform -->
            <!--
            <script type="text/javascript" src="https://form.jotform.com/jsform/230519508961056"></script>
            -->
        </div>

        <div class="df fd-c g-1 ta-c mi-center-child">
            <h3><?php echo get_field('workbook_heading'); ?></h2>

            <img src="<?php echo get_template_directory_uri(); ?>/assets/waksmans-sport-psychology-workbook-small.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes" width="144" height="189">

            <a href="/waksmans-workbook" aria-label="Order Waksman's Workbook Now" class="button">Order Now</a>
        </div>
    </section>
</main>

<?php
get_footer();
