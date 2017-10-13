<section class="blog block-holder">
  <div class="container">
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
            'posts_per_page' => 3      
            
          );
        global $post;
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
        // $featured_img = wp_get_attachment_url($featured_img);
        $postCat = get_the_category( $post->ID );
        
       ?>
          <div class="blog-block">
            <div class="img-box">
              <?php if (!empty($featured_img)) : ?>  
                <img src="<?php echo $featured_img; ?>" alt="" class="img-responsive">
              <?php else : ?>
                <img src="http://placehold.it/400x225" alt="{{ post.title }}" class="img-responsive">
              <?php endif; ?>
            </div>
            <div class="meta">
              <div class="cat">
                <p><?php echo $postCat[0]->name; ?></p>
              </div>
              <div class="blog-content-holder">
                <p><?php the_title( ); ?></p>
              </div>
              <div class="button-holder">
                <a href="<?php the_permalink(); ?>" class="blog-btn btn btn-default">READ MORE</a>
              </div>
            </div>
          </div>

    <?php endwhile; ?>
    </div>
</section>