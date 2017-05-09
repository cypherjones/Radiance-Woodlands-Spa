<?php get_header( ); ?>
<section class="page-hero">
  <div class="container">
    <!-- newsletter -->
    <div class="row">
      <div class="hero stand-page">
        <!-- hero msg -->
        <div class="col-md-12">
          <div class="title header">
            All the latest News
          </div>
          <div class="page-header-line"></div>
          <div class="subheader">
            <?php //if(get_field('subheader')) : the_field('subheader'); endif;?>
            Get all the latest news!
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="archive-blog">
  <div class="container">
    <div class="row">
      <?php 
        $args = array(
          'order' => 'DESC',
          'showposts' => -1       
        );

        $the_latest = new WP_Query( $args );
        
        if ($the_latest->have_posts()) : while ($the_latest->have_posts()) : $the_latest->the_post(); 
        $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
        $postContent = get_the_content( ); ?>
      <div class="col-md-4">
        <div class="post-box wow fadeIn">
          <div class="post-image">
            <img src="<?= $src[0]; ?>" alt="">
          </div>
          <div class="post-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title( ); ?>
            </a>
          </div>
          <div class="post-content">
            <?= wp_trim_words($postContent, 55 ); ?>...
          </div>
          <div class="post-cta">
            <a href="<?php the_field('news_link') ?>" target="_blank">read more</a> 
          </div>
        </div>
      </div>
      <?php endwhile; endif; wp_reset_query(); rewind_posts(); ?>
    </div>
  </div>
</section>
<?php get_footer( ); ?>