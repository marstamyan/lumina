<?php

$ab_intro_title = carbon_get_post_meta( get_the_ID(), 'lm_ab_intro_title' );
$ab_intro_description = carbon_get_post_meta( get_the_ID(), 'lm_ab_intro_description' );
$ab_intro_button_text = carbon_get_post_meta( get_the_ID(), 'lm_ab_intro_button_text' );
$ab_intro_button_link = carbon_get_post_meta( get_the_ID(), 'lm_ab_intro_button_link' );
$ab_intro_image_url = carbon_get_post_meta( get_the_ID(), 'lm_ab_intro_image' );
$ab_our_story_text = carbon_get_post_meta( get_the_ID(), 'lm_ab_our_story' );
$ab_stat_years = carbon_get_post_meta( get_the_ID(), 'lm_ab_stat_years' );
$ab_stat_cases = carbon_get_post_meta( get_the_ID(), 'lm_ab_stat_cases' );
$ab_stat_experts = carbon_get_post_meta( get_the_ID(), 'lm_ab_stat_experts' );
$ab_stat_satisfaction = carbon_get_post_meta( get_the_ID(), 'lm_ab_stat_satisfaction' );

?>

<section class="intro">
	<div class="container">
		<div class="intro-top">
			<div class="intro-left">
				<h1 class="intro-title"><?php echo esc_html( $ab_intro_title ); ?></h1>
				<p class="intro-desc">
					<?php echo esc_html( $ab_intro_description ); ?>
				</p>
				<div class="intro-btns">
					<a href="<?php echo esc_url( $ab_intro_button_link ); ?>"
						class="btn"><?php echo esc_html( $ab_intro_button_text ); ?></a>
				</div>
				<hr class="separator">
			</div>
			<div class="intro-right">
				<div class="img-wrapper">
					<img src="<?php echo esc_url( $ab_intro_image_url ); ?>" alt="intro image"
						class="intro-img bordered-img">
				</div>
			</div>
		</div>
		<div class="intro-bottom">
			<div class="statistic">
				<div class="statistic-text">
					<h3 class="statistic-text__title">
						Our Story
					</h3>
					<p class="statistic-text__desc">
						<?php echo esc_html( $ab_our_story_text ); ?>
					</p>
				</div>
				<div class="statistic-result">
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $ab_stat_years ); ?>
						</span>
						<span class="statistic-block__text">
							Years In Practice
						</span>
					</div>
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $ab_stat_cases ); ?>
						</span>
						<span class="statistic-block__text">
							Successful Cases
						</span>
					</div>
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $ab_stat_experts ); ?>
						</span>
						<span class="statistic-block__text">
							Legal Experts
						</span>
					</div>
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $ab_stat_satisfaction ); ?>
						</span>
						<span class="statistic-block__text">
							Client Satisfaction Rate
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>