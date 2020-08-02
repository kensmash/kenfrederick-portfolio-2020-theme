<?php
/**
 * Template Name: Front Page
 *
 * Template file for the site home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kenfrederick_2020
 */

get_header();
?>

<main id="primary" class="main-container">

	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'frontpage' );

		
		endwhile; // End of the loop.
		?>

</main><!-- #main -->

<?php
get_footer();