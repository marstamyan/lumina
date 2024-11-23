<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>

<?php

$main_logo = carbon_get_theme_option( 'lm_logo' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">
		<header class="header">
			<div class="container header-container">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( $main_logo ); ?>" alt="logo">
					</a>
				</div>
				<nav class="menu header-nav">
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
				<div class="header-btn">
					<button class="btn show-modal"
						aria-haspopup="true"><?php esc_html_e( 'Request a Call', THEME_NAME ); ?></button>
				</div>
				<div class="burger" id="burger-menu">
					<span></span>
				</div>
			</div>
		</header>