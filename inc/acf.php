<?php

if( function_exists('acf_add_options_page') ) {

  // Register options page.
  $option_page = acf_add_options_page(array(
      'page_title'    => 'Ascenda Funding Options',
      'menu_title'    => 'Ascenda Funding',
      'menu_slug'     => 'ascend-funding',
      'capability'    => 'edit_posts',
      'redirect'      => false,
      'icon_url'      => 'dashicons-thumbs-up'
  ));
}