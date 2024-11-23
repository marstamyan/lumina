<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'lm_front_page_options' );

function lm_front_page_options() {
	Container::make( 'post_meta', __( 'Intro Section Settings', THEME_NAME ) )
		->where( 'post_id', '=', get_option( 'page_on_front' ) )
		->add_fields( [ 
			Field::make( 'text', 'front_intro_title', __( 'Intro Title', THEME_NAME ) )
				->set_default_value( 'Masterminds to Your Positive Goal' ),
			Field::make( 'textarea', 'front_intro_desc', __( 'Intro Description', THEME_NAME ) )
				->set_default_value( 'Experience a rise in your pursuits with our expert consulting. ...' ),
			Field::make( 'text', 'front_intro_btn1_text', __( 'Button 1 Text', THEME_NAME ) )
				->set_default_value( 'Collaborate with Us' ),
			Field::make( 'text', 'front_intro_btn1_link', __( 'Button 1 Link', THEME_NAME ) )
				->set_default_value( '#' ),
			Field::make( 'text', 'front_intro_btn2_text', __( 'Button 2 Text', THEME_NAME ) )
				->set_default_value( 'Learn More' ),
			Field::make( 'text', 'front_intro_btn2_link', __( 'Button 2 Link', THEME_NAME ) )
				->set_default_value( '#' ),
			Field::make( 'image', 'front_intro_img', __( 'Intro Image', THEME_NAME ) ),
			Field::make( 'text', 'front_stat_title', __( 'Statistic Title', THEME_NAME ) )
				->set_default_value( 'This is Our result' ),
			Field::make( 'textarea', 'front_stat_desc', __( 'Statistic Description', THEME_NAME ) )
				->set_default_value( 'How capable we are at work shines through in every endeavor.' ),
			Field::make( 'text', 'front_stat_clients', __( 'Client Projects', THEME_NAME ) )
				->set_default_value( '160' ),
			Field::make( 'text', 'front_stat_clients_label', __( 'Client Projects Label', THEME_NAME ) )
				->set_default_value( 'Client Project' ),
			Field::make( 'text', 'front_stat_success', __( 'Successful Projects', THEME_NAME ) )
				->set_default_value( '340' ),
			Field::make( 'text', 'front_stat_success_label', __( 'Successful Projects Label', THEME_NAME ) )
				->set_default_value( 'Successful Project' ),
			Field::make( 'text', 'front_stat_team', __( 'Team Members', THEME_NAME ) )
				->set_default_value( '300+' ),
			Field::make( 'text', 'front_stat_team_label', __( 'Team Members Label', THEME_NAME ) )
				->set_default_value( 'Team Members' ),
			Field::make( 'text', 'front_stat_revenue', __( 'Total Revenue', THEME_NAME ) )
				->set_default_value( '82M' ),
			Field::make( 'text', 'front_stat_revenue_label', __( 'Total Revenue Label', THEME_NAME ) )
				->set_default_value( 'Total Revenue' ),
			Field::make( 'separator', 'main_benefits_separator', __( 'Benefits Section', THEME_NAME ) ),
			Field::make( 'text', 'benefits_section_title', __( 'Section Title', THEME_NAME ) )
				->set_default_value( 'Benefits of Teaming Up with Us' ),
			Field::make( 'textarea', 'benefits_section_description', __( 'Section Description', THEME_NAME ) )
				->set_default_value( 'Embark on a transformative journey with us, where tailored solutions and dedicated support redefine collaborative success.' ),
			Field::make( 'image', 'benefits_section_image', __( 'Section Right Image', THEME_NAME ) ),
			Field::make( 'complex', 'benefits_info_blocks', __( 'Info Blocks', THEME_NAME ) )
				->add_fields( [ 
					Field::make( 'image', 'icon', __( 'Icon', THEME_NAME ) )
						->set_help_text( __( 'Upload an icon for this info block.', THEME_NAME ) ),
					Field::make( 'text', 'title', __( 'Info Block Title', THEME_NAME ) )
						->set_help_text( __( 'Title of the info block.', THEME_NAME ) ),
					Field::make( 'textarea', 'description', __( 'Info Block Description', THEME_NAME ) )
						->set_help_text( __( 'Description of the info block.', THEME_NAME ) ),
				] ),
			Field::make( 'separator', 'main_posts_separator', __( 'Posts Section', THEME_NAME ) ),
			Field::make( 'text', 'crb_main_section_title', __( 'Section Title', THEME_NAME ) )
				->set_default_value( 'Read Our Articles Collection' ),
			Field::make( 'textarea', 'crb_main_section_desc', __( 'Section Description', THEME_NAME ) )
				->set_default_value( 'Your success story begins with a click; explore our consulting solutions for transformative results.' ),
			Field::make( 'text', 'crb_main_btn_text', __( 'Button Text', THEME_NAME ) )
				->set_default_value( 'Search Other Articles' ),
			Field::make( 'association', 'crb_main_blog_posts', __( 'Select Posts', THEME_NAME ) )
				->set_types( array(
					array(
						'type' => 'post',
						'post_type' => 'post',
					)
				) )
				->set_min( 2 )
				->set_max( 2 ),

		] );
}
