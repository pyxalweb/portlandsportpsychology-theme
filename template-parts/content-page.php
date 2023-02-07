<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package psp
 */
?>

<section id="site-masthead" class="masthead masthead--video" role="complementary" aria-label="Decorative looping video">
    <div class="masthead__overlay homepage | animate-scroll-fade-in" data-delay="0.5">
        <div class="masthead__overlay__box">
            <div class="masthead__overlay__heading">
                <?php the_title( '<h1>', '</h1>' ); ?>
            </div>
        </div>
    </div>

    <div class="masthead__media photo">
		<!-- <img src="<?php echo get_template_directory_uri(); ?>/photos/masthead-01.jpg" alt="" width="1920" height="500"> -->
		<?php
		$image = get_field('masthead');
		if ($image):
			$url = $image['url'];
			$alt = $image['alt'];
		endif;
		?>
		<img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="1920" height="500">
	</div>
</section>

<main id="site-content" <?php post_class($class = 'site-content interior'); ?>>
	<section class="content width-df | mbl-7 mbl-vw400-3 | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%">
		<?php
		the_content();

		// pagination
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'psp' ),
				'after'  => '</div>',
			)
		);
		?>

		<?php
		// edit page link (admin only)
		if ( get_edit_post_link() ) :
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'psp' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
		endif;
		?>
	</section>
</main>

<!-- #post-<?php the_ID(); ?> -->