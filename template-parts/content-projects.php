<?php
/**
 * Template part for displaying projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenfrederick_2020
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="content-container featured-image-background" style="background: radial-gradient(<?php the_field('featured_image_color_light')?>, <?php the_field('featured_image_color_dark')?>);">
		<div class="featured-image-container">
			<?php kenfrederick_2020_post_thumbnail(); ?>
		</div>
	</div>

	<div class=" portfolio-info-container">
		<div class="portfolio-title-container">
			<?php the_title( '<h1 class="portfolio-title">', '</h1>' ); ?>
		</div>

		<div class="title-and-info">
			<p class="portfolio-desc"><?php echo get_the_excerpt()?></p>
		</div>
		<div class="meta-container">
			<ul class="meta-list">

			</ul>
		</div>
	</div>

	<div>
		<?php the_content()?>
	</div>


</article>