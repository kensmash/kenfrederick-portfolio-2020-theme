<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kenfrederick_2020
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
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kenfrederick_2020' ); ?></a>

		<header id="masthead" class="me">
			<div class="me-content">

				<div class="title-desc-container">
					<p class="title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<p class="title-desc"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
				</div>

				<div class="blog-menu-container">
					<a href="<?php echo get_permalink( get_page_by_path( 'blog' ) )?>" class="mainnav-blog">Blog</a>
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span class="menu-toggle-text">Work</span>
						<div class="hamburger-menu">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</button>
				</div>


			</div>
		</header> <!-- #masthead -->

		<?php get_template_part( 'template-parts/nav', 'sidebar-webprint' ); ?>