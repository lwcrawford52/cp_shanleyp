<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shanley_Price
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/5e4bc6a552.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
	<div class="header-inner container">

		<div class="site-branding">
		<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/SP_Logo_White.svg" class="logo"></a>

		</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->


	</div>
	<div class="mobile-nav">
	<nav id="mobile-nav" class="mobile">
				
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'mobile',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>

			</div>
	</header><!-- #masthead -->
