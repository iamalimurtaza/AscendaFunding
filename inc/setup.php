<?php

function af_setup(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'menus' );
    add_theme_support( 'feed' );
    add_image_size( 'hero', 1280, 845, true );
    add_image_size( 'hero-small', 1280, 400, true );
    add_image_size( 'gallery_image', 317, 240, true);
    add_image_size( 'loan-products', 250, 320, true);
    add_image_size( 'transaction-img', 360, 250, true);

    register_nav_menus([
        'primary-menu'       =>  __('Primary Menu', 'ascend_funding'),
    ]);
    register_nav_menus([
        'socails-menu'       =>  __('Socials Menu', 'ascend_funding'),
    ]);
    register_nav_menus([
        'footer-column-one'       =>  __('Footer Column One', 'ascend_funding'),
    ]);
    register_nav_menus([
        'footer-column-two'       =>  __('Footer Column Two', 'ascend_funding'),
    ]);
}