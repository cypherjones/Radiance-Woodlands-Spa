<?php 

  $trust_position = get_field('trust_position', 'options');
  $trust_name = get_field('trust_name', 'options');
  $trust_pos_img_pre = get_field('trust_position_img', 'options');
  $trust_pos_img = $trust_pos_img_pre['url'];
  $trust_pos_title = get_field('trust_position_title', 'options');
  $trust_pos_description = get_field('trust_position_description', 'options');
 ?>



<section class="founder-info">
  <div class="container">
    <div class="row">
      <div class="col-md-6 clearfix">
        <img src="<?php echo $trust_pos_img; ?>" alt="Lauren Olson" class="pull-right">
        <span class="position"><?php echo $trust_position; ?></span>
        <h1><?php echo $trust_name; ?></h1>
        <span class="signature-holder"><img src="<?php bloginfo('template_directory' ); ?>/images/text-signature.png" alt="Lauren Olson"></span>
      </div>
      <div class="col-md-6">
        <h1><?php echo $trust_pos_title; ?></h1>
        <?php echo $trust_pos_description; ?>
      </div>
    </div>
  </div>
</section>