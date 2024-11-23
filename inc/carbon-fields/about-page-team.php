<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'about_team_section_fields' );
function about_team_section_fields() {
	Container::make( 'post_meta', __( 'Team Section Settings', THEME_NAME ) )
		->where( 'post_template', '=', 'page-about.php' )
		->add_fields( array(
			Field::make( 'text', 'lm_ab_team_title', __( 'Section Title', THEME_NAME ) )
				->set_default_value( 'Introduce the Key Players in Lumina' ),
			Field::make( 'textarea', 'lm_ab_team_description', __( 'Section Description', THEME_NAME ) )
				->set_default_value( 'Meet the driving forces behind Lumina, the key players whose dedication and expertise fuel our success and innovation every day.' ),
			Field::make( 'association', 'lm_ab_team_members', __( 'Select Team Members', THEME_NAME ) )
				->set_types( array(
					array(
						'type' => 'post',
						'post_type' => 'lm_team',
					)
				) )
		) );
}
