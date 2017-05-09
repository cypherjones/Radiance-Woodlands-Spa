<?php 

$jumbo_prep_img = get_field('jumbo_bkg_img', 'options');
$jumbo_bkg_image = $jumbo_prep_img['url'];
$jumbo_sub_title = get_field('jumbo_sub_title', 'options');
$jumbo_title = get_field('jumbo_title', 'options');
$jumbo_info_title = get_field('jumbo_info_title', 'options');

?>

<section class="visual" style="background-image:url('<?php echo $jumbo_bkg_image; ?>');">
  <div class="container"> 
    <div class="text-block">
      <span class="sub-title"><?php echo $jumbo_sub_title; ?></span>
      <h1><?php echo $jumbo_title; ?></h1>
      <strong class="info-title"><?php echo $jumbo_info_title; ?></strong>
    </div>
  </div>
</section>