<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>
<?php get_template_part( 'inc/template-parts/contact/contact-intro' ); ?>



<section class="contact">
	<div class="container">
		<div class="contact-wrapper">
			<h1 class="contact__title"><?php esc_html_e( 'Get in Touch', THEME_NAME ) ?></h1>
			<?php echo do_shortcode( '[contact-form-7 id="c9afaac" title="Contact page form" html_class="contact__form"]' ) ?>
		</div>
	</div>
</section>
<section class="contact-map">
	<div class="contact-map__container">
		<?php
		$contact_map_url = carbon_get_the_post_meta( 'contact_map_url' );
		if ( $contact_map_url ) : ?>
			<iframe class="contact-map__iframe" src="<?php echo esc_url( $contact_map_url ); ?>" allowfullscreen=""
				loading="lazy" referrerpolicy="no-referrer-when-downgrade">
			</iframe>
		<?php endif; ?>
	</div>
</section>
<?php get_footer(); ?>