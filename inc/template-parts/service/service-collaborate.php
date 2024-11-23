<?php

$lm_collab_section_title = carbon_get_post_meta( 33, 'lm_collab_section_title' );
$lm_collab_section_description = carbon_get_post_meta( 33, 'lm_collab_section_description' );
$lm_collab_section_button_text = carbon_get_post_meta( 33, 'lm_collab_section_button_text' );
$lm_collab_section_button_url = carbon_get_post_meta( 33, 'lm_collab_section_button_url' );
$lm_collab_section_image_id = carbon_get_post_meta( 33, 'lm_collab_section_image' );
$lm_collab_section_image_url = wp_get_attachment_url( $lm_collab_section_image_id );
$lm_collab_section_image_alt = get_post_meta( $lm_collab_section_image_id, '_wp_attachment_image_alt', true );
?>

<section class="collaborate section-dark">
	<div class="container">
		<div class="section-block">
			<div class="section-left">
				<h2 class="section-title white-color"><?php echo esc_html( $lm_collab_section_title ); ?></h2>
				<p class="section-description silver-color">
					<?php echo esc_html( $lm_collab_section_description ); ?>
				</p>
				<?php if ( $lm_collab_section_button_text && $lm_collab_section_button_url ) : ?>
					<a href="<?php echo esc_url( $lm_collab_section_button_url ); ?>" class="btn">
						<?php echo esc_html( $lm_collab_section_button_text ); ?>
					</a>
				<?php endif; ?>
			</div>
			<div class="section-right">
				<div class="img-wrapper">
					<?php if ( $lm_collab_section_image_url ) : ?>
						<img src="<?php echo esc_url( $lm_collab_section_image_url ); ?>"
							alt="<?php echo esc_attr( $lm_collab_section_image_alt ); ?>" class="bordered-img">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>