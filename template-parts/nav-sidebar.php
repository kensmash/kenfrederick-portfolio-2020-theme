<?php
/**
 * Template part for site side navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenfrederick_2020
 */

?>

<?php

$args = array(
	'posts_per_page' => -1,
	'post_type' => 'projects',
	'order' => 'ASC',
);

// get results
$the_query = new WP_Query( $args );
 
// The Loop
?>

<nav id="site-navigation" class="nav-container">
    <?php if( $the_query->have_posts() ): ?>

    <div class="nav-section">
        <p class="nav-title">Web/Apps</p>
        <ul class="row">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="thumbnail">
                <?php if( get_field('navigation_thumbnail') ): ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php the_field('navigation_thumbnail'); ?>" /></a>
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>


    <?php else:  ?>
    <div class="nav-section">
        <p><?php _e( 'Sorry, no projects to display.' ); ?></p>
    </div>

    <?php endif; ?>
</nav>

<?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>