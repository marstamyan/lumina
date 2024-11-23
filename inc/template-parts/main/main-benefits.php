<?php

$benefits_section_title = carbon_get_post_meta( 6, 'benefits_section_title' );
$benefits_section_description = carbon_get_post_meta( 6, 'benefits_section_description' );
$benefits_section_image = wp_get_attachment_image_url( carbon_get_post_meta( 6, 'benefits_section_image' ), 'full' );
$benefits_info_blocks = carbon_get_post_meta( 6, 'benefits_info_blocks' );
?>

<section class="benefits section-dark">
	<div class="container">
		<div class="section-block">
			<div class="section-left">
				<h2 class="section-title white-color">
					<?php echo esc_html( $benefits_section_title ); ?>
				</h2>
				<p class="section-description silver-color">
					<?php echo esc_html( $benefits_section_description ); ?>
				</p>

				<?php if ( $benefits_info_blocks ) : ?>
					<?php foreach ( $benefits_info_blocks as $info_block ) : ?>
						<div class="info-block">
							<div class="info-block__icon">
								<?php if ( ! empty( $info_block['icon'] ) ) : ?>
									<img src="<?php echo esc_url( wp_get_attachment_image_url( $info_block['icon'], 'thumbnail' ) ); ?>"
										alt="">
								<?php endif; ?>
							</div>
							<div class="info-meta">
								<h3 class="info-meta__title">
									<?php echo esc_html( $info_block['title'] ); ?>
								</h3>
								<div class="info-meta__text">
									<?php echo esc_html( $info_block['description'] ); ?>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="section-right">
				<div class="img-wrapper">
					<?php if ( $benefits_section_image ) : ?>
						<img src="<?php echo esc_url( $benefits_section_image ); ?>" alt="story" class="bordered-img">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>