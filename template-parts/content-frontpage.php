<?php
/**
 * Template part for displaying home page content in front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenfrederick_2020
 */

?>

<?php  // OPEN COURSES
  
  $query = new WP_Query(array(
      'post_type' => 'projects',
      'posts_per_page' => 6,
      'order' => 'ASC',
      'meta_key' => 'show_on_homepage',
	  'meta_value'=> 1
  ));
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
            <?php if( $query->have_posts() ): ?>

            <div class="nav-section">
                <ul>
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <li class="home-thumbnail-container">
                        <div class="home-thumbnail">
                            <?php if( get_field('homepage_thumbnail') ): ?>

                            <a href="<?php the_permalink(); ?>"><img src="<?php the_field('homepage_thumbnail'); ?>" /></a>
                            <?php endif; ?>

                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>

            <?php endif; ?>

            <?php wp_reset_query();  // Restore global post data stomped by the_post(). ?>
        </div>
    </div>
</article>