<?php
function cptui_register_my_cpts_dress_gallery() {

	/**
	 * Post Type: Dress Galleries.
	 */

	$labels = array(
		"name" => __( "Dress Galleries", "custom-post-type-ui" ),
		"singular_name" => __( "Dress Gallery", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Dress Galleries", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "dress-galleries",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "dress-galleries", "with_front" => true ),
		"query_var" => "dress-galleries",
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "dress_gallery", $args );
}

add_action( 'init', 'cptui_register_my_cpts_dress_gallery' );
