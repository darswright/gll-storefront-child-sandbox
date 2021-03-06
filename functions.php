<?php

// Theme Modifications
require_once( __DIR__ . '/inc/theme-mods.php');

// Action/Filter Hook Modifications
require_once( __DIR__ . '/inc/action-mod_header.php');

// Add custom PHP include files
require_once( __DIR__ . '/inc/class-tgm-plugin-activation.php');
require_once( __DIR__ . '/inc/theme-check.php');

// require_once( __DIR__ . '/inc/custom-post-types.php');
// require_once( __DIR__ . '/inc/custom-fields.php');

require_once( __DIR__ . '/inc/enqueue-scripts.php');
// require_once( __DIR__ . '/inc/load-more.php'); // Removed as now using Smush plugin for lazy loading
require_once( __DIR__ . '/inc/post-filter.php');