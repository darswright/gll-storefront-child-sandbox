<?php

function gll_scripts() {
  wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/styles/main.css', array(), '1.0', false);
  wp_enqueue_script('main_js', get_stylesheet_directory_uri() . '/assets/scripts/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'gll_scripts');