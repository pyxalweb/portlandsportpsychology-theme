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

<!-- #post-<?php the_ID(); ?> -->

<?php
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
