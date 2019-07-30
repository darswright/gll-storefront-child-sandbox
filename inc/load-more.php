<?php

// Load More Posts Enqueue Scripts
function gll_load_more_scripts() {
 
	global $wp_query; 
 
	// register our main script but do not enqueue it yet
	wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery') );
 
	wp_localize_script( 'my_loadmore', 'gll_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ),
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'gll_load_more_scripts' );


// Load More Posts AJAX Handler
function gll_loadmore_ajax_handler() {
 
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1;
	$args['post_status'] = 'publish';
 
	query_posts( $args );
 
	if( have_posts() ) :
 
		while( have_posts() ) : the_post();
 
			get_template_part( 'content' );
			// for the test purposes comment the line above and uncomment the below one
			// the_title();
 
		endwhile;
 
	endif;
	die;
}

add_action('wp_ajax_loadmore', 'gll_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'gll_loadmore_ajax_handler');