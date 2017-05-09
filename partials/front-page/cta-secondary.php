<?php 
  
  $sec_cta_bkg_img_pre = get_field('sec_cta_bkg_img', 'options');
  $sec_cta_bkg_img = $sec_cta_bkg_img_pre['url'];
  $sec_cta_title = get_field('sec_cta_title', 'options');
  $sec_cta_desc = get_field('sec_cta_desc', 'options');
  $sec_cta_specials_bkg= get_field('specials_cta_bkg', 'options');
  $sec_cta_specials_title = get_field('specials_cta_title', 'options');
  $sec_cta_specials_url = get_field('specials_cta_url', 'options');
  $sec_cta_events_bkg = get_field('events_cta_bkg', 'options');
  $sec_cta_events_title = get_field('events_cta_title', 'options');
  $sec_cta_events_url = get_field('events_cta_url', 'options');

 ?>
<section class="description-block" style="background-image:url('<?php echo $sec_cta_bkg_img; ?>');">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h1><?php echo $sec_cta_title; ?></h1>
        <?php echo $sec_cta_desc; ?>
      </div>
      <div class="col-sm-4">
        <div class="link-block">
          <a href="<?php echo $sec_cta_specials_url; ?>">
            <img src="<?php echo $sec_cta_specials_bkg['url']; ?>" alt="MONTHLY SPECIALS">
            <h2><?php echo $sec_cta_specials_title; ?></h2>
          </a>
        </div>
        <div class="link-block">
          <a href="<?php echo $sec_cta_events_url; ?>">
            <img src="<?php echo $sec_cta_events_bkg['url']; ?>" alt="UPCOMING EVENTS">
            <h2><?php echo $sec_cta_events_title; ?></h2>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>