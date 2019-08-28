<?php

/**
 * Removes unnecessary action from storefront_header action hook
 * Location: header.php
 */
function remove_unused_header_actions(){
  remove_action( 'storefront_header', 'storefront_social_icons', 10 );
  remove_action( 'storefront_header', 'storefront_site_branding', 20 );
  remove_action( 'storefront_header', 'storefront_secondary_navigation', 30 );
  remove_action( 'storefront_header', 'storefront_product_search', 40 );
  remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper', 42 );
  remove_action( 'storefront_header', 'storefront_primary_navigation', 50 );
  remove_action( 'storefront_header', 'storefront_header_cart', 60 );
  remove_action( 'storefront_header', 'storefront_primary_navigation_wrapper_close', 68 );
}

add_action( 'wp_head', 'remove_unused_header_actions' );

/**
 * Adds new actions to storefront_header action hook
 * Location: header.php
 */
function add_header_actions(){
  add_action( 'storefront_header', 'quadmenu_primary_nav', 50 );
}

add_action( 'wp_head', 'add_header_actions' );

/**
 * Activate QuadMenu in primary menu location
 */
function quadmenu_primary_nav() {
  quadmenu(array("theme_location" => "primary", "theme" => "default_theme"));
}