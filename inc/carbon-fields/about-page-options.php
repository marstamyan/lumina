<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'lm_attach_about_section_fields' );
function lm_attach_about_section_fields() {
	Container::make( 'post_meta', __( 'About Section', THEME_NAME ) )
		->where( 'post_template', '=', 'page-about.php' )
		->add_fields( array(
			Field::make( 'text', 'lm_ab_intro_title', __( 'Section Title', THEME_NAME ) )
				->set_default_value( 'Clients Success is Our Focus' ),
			Field::make( 'textarea', 'lm_ab_intro_description', __( 'Section Description', THEME_NAME ) )
				->set_default_value( 'Committed to your success, our consulting firm delivers tailored strategies and expert guidance, ensuring business excellence through precise solutions and strategic expertise for sustainable growth.' ),
			Field::make( 'text', 'lm_ab_intro_button_text', __( 'Button Text', THEME_NAME ) )
				->set_default_value( 'Collaborate with Us' ),
			Field::make( 'text', 'lm_ab_intro_button_link', __( 'Button Link URL', THEME_NAME ) )
				->set_default_value( '#' ),
			Field::make( 'image', 'lm_ab_intro_image', __( 'Intro Image', THEME_NAME ) )
				->set_value_type( 'url' )
				->set_default_value( 'https://placehold.co/600x400' ),
			Field::make( 'text', 'lm_ab_our_story', __( 'Our story text', THEME_NAME ) )
				->set_default_value( 'Bringing Innovation to Life Through Every Step.' ),
			// Statistic Fields
			Field::make( 'text', 'lm_ab_stat_years', __( 'Years In Practice', THEME_NAME ) )
				->set_default_value( '15+' ),
			Field::make( 'text', 'lm_ab_stat_cases', __( 'Successful Cases', THEME_NAME ) )
				->set_default_value( '900+' ),
			Field::make( 'text', 'lm_ab_stat_experts', __( 'Legal Experts', THEME_NAME ) )
				->set_default_value( '50+' ),
			Field::make( 'text', 'lm_ab_stat_satisfaction', __( 'Client Satisfaction Rate', THEME_NAME ) )
				->set_default_value( '98%' ),
			Field::make( 'separator', 'lm_ab_srv_separator', __( 'About Services', THEME_NAME ) ),
			Field::make( 'text', 'lm_ab_services_section_title', __( 'Section Title', THEME_NAME ) )
				->set_default_value( 'What We Can Offer You' ),
			Field::make( 'textarea', 'lm_ab_services_section_description', __( 'Section Description', THEME_NAME ) )
				->set_default_value( 'Optimize your journey with our consulting services, delivering personalized solutions for success.' ),
			// Services list
			Field::make( 'complex', 'lm_ab_services', __( 'Services List', THEME_NAME ) )
				->add_fields( array(
					Field::make( 'image', 'lm_ab_service_image', __( 'Service Image', THEME_NAME ) )
						->set_value_type( 'url' ),
					Field::make( 'text', 'lm_ab_service_title', __( 'Service Title', THEME_NAME ) ),
					Field::make( 'textarea', 'lm_ab_service_description', __( 'Service Description', THEME_NAME ) ),
				) ),
			Field::make( 'separator', 'lm_ab_str_separator', __( 'Story', THEME_NAME ) ),
			Field::make( 'text', 'lm_ab_story_title', __( 'Story Section Title', THEME_NAME ) )
				->set_default_value( 'Know Our Story' ),
			Field::make( 'textarea', 'lm_ab_story_description', __( 'Story Section Description', THEME_NAME ) )
				->set_default_value( 'Founded in 2019, Lumina is a leading web consulting firm.' ),
			Field::make( 'text', 'lm_ab_story_button_text', __( 'Story Section Button Text', THEME_NAME ) )
				->set_default_value( 'Learn More' ),
			Field::make( 'text', 'lm_ab_story_button_link', __( 'Story Section Button Link', THEME_NAME ) )
				->set_default_value( '#' ),
			Field::make( 'image', 'lm_ab_story_image', __( 'Story Section Image', THEME_NAME ) )
				->set_value_type( 'url' )
				->set_default_value( 'https://placehold.co/600x400' ),
		) );
}
