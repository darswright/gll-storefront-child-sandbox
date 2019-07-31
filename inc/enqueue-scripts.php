<?php

// Enqueue scripts for 3rd party JS libraries
function gll_vendor_scripts() {

  wp_enqueue_script( 'gll-masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array ( 'jquery' ), false, true);
  wp_enqueue_script( 'gll-jquery-inits', get_stylesheet_directory_uri() . '/assets/js/jquery-inits.js', array ( 'jquery' ), false, true);

}

add_action( 'wp_enqueue_scripts', 'gll_vendor_scripts' );