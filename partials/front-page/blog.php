<section class="blog block-holder">
  <div class="container">
    <div class="four-blocks">
      <?php 
          /**
           * The WordPress Query class.
           * @link http://codex.wordpress.org/Function_Reference/WP_Query
           *
           */
          $args = array(
          
            'post_type' => array(
              'post',
              ),
            'post_status'    => 'publish',
            'posts_per_page' => 4      
            
          );
        
        $recent_posts = new WP_Query( $args );
        
        $i = 0;

        while ($recent_posts->have_posts()) : $recent_posts->the_post();

        $i++;

        if ( $i == 2 || $i == 3 ) :
          $color_class = 'light';
        else :
          $color_class = 'dark';
        endif;

        $featured_img = get_the_post_thumbnail_url( );
        
       ?>
      <div class="block <?php echo $color_class; ?>">
        <img src="<?php echo $featured_img; ?>" alt="Looking Like a Zombie? How to Combat Dark Circles Under Your Eyes Lorem ipsum dolor sit amet, consectetuer adipiscin elit, volutpat adipiscing.">
        <div class="holder">
          <h2><?php echo the_title( ); ?></h2>
          <a href="<?php the_permalink(); ?>" class="btn btn-default">READ MORE</a>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</section>