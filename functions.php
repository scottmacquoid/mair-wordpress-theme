<?php

function add_theme_scripts() {  
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/css/themify-icons.css', array(), '1.1', 'all');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.1', 'all');
    wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.min.css', array(), '1.1', 'all');
 
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.1.3.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'Magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'parsley', get_template_directory_uri() . '/js/parsley.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.min.js', array ( 'jquery' ), 1.1, true);
   
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
  }
  add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

  /**
* Customizer additions.
*/
require get_template_directory(). '/includes/customizer.php';

// Google Fonts

function add_google_fonts() {
  wp_enqueue_style( ' add_google_fonts ', 'https://fonts.googleapis.com/css?family=Crete+Round:400i%7COpen+Sans:400,600,700', false );}
  add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

  // Registering Menu

  function wpb_theme_setup(){
    add_theme_support('post-thumbnails');
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu')
    ));
    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
  }
  add_action('after_setup_theme','wpb_theme_setup');
  require_once('wp_bootstrap_navwalker.php');
