<?php
/*
 * Template Name: Bio's Page
 * 
 * Description: A Page Template just for raidance bios
 */

 // get the header
get_header(); 

$args = array(
        'post_type'      => 'team',
        'posts_per_page' => -1,
    );

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$context['team'] = Timber::get_posts($args);
Timber::render(array('template-bios.twig'), $context );

// get the footer
get_footer(); 

 ?>