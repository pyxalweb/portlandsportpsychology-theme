<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- prefetch -->
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link rel="dns-prefetch" href="//www.googletagmanager.com">

	<title><?php wp_title('-', 'echo', 'right'); ?></title>
	<?php wp_head(); ?>

    <!-- icons -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png">
    <!-- <link rel="icon" href="<?php // echo get_template_directory_uri(); ?>/assets/favicon-dark-mode.png" media="(prefers-color-scheme: dark)"> -->
    <!-- <link rel="icon" href="<?php // echo get_template_directory_uri(); ?>/assets/favicon-light-mode.png" media="(prefers-color-scheme: light)"> -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest">
    <meta property="og:image" content="http://portlandsportpsychology.local/wp-content/themes/psp/assets/logo-schema.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="680">

    <!-- other -->
    <meta name="google-site-verification" content="QtqxUx5tZdF2ZfUpohgrciG_P2k0WffU8G4w6fJQQEQ">
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C83XW0630B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C83XW0630B');
</script>

<body <?php body_class('preload'); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/site', 'skip-nav' ); ?>

<header id="site-header" class="header">
	<div class="header__container | content width-df">
		<div class="header__logo">
            <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo@1x.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/logo@1x.png, <?php echo get_template_directory_uri(); ?>/assets/logo@2x.png 2x" alt="Portland Sport Psychology" width="291" height="60">
            </a>
        </div>

		<nav class="nav-traditional" aria-label="Main Navigation">
			<?php get_template_part( 'template-parts/site', 'navigation' ); ?>
        </nav>

		<div class="header__nav">
            <a class="overlay-nav-toggle" href="#" aria-label="Toggle Navigation Menu">
                <?php include('assets/icon-navigation.svg'); ?>
            </a>
        </div>
	</div>

	<div class="overlay-nav">
        <nav class="mobile-nav" aria-label="Main Navigation Mobile">
			<?php get_template_part( 'template-parts/site', 'navigation' ); ?>
        </nav>
    </div>
</header>

<div class="thumb-cta">
    <a href="contact">Schedule Consultation</a>
	<a href="waksmans-workbook">Waksman's Workbook</a>
</div>
