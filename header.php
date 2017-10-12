<?php 

  // Call the head code
  get_template_part('partials/main/head' );

  $bya = get_field('bya_link', 'options');

  // start the html body
  // belove
  ?>
  <!-- let's rock and roll -->
  <body <?php body_class(); ?>>
    <!-- main container of all the page elements -->
    <header id="header">
    <div class="container">
      <div class="logo pull-left"><a href="#"><img src="<?php bloginfo('template_directory' ); ?>/images/logo.png" alt="Radiance advanced skin & body care"></a></div>
      <div class="contact-block pull-right">
        <address class="pull-left">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>6777 Woodlands Parkway, Suite 300 <br>The Woodlands, TX 77382</span>
        </address>
        <a href="<?php echo $bya; ?>" class="btn btn-info">BOOK YOUR APPOINTMENT</a>
      </div>
      <div class="contact-block pull-right">
        <a href="woodlandsradiancespa.brilliantconnections.com" target="_blank">
          <img src="/images/BC_ShopLink_Button_ShopNow_Teal_RGB.png" alt="Woodlands Radiance Spa Shop Link">  
        </a>
      </div>
    </div>
    <div class="nav-holder"> 
      <div class="container">
        <nav id="nav">
          <a href="#" class="nav-opener"><strong>Menu</strong> <span>Menu</span></a>
            <?php get_template_part('partials/main/nav' ); ?>
        </nav>
      </div>
    </div>
  </header>
  
  <?php 
    // Call the main header
    //get_template_part('partials/main/nav');?>

