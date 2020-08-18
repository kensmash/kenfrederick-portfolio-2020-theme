<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kenfrederick_2020
 */

get_header();
?>

<main id="primary" class="main-container">

	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => esc_html__( 'Next:', 'kenfrederick_2020' ) . ' %title',
					'next_text' => esc_html__( 'Previous:', 'kenfrederick_2020' ) . ' %title',

				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) : ?>
	<div class="comments-container content">
		<hr>
		<?php comments_template(); ?>
	</div>
	<?php endif;

		endwhile; // End of the loop.
		?>

</main><!-- #main -->

<?php
get_footer();