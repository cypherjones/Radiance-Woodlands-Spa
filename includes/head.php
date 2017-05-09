 <!-- <!doctype html> -->
<html lang="en">
<head>
  <meta charset="utf-8">
    
    <title><?php wp_title(); ?></title>
    <!-- Yoast will get the rest -->
    
    <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <!-- Mobile Jazz -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/bootstrap.css">
    
    <!-- RSS -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <!-- include google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7cSource+Sans+Pro:400,700,900" rel="stylesheet">
    <!-- include jQuery library -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" defer></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory' ); ?>/js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="<?php bloginfo('template_directory' ); ?>/js/bootstrap.min.js" defer></script>
    <!-- include custom JavaScript -->
    <script src="<?php bloginfo('template_directory' ); ?>/js/jquery.main.js" defer></script>
        <script src="<?php bloginfo('template_directory' ); ?>/js/functions.js" defer></script>


    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/custom.css">
   



    <!-- track me -->
