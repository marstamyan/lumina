<?php
function register_testimonial_post_type() {
	$labels = array(
		'name' => __( 'Testimonials', THEME_NAME ),
		'singular_name' => __( 'Testimonial', THEME_NAME ),
		'add_new' => __( 'Add New Testimonial', THEME_NAME ),
		'add_new_item' => __( 'Add New Testimonial', THEME_NAME ),
		'edit_item' => __( 'Edit Testimonial', THEME_NAME ),
		'new_item' => __( 'New Testimonial', THEME_NAME ),
		'view_item' => __( 'View Testimonial', THEME_NAME ),
		'search_items' => __( 'Search Testimonials', THEME_NAME ),
		'not_found' => __( 'No testimonials found', THEME_NAME ),
		'not_found_in_trash' => __( 'No testimonials found in Trash', THEME_NAME ),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'rewrite' => array( 'slug' => 'testimonials' ),
		'supports' => array( 'title', 'thumbnail' ),
		'menu_icon' => 'dashicons-testimonial',
	);

	register_post_type( 'testimonial', $args );
}

add_action( 'init', 'register_testimonial_post_type' );
