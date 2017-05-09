<?php 
	$quote_bkg = get_field('testimonials_bkg_img', 'options');
	$quote = get_field('quote', 'options');

 ?>
<section class="description-block" style="background-image:url('<?php echo $quote_bkg['url'] ?>');">
  <div class="container">
    <blockquote>
      <?php echo $quote; ?>
    </blockquote>
  </div>
</section>