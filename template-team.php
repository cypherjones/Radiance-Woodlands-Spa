<?php
/*
 * Template Name: Sub Page
 * Description: A Page Template just for raidance bios
 */

  // get the header
  get_header(); 

  //get the page wrapper


	$context = Timber::get_context();
	$post = new TimberPost();
	$context['post'] = $post;
	$context['sidebar'] = Timber::get_sidebar('sidebar.php' );
	Timber::render(array('template-sub.twig'), $context );


  
  
  // get the footer
  get_footer(); 

 ?>
