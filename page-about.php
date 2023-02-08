<?php /* Template Name: About */ ?>

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
	get_template_part( 'template-parts/content', 'page' );
	?>

    <?php
	get_template_part( 'template-parts/content', 'split-content' );
	?>
</main>

<!-- #post-<?php the_ID(); ?> -->

<?php
get_template_part( 'template-parts/admin', 'edit' );
?>

<?php
get_footer();
