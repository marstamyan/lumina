<?php get_header(); ?>

<div class="archive-page">
	<div class="container">
		<h1 class="archive__title">
			<?php
			if ( is_home() && get_option( 'page_for_posts' ) ) {
				echo get_the_title( get_option( 'page_for_posts' ) );
			} elseif ( is_category() ) {
				single_cat_title( 'Category: ' );
			} elseif ( is_tag() ) {
				single_tag_title( 'Tag: ' );
			} elseif ( is_search() ) {
				printf( 'Search Results for: %s', get_search_query() );
			} else {
				echo 'Archive';
			}
			?>
		</h1>

		<div class="blog-wrapper">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) :
					the_post(); ?>
					<div class="blog__card" data-link="<?php the_permalink(); ?>">
						<div class="blog__card-header"
							style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>');">
							<?php
							$categories = get_the_category();
							if ( ! empty( $categories ) ) :
								$category_link = get_category_link( $categories[0]->term_id );
								$category_name = esc_html( $categories[0]->name );
								?>
								<a href="<?php echo esc_url( $category_link ); ?>"
									class="blog__card-category category--<?php echo strtolower( $category_name ); ?>">
									<?php echo $category_name; ?>
								</a>
							<?php endif; ?>
						</div>
						<div class="blog__card-footer">
							<h3 class="blog__card-title"><?php the_title(); ?></h3>
							<p class="blog__card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
							<div class="blog__card-meta">
								<span class="blog__card-date"><?php echo get_the_date(); ?></span>
								<a href="<?php the_permalink(); ?>" class="blog__card-btn">Read More</a>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php else : ?>
				<p>No posts found.</p>
			<?php endif; ?>
		</div>


		<?php if ( function_exists( 'custom_pagination' ) ) {
			custom_pagination();
		} ?>
	</div>
</div>

<?php get_footer(); ?>