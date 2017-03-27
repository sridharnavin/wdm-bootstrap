<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<?php

	if(have_posts()) :
		while(have_posts()) : the_post(); ?>
		<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
		<p><?php the_content(); ?></p>
<?php
	endwhile;
	else :
		echo '<p>No content found</p>';
	endif;

	get_footer(); ?>