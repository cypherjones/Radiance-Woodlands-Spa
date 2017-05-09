<?php 
	
	$cta_img_prep = get_field('cta_bkg_img', 'options');
	$cta_bkg_image = $cta_img_prep['url'];
	$cta_info_text = get_field('cta_info_text', 'options');
	$cta_phone_text = get_field('phone_text', 'options');
	$cta_phone = get_field('cta_phone', 'options');
	$cta_closing_text = get_field('cta_closing_text', 'options');
	$cta_link = get_field('cta_prime_url','options');

 ?>
<section class="info-panel" style="background-image:url('<?php echo $cta_bkg_image;?>');">
  <div class="container">
    <span class="info-text"><?php echo $cta_info_text; ?></span>
    <span class="phone"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <span class="text"> <?php echo $cta_phone_text; ?><br><a href="tel:<?php echo $cta_phone; ?>"><?php echo $cta_phone; ?></a></span></span>
    <span class="gift"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> <a href="<?php echo $cta_link; ?>" target="_blank"><?php echo $cta_closing_text; ?></a></span>
  </div>
</section>