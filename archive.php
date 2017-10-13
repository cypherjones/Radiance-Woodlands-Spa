<?php 
  // get the header
  get_header(); 

  $args = array(

    'post_type' => 'team'

    );


  $context['archives'] = new TimberArchives( $args );
  Timber::render(array('archive-' . $post->post_name . '.twig', 'archive.twig'), $context );
  

  // get the footer
  get_footer(); 

  ?>