<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

function lm_testimonial_fields() {
	Container::make( 'post_meta', __( 'Testimonial Details', THEME_NAME ) )
		->where( 'post_type', '=', 'testimonial' )
		->add_fields( array(
			Field::make( 'textarea', 'testimonial_text', __( 'Testimonial Text', THEME_NAME ) ),
			Field::make( 'image', 'testimonial_avatar', __( 'Avatar', THEME_NAME ) )
				->set_value_type( 'id' ),
			Field::make( 'text', 'testimonial_name', __( 'Author Name', THEME_NAME ) ),
			Field::make( 'text', 'testimonial_profession', __( 'Author Profession', THEME_NAME ) ),
			Field::make( 'select', 'testimonial_rating', __( 'Rating', THEME_NAME ) )
				->set_options( array(
					'5' => '★★★★★',
					'4' => '★★★★☆',
					'3' => '★★★☆☆',
					'2' => '★★☆☆☆',
					'1' => '★☆☆☆☆',
				) ),
		) );

}

add_action( 'carbon_fields_register_fields', 'lm_testimonial_fields' );
