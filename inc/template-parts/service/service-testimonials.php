<?php

$section_title = carbon_get_post_meta( 33, 'testimonial_section_title' );
$section_description = carbon_get_post_meta( 33, 'testimonial_section_description' );
$testimonials = carbon_get_post_meta( 33, 'testimonial_section_posts' );

?>

<section class="testimonials custom-section dotes-decoration">
	<div class="container">
		<?php if ( $section_title ) : ?>
			<h2 class="section-title dark-color"><?php echo esc_html( $section_title ); ?></h2>
		<?php endif; ?>

		<?php if ( $section_description ) : ?>
			<p class="section-description"><?php echo esc_html( $section_description ); ?></p>
		<?php endif; ?>

		<?php if ( $testimonials ) : ?>
			<div class="swiper swiper-container testimonials-slider">
				<div class="swiper-wrapper">
					<?php foreach ( $testimonials as $testimonial ) :
						$testimonial_text = carbon_get_post_meta( $testimonial['id'], 'testimonial_text' );
						$testimonial_avatar_id = carbon_get_post_meta( $testimonial['id'], 'testimonial_avatar' );
						$testimonial_name = carbon_get_post_meta( $testimonial['id'], 'testimonial_name' );
						$testimonial_profession = carbon_get_post_meta( $testimonial['id'], 'testimonial_profession' );
						$testimonial_rating = carbon_get_post_meta( $testimonial['id'], 'testimonial_rating' );
						$rating_stars = str_repeat( '★', intval( $testimonial_rating ) ) . str_repeat( '☆', 5 - intval( $testimonial_rating ) );
						$testimonial_avatar_url = wp_get_attachment_image_url( $testimonial_avatar_id, 'thumbnail' );
						?>
						<div class="swiper-slide">
							<div class="testimonial-card">
								<p class="testimonial-text"><?php echo esc_html( $testimonial_text ); ?></p>

								<div class="testimonial-footer">
									<?php if ( $testimonial_avatar_url ) : ?>
										<img src="<?php echo esc_url( $testimonial_avatar_url ); ?>"
											alt="<?php echo esc_attr( $testimonial_name ); ?>" class="testimonial-avatar">
									<?php endif; ?>
									<div class="testimonial-info">
										<h3><?php echo esc_html( $testimonial_name ); ?></h3>
										<p><?php echo esc_html( $testimonial_profession ); ?></p>
									</div>
									<div class="testimonial-rating"><?php echo esc_html( $rating_stars ); ?></div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="testimonials-navigation">
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>