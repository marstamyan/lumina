<?php

$contact_intro_title = carbon_get_the_post_meta( 'contact_intro_title' );
$contact_info_blocks = carbon_get_the_post_meta( 'contact_info_blocks' );
$contact_intro_image = carbon_get_the_post_meta( 'contact_intro_image' );

?>

<section class="intro">
	<div class="container">
		<div class="intro-top">
			<div class="intro-left">
				<?php if ( $contact_intro_title ) : ?>
					<h1 class="intro-title">
						<?php echo esc_html( $contact_intro_title ); ?>
					</h1>
				<?php endif; ?>

				<?php if ( $contact_info_blocks ) : ?>
					<?php foreach ( $contact_info_blocks as $info_block ) : ?>
						<?php
						$icon = isset( $info_block['icon'] ) ? $info_block['icon'] : '';
						$title = isset( $info_block['title'] ) ? $info_block['title'] : '';
						$text = isset( $info_block['text'] ) ? $info_block['text'] : '';
						?>

						<div class="info-block">
							<?php if ( $icon ) : ?>
								<div class="info-block__icon">
									<img src="<?php echo esc_url( $icon ); ?>" alt="">
								</div>
							<?php endif; ?>
							<div class="info-meta">
								<?php if ( $title ) : ?>
									<h3 class="info-meta__title">
										<?php echo esc_html( $title ); ?>
									</h3>
								<?php endif; ?>
								<?php if ( $text ) : ?>
									<div class="info-meta__text">
										<?php echo esc_html( $text ); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

				<hr class="separator">
			</div>

			<div class="intro-right">
				<?php if ( $contact_intro_image ) : ?>
					<div class="img-wrapper">
						<img src="<?php echo esc_url( $contact_intro_image ); ?>" alt="intro image"
							class="intro-img bordered-img">
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>