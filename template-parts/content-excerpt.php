<?php
/**
 * Template part for displaying post excerpts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kenfrederick_2020
 */

?>

<div id="post-<?php the_ID(); ?>" class="content-container content">

    <h3><a href="<?php the_permalink();?>" rel="bookmark"><?php the_title(); ?></a></h3>
    <p><?php kenfrederick_2020_posted_on();?></p>
    <?php the_excerpt(); ?>

</div>