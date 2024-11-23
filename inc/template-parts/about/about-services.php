<?php

$ab_srv_section_title = carbon_get_post_meta( 8, 'lm_ab_services_section_title' );
$ab_srv_section_description = carbon_get_post_meta( 8, 'lm_ab_services_section_description' );
$ab_srv_services = carbon_get_post_meta( 8, 'lm_ab_services' );

?>

<section class="services custom-section dotes-decoration">
	<div class="container">
		<h2 class="section-title dark-color"><?php echo esc_html( $ab_srv_section_title ); ?></h2>
		<p class="section-description"><?php echo esc_html( $ab_srv_section_description ); ?></p>
		<div class="services-block">
			<?php if ( ! empty( $ab_srv_services ) ) : ?>
				<?php foreach ( $ab_srv_services as $service ) : ?>
					<div class="services-block__item">
						<img src="<?php echo esc_url( $service['lm_ab_service_image'] ); ?>"
							alt="<?php echo esc_attr( $service['lm_ab_service_title'] ); ?>" class="services-block__img">
						<h3 class="services-block__title"><?php echo esc_html( $service['lm_ab_service_title'] ); ?></h3>
						<div class="services-block__desc">
							<?php echo esc_html( $service['lm_ab_service_description'] ); ?>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>