<?php

/**
 * Removes sticky footer nav bar on mobile
 */
function gll_remove_storefront_handheld_footer_bar() {
  remove_action( 'storefront_footer', 'storefront_handheld_footer_bar', 999 );
}

add_action( 'init', 'gll_remove_storefront_handheld_footer_bar' );