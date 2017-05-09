<?php 
  // get the header
  get_header(); 

  //get the page wrapper
  ?>
<!-- contain main informative part of the site -->
    <main id="main" role="main">
      <?php 

        get_template_part('partials/content/page', 'header' );


       ?>
      <!-- contain sidebar of the page -->
      <section class="team">
        <div class="container">
          <h1 class="team-heading">Leadership</h1>
          <h2 class="hidden">Leadership</h2>
          <?php 

            $args = array(



              );
                
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 

            ?>
          <figure class="team-picture">
              <a href="#" class="image-holder">
                <picture>
                  <!--[if IE 9]><video style="display: none;"><![endif]-->
                  <source srcset="<?php bloginfo('template_directory' ); ?>/images/img08.jpg, <?php bloginfo('template_directory' ); ?>/images/img08.jpg 2x, <?php bloginfo('template_directory' ); ?>/images/img08.jpg 3x" media="(max-width: 767px)"/>
                  <source srcset="<?php bloginfo('template_directory' ); ?>/images/img08.jpg" media="(max-width: 1024px)"/>
                  <source srcset="<?php bloginfo('template_directory' ); ?>/images/img08.jpg, <?php bloginfo('template_directory' ); ?>/images/img08.jpg 2x"/>
                  <!--[if IE 9]></video><![endif]-->
                  <img src="<?php bloginfo('template_directory' ); ?>/images/img08.jpg" alt="image description" width="212" height="212">
                </picture>
              </a>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
              <em class="designation"><?php echo the_field('title'); ?></em>
            </figure>
            <?php endwhile; endif; ?>
        </div>
      </section>
      <?php get_template_part('partials/main/contact' ); ?>
    </main>


  <?php
  // get the footer
  get_footer(); 

  ?>