<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'lm_attach_theme_options' );

function lm_attach_theme_options() {
	Container::make( 'theme_options', 'theme_options', __( 'General Options', THEME_NAME ) )
		->add_fields( array(
			// logo
			Field::make( 'separator', 'lm_logo_separator', __( 'Site logo' ) ),
			Field::make( 'image', 'lm_logo', __( 'Chose logo', THEME_NAME ) )
				->set_value_type( 'url' ),

			// social links
			Field::make( 'separator', 'lm_socials_separator', __( 'Social Links', THEME_NAME ) ),
			Field::make( 'text', 'lm_facebook', __( 'Facebook URL', THEME_NAME ) )
				->set_attribute( 'placeholder', 'https://facebook.com/yourpage' ),
			Field::make( 'text', 'lm_x', __( 'X (Twitter) URL', THEME_NAME ) )
				->set_attribute( 'placeholder', 'https://x.com/yourpage' ),
			Field::make( 'text', 'lm_instagram', __( 'Instagram URL', THEME_NAME ) )
				->set_attribute( 'placeholder', 'https://instagram.com/yourpage' ),
			Field::make( 'text', 'lm_linkedin', __( 'LinkedIn URL', THEME_NAME ) )
				->set_attribute( 'placeholder', 'https://linkedin.com/yourpage' ),
			Field::make( 'text', 'lm_pinterest', __( 'Pinterest URL', THEME_NAME ) )
				->set_attribute( 'placeholder', 'https://pinterest.com/yourpage' ),
		) );

}
