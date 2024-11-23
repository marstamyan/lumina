<?php

/**
 * start_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lumina
 */

// carbon fields
require_once get_template_directory() . '/inc/enqueue-scripts.php';
require_once get_template_directory() . '/inc/carbon-fields/carbon-general.php';
require_once get_template_directory() . '/inc/carbon-fields/front-page-options.php';
require_once get_template_directory() . '/inc/carbon-fields/about-page-options.php';
require_once get_template_directory() . '/inc/carbon-fields/services-page-options.php';
require_once get_template_directory() . '/inc/carbon-fields/contact-page-options.php';
require_once get_template_directory() . '/inc/carbon-fields/testimonials-post-meta.php';
require_once get_template_directory() . '/inc/carbon-fields/team-post-meta.php';
require_once get_template_directory() . '/inc/carbon-fields/about-page-team.php';
require_once get_template_directory() . '/inc/pagination.php';
require_once get_template_directory() . '/inc/breadcrumbs.php';
require_once get_template_directory() . '/inc/ajax-form.php';


// post types
require_once get_template_directory() . '/inc/post-types/lumina-team.php';
require_once get_template_directory() . '/inc/post-types/lumina-testimonials.php';



if ( ! defined( 'THEME_NAME' ) ) {
	$theme_name = wp_get_theme()->get( 'Name' );
	define( 'THEME_NAME', $theme_name );
}

if ( ! defined( 'THEME_VERSION' ) ) {
	$theme_version = wp_get_theme()->get( 'Version' );
	define( 'THEME_VERSION', $theme_version );
}

function start_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on start_theme, use a find and replace
	 * to change 'start_theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( THEME_NAME, get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header_menu' => esc_html__( 'Header menu', THEME_NAME ),
			'footer_menu' => esc_html__( 'Footer menu', THEME_NAME ),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'start_themecustom_background_args',
			array(
				'default-color' => 'ebebeb',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
			'unlink-homepage-logo' => false,
		)
	);
}
add_action( 'after_setup_theme', 'start_theme_setup' );


// Allow SVG upload for administrators only
function allow_svg_upload_for_admin( $mimes ) {
	if ( current_user_can( 'administrator' ) ) {
		$mimes['svg'] = 'image/svg+xml';
	}
	return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload_for_admin' );

// Force recognition of SVG MIME type
function fix_mime_type_svg( $data, $file, $filename, $mimes ) {
	$ext = pathinfo( $filename, PATHINFO_EXTENSION );
	if ( $ext === 'svg' ) {
		$data['ext'] = 'svg';
		$data['type'] = 'image/svg+xml';
	}
	return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_mime_type_svg', 10, 4 );

// SVG sanitize function to remove potentially dangerous tags
function sanitize_svg( $file ) {
	$filetype = wp_check_filetype( $file['name'] );

	if ( $filetype['ext'] === 'svg' ) {
		$svg_content = file_get_contents( $file['tmp_name'] );

		// Simple cleaning to remove potentially harmful tags
		$svg_content = preg_replace( '/<script\b[^>]*>(.*?)<\/script>/is', '', $svg_content );
		$svg_content = preg_replace( '/<iframe\b[^>]*>(.*?)<\/iframe>/is', '', $svg_content );

		file_put_contents( $file['tmp_name'], $svg_content );
	}

	return $file;
}
add_filter( 'wp_handle_upload_prefilter', 'sanitize_svg' );

// sidebar 
function theme_register_sidebar() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', THEME_NAME ),
		'id' => 'main-sidebar',
		'description' => __( 'Widgets in this area will be shown in the sidebar.', THEME_NAME ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init', 'theme_register_sidebar' );

// Load Contact Form 7 styles and scripts only on specific pages
function disable_cf7_assets_except_some_pages() {
    $allowed_pages = ['contact'];
    
    if (!is_page($allowed_pages)) {
        wp_dequeue_style('contact-form-7');
        wp_deregister_style('contact-form-7');
        wp_dequeue_script('contact-form-7');
        wp_deregister_script('contact-form-7');
    }
}

add_action('wp_enqueue_scripts', 'disable_cf7_assets_except_some_pages', 99);