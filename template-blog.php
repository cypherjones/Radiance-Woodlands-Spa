<?php
/*
 * Template Name: Blog Page
 * Description: A Page Template just for raidance bios
 */

 // get the header
get_header(); 

$args = array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        // 'category_name'   => 'blog'
    );

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['posts'] = Timber::get_posts($args);
Timber::render(array('template-blog.twig'), $context );

// get the footer
get_footer(); 

	


 ?>