<?php

$team_section_title = esc_html( carbon_get_the_post_meta( 'lm_ab_team_title' ) );
$team_section_description = esc_html( carbon_get_the_post_meta( 'lm_ab_team_description' ) );
$team_members = carbon_get_the_post_meta( 'lm_ab_team_members' );

?>

<section class="team pattern-decoration custom-section">
	<div class="container">
		<h2 class="section-title dark-color">
			<?php echo $team_section_title; ?>
		</h2>
		<p class="section-description">
			<?php echo $team_section_description; ?>
		</p>
		<div class="team-wrapper">
			<?php if ( ! empty( $team_members ) ) : ?>
				<?php foreach ( $team_members as $member ) : ?>
					<?php
					$post = get_post( $member['id'] );
					setup_postdata( $post );

					$member_thumbnail = get_the_post_thumbnail( $post->ID, 'full' );
					$member_name = get_the_title();
					$member_position = esc_html( carbon_get_post_meta( $post->ID, 'lm_team_position' ) );
					$member_socials = carbon_get_post_meta( $post->ID, 'lm_team_socials' );
					?>
					<div class="team-card">
						<div class="team-card__image">
							<?php echo $member_thumbnail; ?>
						</div>
						<div class="team-card__info">
							<h3 class="team-card__name"><?php echo $member_name; ?></h3>
							<p class="team-card__position"><?php echo $member_position; ?></p>
							<div class="team-card__socials">
								<?php if ( carbon_get_the_post_meta( 'lm_team_facebook' ) ) : ?>
									<a href="<?php echo carbon_get_the_post_meta( 'lm_team_facebook' ) ?>"
										class="card-socials__icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/s-fs.svg"
											alt="<?php echo $member_name; ?>">
									</a>
								<?php endif; ?>
								<?php if ( carbon_get_the_post_meta( 'lm_team_linkedin' ) ) : ?>
									<a href="<?php echo carbon_get_the_post_meta( 'lm_team_linkedin' ) ?>"
										class="card-socials__icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/s-in.svg"
											alt="<?php echo $member_name; ?>">
									</a>
								<?php endif; ?>
								<?php if ( carbon_get_the_post_meta( 'lm_team_instagram' ) ) : ?>
									<a href="<?php echo carbon_get_the_post_meta( 'lm_team_instagram' ) ?>"
										class="card-socials__icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/s-ins.svg"
											alt="<?php echo $member_name; ?>">
									</a>
								<?php endif; ?>
								<?php if ( carbon_get_the_post_meta( 'lm_team_x' ) ) : ?>
									<a href="<?php echo carbon_get_the_post_meta( 'lm_team_x' ) ?>" class="card-socials__icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/s-x.svg"
											alt="<?php echo $member_name; ?>">
									</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>