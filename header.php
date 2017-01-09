<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _pandapress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mobile-menu', 'container_id' => 'mobile-menu-container' ) ); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_pandapress' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<div class="site-logo">
				<a href="http://chicagowomenintrades2.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/CWIT-logo-color.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/CWIT-logo-color.png 1x, <?php echo get_template_directory_uri(); ?>/assets/img/CWIT-logo-color@2x.png 2x"/></a>
			</div>
			<div id="site-nav-button-id" class="site-nav-button">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
			</div>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php /* echo $description;  WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'container_class' => 'menu-primary-menu-container' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
