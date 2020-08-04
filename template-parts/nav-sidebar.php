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
    'category_name' => 'web-apps', // this is the category 
	'order' => 'ASC',
);

// get results
$query = new WP_Query( $args );

// The Loop
?>

<nav id="site-navigation" class="nav-container">
    <?php if( $query->have_posts() ): ?>

    <div class="nav-section">

        <ul class="nav-row">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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