<?php /* Template Name: Parent Information */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior no-masthead'); ?>>
    <section class="pbl-7 pbl-3-vw400 mb-7 mb-3-vw400 ta-c | content-bg | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content width-df">
            <div class="svg svg--57h | mb-1 mi-center-child">
                <?php load_inline_svg('icon-parents.svg'); ?>
            </div>
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

    <section class="content width-sm | mb-7 mb-3-vw400 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <ul class="numbered-items">
            <li>
                <div class="numbered-item">
                    <h2><?php echo get_field('numbered_item_heading_1'); ?></h2>
                    <div class="numbered-item__content">
                        <?php echo get_field('numbered_item_content_1'); ?>
                    </div>
                </div>
            </li>

            <li>
                <div class="numbered-item">
                    <h2><?php echo get_field('numbered_item_heading_2'); ?></h2>
                    <div class="numbered-item__content">
                        <?php echo get_field('numbered_item_content_2'); ?>
                    </div>
                </div>
            </li>

            <li>
                <div class="numbered-item">
                    <h2><?php echo get_field('numbered_item_heading_3'); ?></h2>
                    <div class="numbered-item__content">
                        <?php echo get_field('numbered_item_content_3'); ?>
                    </div>
                </div>
            </li>

            <li>
                <div class="numbered-item">
                    <h2><?php echo get_field('numbered_item_heading_4'); ?></h2>
                    <div class="numbered-item__content">
                        <?php echo get_field('numbered_item_content_4'); ?>
                    </div>
                </div>
            </li>

            <li>
                <div class="numbered-item">
                    <h2><?php echo get_field('numbered_item_heading_5'); ?></h2>
                    <div class="numbered-item__content">
                        <?php echo get_field('numbered_item_content_5'); ?>
                    </div>
                </div>
            </li>
        </ul>
    </section>
</main>

<?php
get_footer();
