<?php

$lm_srv_intro_title = carbon_get_the_post_meta( 'lm_srv_intro_title' );
$lm_srv_intro_description = carbon_get_the_post_meta( 'lm_srv_intro_description' );
$lm_srv_intro_button_text = carbon_get_the_post_meta( 'lm_srv_intro_button_text' );
$lm_srv_intro_button_link = carbon_get_the_post_meta( 'lm_srv_intro_button_link' );
$lm_srv_intro_image_id = carbon_get_the_post_meta( 'lm_srv_intro_image' );
$lm_srv_intro_image_url = wp_get_attachment_url( $lm_srv_intro_image_id );
$lm_srv_intro_image_alt = get_post_meta( $lm_srv_intro_image_id, '_wp_attachment_image_alt', true );
$lm_srv_our_approach = carbon_get_the_post_meta( 'lm_srv_our_approach' );
$lm_srv_stat_projects = carbon_get_the_post_meta( 'lm_srv_stat_projects' );
$lm_srv_stat_clients = carbon_get_the_post_meta( 'lm_srv_stat_clients' );
$lm_srv_stat_experts = carbon_get_the_post_meta( 'lm_srv_stat_experts' );
$lm_srv_stat_satisfaction = carbon_get_the_post_meta( 'lm_srv_stat_satisfaction' );
?>

<section class="intro">
	<div class="container">
		<div class="intro-top">
			<div class="intro-left">
				<h1 class="intro-title">
					<?php echo esc_html( $lm_srv_intro_title ); ?>
				</h1>
				<p class="intro-desc">
					<?php echo esc_html( $lm_srv_intro_description ); ?>
				</p>
				<div class="intro-btns">
					<a href="<?php echo esc_url( $lm_srv_intro_button_link ); ?>" class="btn">
						<?php echo esc_html( $lm_srv_intro_button_text ); ?>
					</a>
				</div>
				<hr class="separator">
			</div>
			<div class="intro-right">
				<div class="img-wrapper">
					<img src="<?php echo esc_url( $lm_srv_intro_image_url ); ?>"
						alt="<?php echo esc_attr( $lm_srv_intro_image_alt ); ?>" class="intro-img bordered-img">
				</div>
			</div>
		</div>
		<div class="intro-bottom">
			<div class="statistic">
				<div class="statistic-text">
					<h3 class="statistic-text__title">
						<?php echo esc_html( $lm_srv_intro_title ); ?>
					</h3>
					<p class="statistic-text__desc">
						<?php echo esc_html( $lm_srv_our_approach ); ?>
					</p>
				</div>
				<div class="statistic-result">
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $lm_srv_stat_projects ); ?>
						</span>
						<span class="statistic-block__text">
							Years In Practice
						</span>
					</div>
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $lm_srv_stat_clients ); ?>
						</span>
						<span class="statistic-block__text">
							Successful Cases
						</span>
					</div>
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $lm_srv_stat_experts ); ?>
						</span>
						<span class="statistic-block__text">
							Legal Experts
						</span>
					</div>
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $lm_srv_stat_satisfaction ); ?>
						</span>
						<span class="statistic-block__text">
							Client Satisfaction
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>