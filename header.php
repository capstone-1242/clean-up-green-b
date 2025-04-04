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
        <div class="site-branding">
            <?php
            // Custom logo with increased size
            if ( has_custom_logo() ) :
                $logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $logo_id , 'full' );
                $logo_alt = get_post_meta( $logo_id, '_wp_attachment_image_alt', true );
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link" rel="home">
                    <img src="<?php echo esc_url( $logo[0] ); ?>" alt="<?php echo esc_attr( $logo_alt ); ?>" class="custom-logo" style="max-height: 50px; width: auto;">
                </a>
                <?php
            endif;
            
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
                <p class="site-description"><?php echo $cleeanupgreen_description; ?></p>
            <?php endif; ?>
        </div>

        <div class="header-right">
            <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
    <span class="menu-toggle-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </span>
    <span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'cleeanupgreen' ); ?></span>
</button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'container_class' => 'menu-container',
                        'link_before'    => '<span class="menu-item-text">',
                        'link_after'     => '</span>',
                    )
                );
                ?>
            </nav>
        </div>
    </div>
</header>