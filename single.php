<?php get_header(); ?>
<div class="container">
	<div class="single-wrapper">
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>
			<h1 class="post__title"><?php the_title(); ?></h1>
			<div class="post__meta">
				<?php if ( function_exists( 'custom_breadcrumbs' ) ) : ?>
					<div class="breadcrumbs-block">
						<?php custom_breadcrumbs(); ?>
					</div>
				<?php endif; ?>
				<span class="post__date">
					<?php echo get_the_date(); ?>
				</span>
			</div>

			<?php if ( has_post_thumbnail() ) : ?>
				<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>"
					alt="<?php the_title_attribute(); ?>" class="post__image">
			<?php endif; ?>

			<div class="post__content">
				<?php the_content(); ?>
			</div>
		</article>

		<!-- sidebar -->
		<?php get_template_part( 'inc/template-parts/sidebar' ); ?>
	</div>

</div>
<?php get_footer(); ?>