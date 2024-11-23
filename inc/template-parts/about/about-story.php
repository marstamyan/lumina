<?php

$ab_str_section_title = carbon_get_post_meta( 8, 'lm_ab_story_title' );
$ab_str_section_description = carbon_get_post_meta( 8, 'lm_ab_story_description' );
$ab_str_button_text = carbon_get_post_meta( 8, 'lm_ab_story_button_text' );
$ab_str_button_link = carbon_get_post_meta( 8, 'lm_ab_story_button_link' );
$ab_str_image = carbon_get_post_meta( 8, 'lm_ab_story_image' );
?>

<section class="story section-dark">
	<div class="container">
		<div class="section-block">
			<div class="section-left">
				<h2 class="section-title white-color"><?php echo esc_html( $ab_str_section_title ); ?></h2>
				<p class="section-description silver-color">
					<?php echo esc_html( $ab_str_section_description ); ?>
				</p>
				<a href="<?php echo esc_url( $ab_str_button_link ); ?>"
					class="btn"><?php echo esc_html( $ab_str_button_text ); ?></a>
			</div>
			<div class="section-right">
				<div class="img-wrapper">
					<img src="<?php echo esc_url( $ab_str_image ); ?>" alt="story" class="bordered-img">
				</div>
			</div>
		</div>
	</div>
</section>