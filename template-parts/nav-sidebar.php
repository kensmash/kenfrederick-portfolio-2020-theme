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

$webArgs = array(
	'posts_per_page' => -1,
    'post_type' => 'projects',
    'category_name' => 'web-apps', // this is the category 
	'order' => 'ASC',
);

$printArgs = array(
	'posts_per_page' => -1,
    'post_type' => 'projects',
    'category_name' => 'print', // this is the category 
	'order' => 'ASC',
);

// get results
$web_query = new WP_Query( $webArgs );
$print_query = new WP_Query( $printArgs );
 
// The Loop
?>

<nav id="site-navigation" class="nav-container">
    <?php if( $web_query->have_posts() ): ?>

    <div class="nav-section">
        <p class="nav-title">Web/Apps</p>
        <ul class="row">
            <?php while ( $web_query->have_posts() ) : $web_query->the_post(); ?>
            <li class="thumbnail">
                <?php if( get_field('navigation_thumbnail') ): ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php the_field('navigation_thumbnail'); ?>" /></a>
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>

    <?php endif; ?>

    <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>

    <?php if( $print_query->have_posts() ): ?>

    <div class="nav-section">
        <p class="nav-title">Print</p>
        <ul class="row">
            <?php while ( $print_query->have_posts() ) : $print_query->the_post(); ?>
            <li class="thumbnail">
                <?php if( get_field('navigation_thumbnail') ): ?>
                <a href="<?php the_permalink(); ?>"><img src="<?php the_field('navigation_thumbnail'); ?>" /></a>
                <?php endif; ?>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>

    <?php endif; ?>

    <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
</nav>