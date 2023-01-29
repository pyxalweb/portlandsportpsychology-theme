<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package psp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class('preload'); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="header">
	<div class="header__container | content width-lg">
		<div class="header__logo">
            <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" width="283" height="73" alt="Portland Sport Psychology">
            </a>
        </div>

		<nav class="nav-traditional" aria-label="Main Navigation">
			<ul>
				<?php include('inc-navigation.php'); ?>
			</ul>
        </nav>

		<div class="header__nav">
            <a class="overlay-nav-toggle" href="#" aria-label="Toggle Navigation Menu">
                <?php include('assets/icon-navigation.svg'); ?>
            </a>
        </div>
	</div>

	<div class="overlay-nav">
        <nav class="mobile-nav" aria-label="Main Navigation Mobile">
            <ul>
				<?php include('inc-navigation.php'); ?>
            </ul>
        </nav>
    </div>
</header>

<div class="thumb-cta">
    <a href="#">Schedule Consultation</a>
	<a href="#">Waksman's Workbook</a>
</div>


	<?php /*
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$psp_description = get_bloginfo( 'description', 'display' );
			if ( $psp_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $psp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'psp' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	*/ ?>
