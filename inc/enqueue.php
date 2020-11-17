<?php

function af_styles(){
  // styles
  wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', [], '4.7.0' );
  wp_register_style('menu-style', get_template_directory_uri(  ) . '/css/menu-style.css' , [] , '1.0');
  wp_register_style('light-gallery', get_template_directory_uri(  ) . '/css/lightgallery.min.css');
  wp_register_style('swiper-css', get_template_directory_uri(  ) . '/css/swiper.min.css', [], '4.5.4');
  wp_register_style('af_Main_StyleSheet', get_stylesheet_uri() , [] , false);

  wp_enqueue_style( 'font-awesome' );
  wp_enqueue_style( 'menu-style' );
  wp_enqueue_style( 'light-gallery' );
  wp_enqueue_style('swiper-css' );
  wp_enqueue_style('af_Main_StyleSheet');

  // Scripts
  wp_register_script( 'swiper-js', get_template_directory_uri() . '/js/swiper.min.js', [] , '5.4.5', true);
  wp_register_script('light-gallery-js', get_template_directory_uri().'/js/lightgallery-all.min.js',[],'1.10.0',true);
  wp_register_script('fullscreen-js', get_template_directory_uri().'/js/lg-fullscreen.min.js',[],'1.2.1',true);
  $google_maps_api = get_field('google_maps_api', 'option');
  wp_register_script( 'googleMapApi',
  '//maps.googleapis.com/maps/api/js?key=' . $google_maps_api);
  wp_register_script( 'app', get_template_directory_uri(). '/js/app.js', [], false, true);
  
  
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'swiper-js' );
  wp_enqueue_script('light-gallery-js');
  wp_enqueue_script( 'fullscreen-js');
  wp_enqueue_script( 'googleMapApi' );
  wp_enqueue_script( 'app' );
}