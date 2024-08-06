<?php

/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. 
	?>
	<!--[if lt IE 9]>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js?ver=3.7.0" type="text/javascript"></script>
<![endif]-->
	<?php wp_head(); ?>

	<?php
	$options = get_option('goldira_blog_settings');
	$blogFont = esc_attr($options['goldira_blog_font']);
	$blogFontSize = esc_attr($options['goldira_blog_font_size']);


	/** Post related **/
	$options = get_option('goldira_post_settings');

	$postTextColor = esc_attr($options['goldira_post_text_color']);
	$postLinkColor = esc_attr($options['goldira_post_link_color']);
	$postLinkHoverColor = esc_attr($options['goldira_post_link_hover_color']);

	$postTitleColor = esc_attr($options['goldira_post_title_color']);
	$postTitleSize = esc_attr($options['goldira_post_title_font_size']);
	$postTitleFont = esc_attr($options['goldira_post_title_font']);
	/** Footer Related */
	$options = get_option('goldira_footer_settings');
 
	$footerLinkColor = esc_attr($options['goldira_footer_linkcolor']);
	$footerFontSize = esc_attr($options['goldira_footer_font_size']);
	$footerBackground = esc_attr($options['goldira_footer_background']);

	?>
	<style>
		.postcontent {
			font-family: <?php echo $blogFont; ?>;
			font-size: <?php echo $blogFontSize; ?>px;
			color: <?php echo $postTextColor; ?>;
		}

		.postcontent a {
			color: <?php echo $postLinkColor; ?>;
		}

		.postcontent a:hover {
			color: <?php echo $postLinkHoverColor; ?>;
		}

		footer#colophon {
			font-size: <?php echo $footerFontSize; ?>px;
		}

		footer#colophon a {
			color: <?php echo $footerLinkColor; ?>;
		}

		footer#colophon.widgetarea {
			background-color: <?php echo $footerBackground; ?>;
			padding-top: 33px;
			padding-bottom: 33px;
		}

		.posthead h1 {
			font-size: <?php echo $postTitleSize; ?>px;
			color: <?php echo $postTitleColor; ?>;
			font-family: <?php echo 	$postTitleFont;?>;
		}
	</style>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="masthead" class="site-header">


		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle"><?php _e('Menu', 'twentytwelve'); ?></button>
			<a class="assistive-text" href="#content"><?php _e('Skip to content', 'twentytwelve'); ?></a>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'nav-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<?php if (get_header_image()) {  ?>
			<a href="<?php echo esc_url(home_url('/')); ?>"><?php twentytwelve_header_image(); ?></a>
		<?php } else {  ?>

			<hgroup>

				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<h2 class="site-description"><?php bloginfo('description'); ?></h2>
			</hgroup>
		<?php } ?>



	</header><!-- #masthead -->
	<div id="page" class="hfeed site">


		<div id="main" class="wrapper">