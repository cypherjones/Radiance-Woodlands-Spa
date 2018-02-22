<?php 

  // Call the head code
  get_template_part('partials/main/head' );

  $bya = get_field('bya_link', 'options');

  // start the html body
  // belove
  ?>
  <!-- let's rock and roll -->
  <body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-JXPV"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -—>
    main container of all the page elements -->
    <header id="header">
    <div class="container">
      <div class="logo pull-left"><a href="<?php bloginfo('url' ); ?>"><img src="<?php bloginfo('template_directory' ); ?>/images/radiance-logo-black.png" alt="Radiance advanced skin & body care"></a></div>
      <div class="contact-block pull-right">
        <address class="pull-left">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>6777 Woodlands Parkway, Suite 300 <br>The Woodlands, TX 77382 <br><a href="tel:281-367-4700">281-367-4700</a></span>
        </address>
        <a href="<?php echo $bya; ?>" class="btn btn-info btn-cta">Request an Appointment</a>
        <a href="http://woodlandsradiancespa.brilliantconnections.com" target="_blank">
          <img src="<?php bloginfo( 'template_directory' ) ?>/images/BC_ShopLink_Button_ShopNow_White_RGB.png" alt="Woodlands Radiance Spa Shop Link" style="width: 205px;">
        </a>
      </div>
    </div>
    <div class="nav-holder">
      <div class="container">
        <nav id="nav">
          <a href="#" class="nav-opener"><strong>Menu</strong> <span>Menu</span></a>
            <?php get_template_part('partials/main/nav' ); ?>
            foo
        </nav>
      </div>
    </div>
  </header>
  
  <?php 
    // Call the main header
    //get_template_part('partials/main/nav');?>

