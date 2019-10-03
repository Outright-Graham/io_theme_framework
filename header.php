<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Altimeter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site"> <!-- This gets closed in the footer / disregard-leave it -->


	<header id="masthead" class="site-header">
		<div id="primary" class="content-area">

				<!-------------- Navigation: Left/logo --------->
				<div class="site-branding nav-left float-left">

					<?php
					the_custom_logo();
					?>

				</div><!-- .site-branding -->

				<!-------------- Navigation: Right/links --------->
				<nav id="site-navigation" class="main-navigation nav-right float-left">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( ' ', 'io' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
				<!-------------- Navigation: Search/form --------->
				<div class="nav-search float-left">
					<?php get_search_form(); ?>
				</div>

				<span class="clear-both"></span>

		</div><!-- End Primary -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
