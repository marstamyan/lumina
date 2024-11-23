<?php

function lumina_theme_scripts() {
	wp_enqueue_style( 'lumina-theme-normalize-style', get_template_directory_uri() . '/assets/css/normalize.css', array(), THEME_VERSION );
	wp_enqueue_style( 'lumina-theme-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), THEME_VERSION );
	wp_enqueue_style( 'lumina-theme-media-style', get_template_directory_uri() . '/assets/css/media.css', array(), THEME_VERSION );
	wp_enqueue_style( 'lumina-swiper-bundle-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), THEME_VERSION );


	wp_enqueue_script( 'lumina-theme-swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'lumina-theme-script', get_template_directory_uri() . '/assets/js/script.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'lumina-ajax-script', get_template_directory_uri() . '/assets/js/ajax-form.js', array(), THEME_VERSION, true );


	if ( ! is_admin() ) {
		wp_deregister_script( 'jquery' );
	}

	// Ajax form
	wp_localize_script(
		'lumina-ajax-script',
		'my_ajax_object',
		array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ),
			'nonce' => wp_create_nonce( 'submit_form_nonce' ),
			'success_message' => __( 'Form submitted successfully!', THEME_NAME ),
			'error_message' => __( 'Something went wrong', THEME_NAME ),
		)
	);

}

add_action( 'wp_enqueue_scripts', 'lumina_theme_scripts' );
