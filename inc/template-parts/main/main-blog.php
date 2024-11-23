<?php

$main_section_title = carbon_get_post_meta( get_the_ID(), 'crb_main_section_title' );
$main_section_desc = carbon_get_post_meta( get_the_ID(), 'crb_main_section_desc' );
$btn_text = carbon_get_post_meta( get_the_ID(), 'crb_main_btn_text' );
$posts = carbon_get_post_meta( get_the_ID(), 'crb_main_blog_posts' );

?>

<section class="main-blog custom-section pattern-decoration">
	<div class="container">
		<div class="section-block">
			<div class="section-left">
				<h2 class="section-title"><?php echo esc_html( $main_section_title ); ?></h2>
				<p class="section-description">
					<?php echo esc_html( $main_section_desc ); ?>
				</p>
			</div>
			<div class="section-right">
				<a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>" class="btn">
					<?php echo esc_html( $btn_text ); ?>
				</a>
			</div>
		</div>
		<div class="blog-wrapper">
			<?php
			$selected_posts = carbon_get_post_meta( get_the_ID(), 'crb_main_blog_posts' );

			foreach ( $selected_posts as $post_data ) :

				$post_id = $post_data['id'];
				$post = get_post( $post_id );

				if ( $post ) :
					$post_title = esc_html( get_the_title( $post_id ) );
					$post_excerpt = esc_html( wp_trim_words( get_the_excerpt( $post_id ), 24 ) );
					$post_date = get_the_date( 'F j, Y', $post_id );
					$post_permalink = get_permalink( $post_id );
					$post_thumbnail_url = get_the_post_thumbnail_url( $post_id, 'full' );
					$post_category = get_the_category( $post_id );
					$category_name = ! empty( $post_category ) ? esc_html( $post_category[0]->name ) : '';
					$category_class = strtolower( $category_name );
					?>
					<div class="blog__card" data-link="<?php echo esc_url( $post_permalink ); ?>">
						<div class="blog__card-header"
							style="background-image: url('<?php echo esc_url( $post_thumbnail_url ); ?>');">
							<?php if ( $category_name ) : ?>
								<a href="<?php echo esc_url( get_category_link( $post_category[0]->term_id ) ); ?>"
									class="blog__card-category category--<?php echo esc_attr( $category_class ); ?>">
									<?php echo $category_name; ?>
								</a>
							<?php endif; ?>
						</div>
						<div class="blog__card-footer">
							<h3 class="blog__card-title"><?php echo $post_title; ?></h3>
							<p class="blog__card-excerpt"><?php echo $post_excerpt; ?></p>
							<div class="blog__card-meta">
								<span class="blog__card-date"><?php echo $post_date; ?></span>
								<a href="<?php echo esc_url( $post_permalink ); ?>" class="blog__card-btn">Read More</a>
							</div>
						</div>
					</div>
					<?php
				endif;
			endforeach;
			?>
		</div>

		<div class="view-more">
			<a href="<?php echo esc_url( get_post_type_archive_link( 'post' ) ); ?>" class="btn">
				<?php echo esc_html( $btn_text ); ?>
			</a>
		</div>
	</div>
</section>