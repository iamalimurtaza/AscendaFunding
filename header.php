<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
<header class="site-header">
      <div class="d-flex just-end">
          <div class="header-buttons">
          <a href="<?php echo site_url('/contact-us');?>" class="contact-btn">CONTACT US</a>
          <a href="<?php echo site_url('/request-a-quote'); ?>" class="quote-btn">Request a Quote</a>
          </div>
      </div>
          <div class="main-header d-flex align-center">
              <div class="col-35 d-flex item-center">
                 <div class="logo-wrapper">
                   <?php
                     $site_logo = get_field('site_logo' , 'option')['url'];
                   ?>
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img class="logo" src="<?php echo $site_logo?>" alt=""></a>
                  </div>
              </div>
              <div class="col-65 d-flex just-end item-center">
                  <div class="menu-wrapper">
                     <button class="menu-trigger"><i class='fa fa-bars'></i></button>
                        <nav class="primary-menu-wrapper transition">
                          <?php 
                          wp_nav_menu( [
                            'theme_location'  =>  'primary-menu',
                            'container'       =>  false,
                            'menu_class'      =>  'primary-menu-list d-flex',
                            'fallbac_cb'      =>  false
                          ] )
                          ?>
                          <button class=menu-closer>
                            <i class="fa fa-close"></i>
                          </button>
                        </nav>
                  </div>
              </div>
            </div>
</header>
