<?php /* Template Name: Success Stories */ ?>

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

    <section class="expandable-list content width-df | mb-4 | ta-c-vw200 | list-boxes list-boxes--4 list-boxes--rounded | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;" data-reduce="12">
        <div class="mb-1 ta-c">
            <?php echo get_field('main_content'); ?>
        </div>
        
        <?php echo get_field('organizations_list'); ?>
        <button class="expandable-list__more">View More</button>
    </section>

    <section class="content width-df | quotes | mbl-7 mbl-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <figure>
            <h2><?php echo get_field('testimonial_heading_1'); ?></h2>
            <blockquote><?php echo get_field('testimonial_quote_1'); ?></blockquote>
            <figcaption><?php echo get_field('testimonial_name_1'); ?> <cite><?php echo get_field('testimonial_organization_1'); ?></cite></figcaption>
        </figure>

        <figure>
            <h2><?php echo get_field('testimonial_heading_2'); ?></h2>
            <blockquote><?php echo get_field('testimonial_quote_2'); ?></blockquote>
            <figcaption><?php echo get_field('testimonial_name_2'); ?> <cite><?php echo get_field('testimonial_organization_2'); ?></cite></figcaption>
        </figure>

        <figure>
            <h2><?php echo get_field('testimonial_heading_3'); ?></h2>
            <blockquote><?php echo get_field('testimonial_quote_3'); ?></blockquote>
            <figcaption><?php echo get_field('testimonial_name_3'); ?> <cite><?php echo get_field('testimonial_organization_3'); ?></cite></figcaption>
        </figure>

        <figure>
            <h2><?php echo get_field('testimonial_heading_4'); ?></h2>
            <blockquote><?php echo get_field('testimonial_quote_4'); ?></blockquote>
            <figcaption><?php echo get_field('testimonial_name_4'); ?> <cite><?php echo get_field('testimonial_organization_4'); ?></cite></figcaption>
        </figure>

        <figure>
            <h2><?php echo get_field('testimonial_heading_5'); ?></h2>
            <blockquote><?php echo get_field('testimonial_quote_5'); ?></blockquote>
            <figcaption><?php echo get_field('testimonial_name_5'); ?> <cite><?php echo get_field('testimonial_organization_5'); ?></cite></figcaption>
        </figure>

        <figure>
            <h2><?php echo get_field('testimonial_heading_6'); ?></h2>
            <blockquote><?php echo get_field('testimonial_quote_6'); ?></blockquote>
            <figcaption><?php echo get_field('testimonial_name_6'); ?> <cite><?php echo get_field('testimonial_organization_6'); ?></cite></figcaption>
        </figure>
    </section>
</main>

<?php
get_footer();
