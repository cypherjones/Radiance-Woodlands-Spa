<?php
/**
 * Template Name: Full Width
 */

  // get the header
  get_header(); 

  //get the page wrapper
  echo 
  // page wrapper html
  '<!-- contain main informative part of the site -->'.
    '<main id="main">'.
      '<!-- single post section -->';

        // page inner content 
        get_template_part('partials/content/page-inner','fw' );

  // close the page wrapper
  echo 
  // end of the page wrapper
    '</main>';

  // call the testimony section
  get_template_part('partials/front-page/testimony', 'section' ); 
  // get the footer
  get_footer(); 



 ?>