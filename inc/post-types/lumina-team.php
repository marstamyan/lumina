<?php
function lm_register_team_post_type() {
	$labels = array(
		'name' => __( 'Team', THEME_NAME ),
		'singular_name' => __( 'Team Member', THEME_NAME ),
		'add_new' => __( 'Add New Member', THEME_NAME ),
		'add_new_item' => __( 'Add New Team Member', THEME_NAME ),
		'edit_item' => __( 'Edit Team Member', THEME_NAME ),
		'new_item' => __( 'New Team Member', THEME_NAME ),
		'all_items' => __( 'All Team Members', THEME_NAME ),
		'view_item' => __( 'View Team Member', THEME_NAME ),
		'search_items' => __( 'Search Team Members', THEME_NAME ),
		'not_found' => __( 'No team members found', THEME_NAME ),
		'not_found_in_trash' => __( 'No team members found in Trash', THEME_NAME ),
		'menu_name' => __( 'Team', THEME_NAME ),
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-groups',
		'supports' => array( 'title', 'thumbnail' ),
		'rewrite' => array( 'slug' => 'team' ),
	);

	register_post_type( 'lm_team', $args );
}

add_action( 'init', 'lm_register_team_post_type' );
