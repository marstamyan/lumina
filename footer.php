<?php

$main_logo = carbon_get_theme_option( 'lm_logo' );
$social_facebook = carbon_get_theme_option( 'lm_facebook' );
$social_x = carbon_get_theme_option( 'lm_x' );
$social_instagram = carbon_get_theme_option( 'lm_instagram' );
$social_linkedin = carbon_get_theme_option( 'lm_linkedin' );
$social_pinterest = carbon_get_theme_option( 'lm_pinterest' );
?>

<footer class="footer">
	<div class="container">
		<div class="footer-wrapper">
			<div class="footer-left">
				<p class="footer-text">
					<?php esc_html_e( 'Get in Touch on Us for Your Path to Success', THEME_NAME ) ?>
				</p>
			</div>

			<div class="footer-right">
				<div class="socials footer-socials">
					<?php if ( $social_facebook ) : ?>
						<a href="<?php echo esc_url( $social_facebook ); ?>" class="social-link" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fs.svg" alt="facebook">
						</a>
					<?php endif; ?>
					<?php if ( $social_x ) : ?>
						<a href="<?php echo esc_url( $social_x ); ?>" class="social-link" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/x.svg" alt="x">
						</a>
					<?php endif; ?>
					<?php if ( $social_instagram ) : ?>
						<a href="<?php echo esc_url( $social_instagram ); ?>" class="social-link" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ins.svg" alt="instagram">
						</a>
					<?php endif; ?>
					<?php if ( $social_linkedin ) : ?>
						<a href="<?php echo esc_url( $social_linkedin ); ?>" class="social-link" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/in.svg" alt="linkedin">
						</a>
					<?php endif; ?>
					<?php if ( $social_pinterest ) : ?>
						<a href="<?php echo esc_url( $social_pinterest ); ?>" class="social-link" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pint.svg" alt="pinterest">
						</a>
					<?php endif; ?>
				</div>
				<nav class="menu footer-nav">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header_menu',
							'menu_class' => 'menu-list',
							'container' => false,
							'items_wrap' => '<ul class="%2$s">%3$s</ul>',
							'fallback_cb' => false,
						)
					);
					?>
				</nav>
			</div>
		</div>
		<hr class="separator">
		<div class="footer-copyright">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( $main_logo ); ?>" alt="logo">
				</a>
			</div>

			<span class="copyright">2024 WordPress Theme by <a href="https://marstamyan.github.io/portfolio"
					target="_blank">Mamikon</a></span>
		</div>
	</div>
	<div class="mask-modal" role="dialog"></div>
	<div class="modal" role="alert">
		<form action="#" class="modal-form">
			<input type="text" name="name" class="modal-form__input" placeholder="<?php _e( 'Name' ); ?>" required>
			<input type="tel" name="phone" class="modal-form__input" placeholder="<?php _e( 'Phone' ); ?>" required>
			<input type="hidden" name="action" value="submit_form">
			<div class="modal-form__loader" style="display: none;"></div>
			<button type="submit" class="btn">
				<?php _e( 'Send' ); ?>
			</button>
			<div class="modal-form__message" style="display: none;"></div>
		</form>
		<button class="close-modal" role="button">X</button>
	</div>
</footer>
<?php wp_footer(); ?>

</body>

</html>