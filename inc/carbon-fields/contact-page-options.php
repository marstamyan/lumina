<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_add_contact_page_fields' );

function crb_add_contact_page_fields() {
	Container::make( 'post_meta', __( 'Contact Page Settings', THEME_NAME ) )
		->where( 'post_template', '=', 'page-contact.php' )
		->add_fields( array(
			Field::make( 'text', 'contact_intro_title', __( 'Section Title', THEME_NAME ) )
				->set_help_text( 'Main title for the Contact section' ),
			Field::make( 'complex', 'contact_info_blocks', __( 'Info Blocks', THEME_NAME ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'image', 'icon', __( 'Icon', THEME_NAME ) )
						->set_value_type( 'url' )
						->set_help_text( 'Icon for this info block' ),
					Field::make( 'text', 'title', __( 'Info Block Title', THEME_NAME ) )
						->set_help_text( 'Title of the info block' ),
					Field::make( 'textarea', 'text', __( 'Info Block Text', THEME_NAME ) )
						->set_help_text( 'Description text for the info block' ),
				) )
				->set_help_text( 'Add info blocks with icon, title, and description.' )
				->set_min( 2 )
				->set_max( 2 ),
			Field::make( 'image', 'contact_intro_image', __( 'Intro Image', THEME_NAME ) )
				->set_value_type( 'url' )
				->set_help_text( 'Image on the right side of the Contact section' ),
			Field::make( 'text', 'contact_map_url', 'Google Maps URL' )
				->set_help_text( 'Enter the Google Maps URL to embed the map on the Contact page.' ),
		) );
}
