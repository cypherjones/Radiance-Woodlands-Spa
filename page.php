<?php 
  // get the header
  get_header(); 

  //get the page wrapper


$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
Timber::render(array('page-' . $post->post_name . '.twig', 'page.twig'), $context );


  
  
  // get the footer
  get_footer(); 

 ?>
