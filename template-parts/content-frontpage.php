<?php
/**
 * Template part for displaying home page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenfrederick_2020
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("home-background"); ?>>
    <div class="home-top">
        <div class="home-text">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <?php the_content(); ?>
        </div>
    </div>
    <div class="home-nav-section">
        <div class="triangle"></div>
        <p class="latest-work-title">Below is some of my recent work.</p>
        <div class="home-content-container">
            Placeholder
        </div>
    </div>
</article>