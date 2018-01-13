<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Media_2_WordPress
 */

?>
	<!doctype html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/fonts/css/fontawesome-all.min.css">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html_e( 'Skip to content', 'media2wp' ); ?>
			</a>

			<header id="masthead" class="site-header">

				<!-- NAVIGATION -->
				<nav class="navbar navbar-expand-md navbar-dark bg-dark">
					<div class="container">
						<a href="/" class="navbar-brand">MEDIA <small>2</small> WORDPRESS</a>
						<button class="navbar-toggler" data-toggle="collapse" data-target="#navNavbar">
							<span class="navbar-toggler-icon"></span>
						</button>

						<?php
							wp_nav_menu( array(
								'theme_location'	=> 'menu-1',
								'container'				=> 'div',
								'container_class' => 'collapse navbar-collapse',
								'container_id' 		=> 'navNavbar',
								'menu_class' 			=> 'navbar-nav ml-auto',
							) );
						?>

					</div>
				</nav>



				<!-- #site-navigation -->
			</header>

			<div id="content" class="site-content">
