<?php
$timber = new \Timber\Timber();

add_filter( 'timber_context', 'radiance_timber_context'  );

function radiance_timber_context( $context ) {
    $context['options'] = get_fields('option');
    return $context;
}

// Theme Options

if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Front Page Settings',
    'menu_title'  => 'Front Page',
    'parent_slug' => 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Sidebar Settings',
    'menu_title'  => 'Sidebar',
    'parent_slug' => 'theme-general-settings',
  ));
  
}

// Register CSS 

  function theme_name_scripts() {
  	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    // wp_enqueue_script( 'jquery' ); 
  }

  add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );





// Remove that awkward admin bar 

  function my_filter_head() { remove_action('wp_head', '_admin_bar_bump_cb'); }
  add_action('get_header', 'my_filter_head');

  function my_function_admin_bar(){ return false; }
  add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// This theme uses wp_nav_menu() in one location

	register_nav_menus( array(
    'main-nav'   => __( 'Main Nav', 'main-nav'),
    'footer-nav' => __( 'Footer Nav', 'footer-nav'),
    'left-nav'   => __('Left Nav', 'left-nav'),
    'right-nav'  => __('Right Nav', 'right-nav'),
    'mobile-nav' => __('Mobile Nav', 'mobile-nave'),
	) );

// Add active functionality to menu

  add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
  function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active';
     }
     return $classes;
  }
  
//Page Slug Body Class

  function add_slug_body_class( $classes ) {
    global $post;
      if ( isset( $post ) ) {
      $classes[] = $post->post_type . '-' . $post->post_name;
    }
      return $classes;
    }

    add_filter( 'body_class', 'add_slug_body_class' );

// More Excerpt Control

  function new_excerpt_more( $more ) {
  	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read more.', 'your-text-domain') . '</a>';
  }

  add_filter( 'excerpt_more', 'new_excerpt_more' );


// Excerpt Limit

  function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      //$excerpt = implode(" ",$excerpt).' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '"><span class="keep-reading">Keep Reading</span></a>';
     $excerpt = implode(" ",$excerpt).'...';    
    } else {
      $excerpt = implode(" ",$excerpt);
    }	
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
  }

// Add Thumbnails to Posts

  add_theme_support('post-thumbnails', array( 'post', 'page', 'gallery' ) );
  
// Content Limit

  function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content)>=$limit) {
      array_pop($content);
      $content = implode(" ",$content).'...';
    } else {
      $content = implode(" ",$content);
    }	
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters('the_content', $content); 
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
  }	

// Add page slug as nav IDs

  function nav_id_filter( $id, $item ) {
    return 'menu-item-'.sanitize_title_with_dashes($item->title);
  }

  add_filter( 'nav_menu_item_id', 'nav_id_filter', 10, 2 );


// Add Search Filter

  function SearchFilter($query) {
       if ($query->is_search) {
          $query->set('post_type', array('post', 'page'));
          $query->set( 'posts_per_page', '8' );
       }
       return $query;
  }
  add_filter('pre_get_posts','SearchFilter');

  add_theme_support( 'html5', array( 'search-form' ) );


// ******************** CUSTOM POST TYPES ************************
  
function event_post_type() {
      $labels = array(
        'name'                => _x( 'Events', 'Post Type General Name', 'frtb' ),
        'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'frtb' ),
        'menu_name'           => __( 'Events', 'frtb' ),
        'parent_item_colon'   => __( 'Parent Events:', 'frtb' ),
        'all_items'           => __( 'All Events', 'frtb' ),
        'view_item'           => __( 'View Events', 'frtb' ),
        'add_new_item'        => __( 'Add New Events', 'frtb' ),
        'add_new'             => __( 'Add Events', 'frtb' ),
        'edit_item'           => __( 'Edit Events', 'frtb' ),
        'update_item'         => __( 'Update Events', 'frtb' ),
        'search_items'        => __( 'Search Events', 'frtb' ),
        'not_found'           => __( 'Not found', 'frtb' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'frtb' ),
      );
      $args = array(
        'label'               => __( 'event', 'frtb' ),
        'description'         => __( 'Post Type Description', 'frtb' ),
        'labels'              => $labels,
        'supports'            => array( 'title'),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 10,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite'             => array('slug' => 'events'),
        'menu_icon'           => 'dashicons-calendar',
      );
      register_post_type( 'event', $args );
    }
    
  // Hook into the 'init' action
  
    add_action( 'init', 'event_post_type', 0 );

    function team_post_type() {
      $labels = array(
        'name'                => _x( 'Team Members', 'Post Type General Name', 'frbt' ),
        'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'frbt' ),
        'menu_name'           => __( 'Team Members', 'frbt' ),
        'parent_item_colon'   => __( 'Parent Team Members:', 'frbt' ),
        'all_items'           => __( 'All Team Members', 'frbt' ),
        'view_item'           => __( 'View Team Members', 'frbt' ),
        'add_new_item'        => __( 'Add New Team Members', 'frbt' ),
        'add_new'             => __( 'Add Team Members', 'frbt' ),
        'edit_item'           => __( 'Edit Team Members', 'frbt' ),
        'update_item'         => __( 'Update Team Members', 'frbt' ),
        'search_items'        => __( 'Search Team Members', 'frbt' ),
        'not_found'           => __( 'Not found', 'frbt' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'frbt' ),
      );
      $args = array(
        'label'               => __( 'team members', 'frbt' ),
        'description'         => __( 'Post Type Description', 'frbt' ),
        'labels'              => $labels,
        'supports'            => array( 'title'),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 10,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'rewrite'             => array('slug' => 'team'),
        'menu_icon'           => 'dashicons-admin-users',
      );
      register_post_type( 'team', $args );
    }
  // Hook into the 'init' action
  
    add_action( 'init', 'team_post_type', 0 );

    

// Add Sidebars

  function my_sidebar() {

    register_sidebar( array(
      'name' => __( 'Sidebar', 'radiance' ),
      'id' => 'top',
      'description' => __( '' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
  }

  add_action('widgets_init', 'my_sidebar' );

  function page_sidebar() {

    register_sidebar( array(
      'name' => __( 'Page Sidebar', 'radiance' ),
      'id' => 'page-sidebar',
      'description' => __( '' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    ) );
  }

  add_action('widgets_init', 'page_sidebar' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_pagination.php');



// add some custom classes
  add_filter( 'body_class', 'page_class' );
  function page_class( $classes ) {
      if ( is_page( ) ) {
          $classes[] = 'reg-page';
      }
      return $classes;
  }
  add_filter( 'body_class', 'front_page_class' );
  function front_page_class( $classes ) {
      if ( is_front_page() ) {
          $classes[] = 'front-page';
      }
      return $classes;
  }

?>