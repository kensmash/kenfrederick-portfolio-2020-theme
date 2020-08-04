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

	<div class="portfolio-info-container">


		<div class="title-and-info">
			<?php the_title( '<h1 class="portfolio-title">', '</h1>' ); ?>
			<?php the_field('description');?>
		</div>

		<div class="meta-container">
			<?php if( have_rows('skills') ): ?>
			<ul class="meta-list">
				<?php while( have_rows('skills') ): the_row();  ?>
				<li>
					<?php the_sub_field('icon'); ?>
					<span class="skill-name">
						<?php if( get_sub_field('url') ): ?>
						<a href="<?php the_sub_field('url'); ?>" target="_blank" rel="noopener noreferrer"><?php the_sub_field('name'); ?></a>
						<?php else:
						the_sub_field('name'); 
						endif; ?>
					</span>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>


	<div class="gutenberg-content-container">
		<?php the_content();?>
	</div>


</article>