<?php 
  // get the header
  get_header(); 

  $args = array(

    'post_type' => 'service'

    );


  $context['archives'] = new TimberArchives( $args );
  Timber::render(array('archive-' . $post->post_name . '.twig', 'archive.twig'), $context );
  

  // get the footer
  get_footer(); 

  ?>