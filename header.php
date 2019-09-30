<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KRAYSTOM
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
<div id="page" class="site">
	<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-3">
						<div class="logo">		
							<?php the_custom_logo();	?>
						</div>
						<div class="number">
							<i class="fas fa-phone color-b69a68"></i><div class="header-number"><span class="color-b69a68 font-weight-bold">8 (3822) </span><span>979622</span></div>
						</div>
					</div>
					<div class="col-lg-9 nav-block">
						<div class="top-nav__block">
							<nav id="site-navigation" class="main-navigation">
								<?php 	wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );?>
							</nav>
							<div class="header-sity"><i class="fal fa-map-marked-alt"></i><span>г.Томск</span></div>
						</div>
						<div class="bottom-nav__block search">
							<?php get_search_form(); ?>	
						</div>
					</div>
				</div>
			</div>
	</header>
	<div id="content" class="site-content">
