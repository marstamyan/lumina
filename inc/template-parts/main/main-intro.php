<?php

$front_intro_title = carbon_get_the_post_meta( 'front_intro_title' );
$front_intro_desc = carbon_get_the_post_meta( 'front_intro_desc' );
$front_intro_btn1_text = carbon_get_the_post_meta( 'front_intro_btn1_text' );
$front_intro_btn1_link = carbon_get_the_post_meta( 'front_intro_btn1_link' );
$front_intro_btn2_text = carbon_get_the_post_meta( 'front_intro_btn2_text' );
$front_intro_btn2_link = carbon_get_the_post_meta( 'front_intro_btn2_link' );
$front_intro_img = wp_get_attachment_image_url( carbon_get_the_post_meta( 'front_intro_img' ), 'full' );
$front_stat_title = carbon_get_the_post_meta( 'front_stat_title' );
$front_stat_desc = carbon_get_the_post_meta( 'front_stat_desc' );
$front_stat_clients = carbon_get_the_post_meta( 'front_stat_clients' );
$front_stat_clients_label = carbon_get_the_post_meta( 'front_stat_clients_label' );
$front_stat_success = carbon_get_the_post_meta( 'front_stat_success' );
$front_stat_success_label = carbon_get_the_post_meta( 'front_stat_success_label' );
$front_stat_team = carbon_get_the_post_meta( 'front_stat_team' );
$front_stat_team_label = carbon_get_the_post_meta( 'front_stat_team_label' );
$front_stat_revenue = carbon_get_the_post_meta( 'front_stat_revenue' );
$front_stat_revenue_label = carbon_get_the_post_meta( 'front_stat_revenue_label' );

?>

<section class="intro">
	<div class="container">
		<div class="intro-top">
			<div class="intro-left">
				<h1 class="intro-title">
					<?php echo esc_html( $front_intro_title ); ?>
				</h1>
				<p class="intro-desc">
					<?php echo esc_html( $front_intro_desc ); ?>
				</p>
				<div class="intro-btns">
					<a href="<?php echo esc_url( $front_intro_btn1_link ); ?>" class="btn">
						<?php echo esc_html( $front_intro_btn1_text ); ?>
					</a>
					<a href="<?php echo esc_url( $front_intro_btn2_link ); ?>" class="btn btn-transp">
						<?php echo esc_html( $front_intro_btn2_text ); ?>
					</a>
				</div>
				<hr class="separator">
			</div>
			<div class="intro-right">
				<div class="img-wrapper">
					<img src="<?php echo esc_url( $front_intro_img ); ?>" alt="intro image"
						class="intro-img bordered-img">
				</div>
			</div>
		</div>
		<div class="intro-bottom">
			<div class="statistic">
				<div class="statistic-text">
					<h3 class="statistic-text__title">
						<?php echo esc_html( $front_stat_title ); ?>
					</h3>
					<p class="statistic-text__desc">
						<?php echo esc_html( $front_stat_desc ); ?>
					</p>
				</div>
				<div class="statistic-result">
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $front_stat_clients ); ?>
						</span>
						<span class="statistic-block__text">
							<?php echo esc_html( $front_stat_clients_label ); ?>
						</span>
					</div>
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $front_stat_success ); ?>
						</span>
						<span class="statistic-block__text">
							<?php echo esc_html( $front_stat_success_label ); ?>
						</span>
					</div>
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $front_stat_team ); ?>
						</span>
						<span class="statistic-block__text">
							<?php echo esc_html( $front_stat_team_label ); ?>
						</span>
					</div>
					<div class="statistic-block">
						<span class="statistic-block__number">
							<?php echo esc_html( $front_stat_revenue ); ?>
						</span>
						<span class="statistic-block__text">
							<?php echo esc_html( $front_stat_revenue_label ); ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>