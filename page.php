<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package psp
 */

get_header();
?>

<?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', 'page' );
endwhile;
?>

<?php
get_footer();
