<?php
// include template parts
include get_template_directory(  ) . '/inc/enqueue.php';
include get_template_directory(  ) . '/inc/setup.php';
include get_template_directory(  ) . '/inc/acf.php';
include get_template_directory(  ) . '/inc/misc.php';


// Hooks
add_action( 'wp_enqueue_scripts', 'af_styles' );
add_action( 'after_setup_theme', 'af_setup' ) ;