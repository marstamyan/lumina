<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'lm_attach_services_section_fields' );
function lm_attach_services_section_fields() {
	Container::make( 'post_meta', __( 'Services Section', THEME_NAME ) )
		->where( 'post_template', '=', 'page-services.php' )
		->add_fields( array(
			Field::make( 'text', 'lm_srv_intro_title', __( 'Section Title', THEME_NAME ) )
				->set_default_value( 'Our Expertise at Your Service' ),
			Field::make( 'textarea', 'lm_srv_intro_description', __( 'Section Description', THEME_NAME ) )
				->set_default_value( 'We provide comprehensive consulting services designed to help you achieve success through innovative strategies and expert guidance.' ),
			Field::make( 'text', 'lm_srv_intro_button_text', __( 'Button Text', THEME_NAME ) )
				->set_default_value( 'Explore Our Services' ),
			Field::make( 'text', 'lm_srv_intro_button_link', __( 'Button Link URL', THEME_NAME ) )
				->set_default_value( '#' ),
			Field::make( 'image', 'lm_srv_intro_image', __( 'Intro Image', THEME_NAME ) )
				->set_value_type( 'id' )
				->set_default_value( 0 ),
			Field::make( 'text', 'lm_srv_our_approach', __( 'Our Approach Text', THEME_NAME ) )
				->set_default_value( 'Delivering tailored solutions with a focus on quality and client satisfaction.' ),
			Field::make( 'text', 'lm_srv_stat_projects', __( 'Projects Completed', THEME_NAME ) )
				->set_default_value( '1200+' ),
			Field::make( 'text', 'lm_srv_stat_clients', __( 'Happy Clients', THEME_NAME ) )
				->set_default_value( '800+' ),
			Field::make( 'text', 'lm_srv_stat_experts', __( 'Industry Experts', THEME_NAME ) )
				->set_default_value( '70+' ),
			Field::make( 'text', 'lm_srv_stat_satisfaction', __( 'Client Satisfaction Rate', THEME_NAME ) )
				->set_default_value( '99%' ),
			Field::make( 'separator', 'lm_srv_separator', __( 'Services Section', THEME_NAME ) ),
			Field::make( 'text', 'lm_srv_section_title', __( 'Section Title', THEME_NAME ) )
				->set_default_value( 'Our Work is For Your Success' ),
			Field::make( 'textarea', 'lm_srv_section_description', __( 'Section Description', THEME_NAME ) )
				->set_default_value( 'Tailored systematic solutions for your goals, ensuring comprehensive support and an effective path to success and objectives.' ),
			Field::make( 'complex', 'lm_srv_items', __( 'Service Items', THEME_NAME ) )
				->set_layout( 'tabbed-horizontal' )
				->add_fields( array(
					Field::make( 'image', 'image', __( 'Service Icon', THEME_NAME ) )
						->set_value_type( 'id' )
						->set_default_value( '0' ),
					Field::make( 'text', 'title', __( 'Service Title', THEME_NAME ) )
						->set_default_value( 'Analysis & Research' ),
					Field::make( 'textarea', 'description', __( 'Service Description', THEME_NAME ) )
						->set_default_value( 'The consulting firm conducts detailed analysis and research, employing strategic methodologies to deliver client-focused insights and effective solutions.' ),
				) ),
			Field::make( 'separator', 'lm_srv_clb_separator', __( 'Collaborate Section', THEME_NAME ) ),
			Field::make( 'text', 'lm_collab_section_title', __( 'Section Title', THEME_NAME ) )
				->set_default_value( "Let's Collaborate for Mutual Success" ),
			Field::make( 'textarea', 'lm_collab_section_description', __( 'Section Description', THEME_NAME ) )
				->set_default_value( 'Your success story begins with a click, explore our consulting solutions for transformative results.' ),
			Field::make( 'text', 'lm_collab_section_button_text', __( 'Button Text', THEME_NAME ) )
				->set_default_value( 'Collaborate with Us' ),
			Field::make( 'text', 'lm_collab_section_button_url', __( 'Button URL', THEME_NAME ) ),
			Field::make( 'image', 'lm_collab_section_image', __( 'Section Image', THEME_NAME ) )
				->set_value_type( 'id' )
				->set_default_value( 'https://placehold.co/600x400' ),
			Field::make( 'separator', 'lm_srv_tstm_separator', __( 'Testimonials Section', THEME_NAME ) ),
			Field::make( 'text', 'testimonial_section_title', __( 'Section Title' ) )
				->set_help_text( __( 'Enter the title for the testimonials section.' ) ),
			Field::make( 'textarea', 'testimonial_section_description', __( 'Section Description' ) )
				->set_help_text( __( 'Enter the description for the testimonials section.' ) ),
			Field::make( 'association', 'testimonial_section_posts', __( 'Select Testimonials' ) )
				->set_types( array(
					array(
						'type' => 'post',
						'post_type' => 'testimonial',
					),
				) )
				->set_help_text( __( 'Select testimonials to display in this section.' ) ),

		) );
}
