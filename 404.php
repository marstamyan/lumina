<?php get_header(); ?>
<div class="error-page">
	<div class="container">
		<h1 class="error-page__title">404</h1>
		<p class="error-page__message">
			<?php echo esc_html__( 'Sorry, the page you are looking for was not found', THEME_NAME ); ?>
		</p>
		<a href="<?php echo esc_url( get_home_url() ); ?>" class="error-page__link">
			<?php echo esc_html__( 'Return to Home', THEME_NAME ); ?>
		</a>
	</div>
</div>
<?php get_footer(); ?>