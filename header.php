<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cleeanupgreen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php wp_title(''); ?> | CleanupGreen</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cleeanupgreen' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="header-container">
			<!-- Logo on the left -->
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$cleeanupgreen_description = get_bloginfo( 'description', 'display' );
				if ( $cleeanupgreen_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $cleeanupgreen_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<!-- Navigation and Cart Icon on the right -->
			<div class="header-right">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cleeanupgreen' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->

				<!-- WooCommerce Cart Icon -->
				<div class="woocommerce-cart-icon">
					<a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart', 'cleeanupgreen' ); ?>">
						<i class="fas fa-shopping-cart"></i> <!-- Font Awesome cart icon -->
						<span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
					</a>
				</div>
			</div><!-- .header-right -->
		</div><!-- .header-container -->
	</header><!-- #masthead -->