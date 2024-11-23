<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function lm_team_member_fields() {
	Container::make( 'post_meta', __( 'Team Member Information', THEME_NAME ) )
		->where( 'post_type', '=', 'lm_team' )
		->add_fields( array(
			Field::make( 'text', 'lm_team_position', __( 'Position', THEME_NAME ) )
				->set_help_text( 'Specify the position of the team member, e.g., CEO & Founder.' ),

			Field::make( 'text', 'lm_team_facebook', __( 'Facebook URL', THEME_NAME ) )
				->set_help_text( 'Add the Facebook profile link.' ),

			Field::make( 'text', 'lm_team_linkedin', __( 'LinkedIn URL', THEME_NAME ) )
				->set_help_text( 'Add the LinkedIn profile link.' ),

			Field::make( 'text', 'lm_team_instagram', __( 'Instagram URL', THEME_NAME ) )
				->set_help_text( 'Add the Instagram profile link.' ),

			Field::make( 'text', 'lm_team_x', __( 'X (Twitter) URL', THEME_NAME ) )
				->set_help_text( 'Add the X (Twitter) profile link.' ),
		) );
}

add_action( 'carbon_fields_register_fields', 'lm_team_member_fields' );
