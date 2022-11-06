<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package No_Surrender_Running_Club
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'no-surrender-running-club' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="main-header-container">
                <div class="top-nav">
                    <div class="left-nav">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="nav-logo"><img
                                src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/logos/NSRC_Logo_Symbol_FullColor.png"
                                alt="No Surrender Running Club Logo" class="small-logo" /></a>

                        <nav id="site-navigation" class="main-navigation">
                            <button class="menu-toggle" aria-controls="primary-menu"
                                aria-expanded="false">
                                <?php echo file_get_contents(get_template_directory() . '/assets/icons/bars-solid.svg') ?>
                            </button>
                            <?php
			wp_nav_menu(
				array(
					'theme_location' => 'Primary',
					'menu'           => 'Main Menu',
				)
			);
			?>
                    </div>
                    <div class="right-nav">
										<?php
			wp_nav_menu(
				array(
					'menu' => 'nav-right',
					'container' => '',
					'menu_class' => 'menu-buttons'
				)
			);
			?>
											<?php echo do_shortcode('[paypal-donation]'); ?>
                    </div>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
            <?php
			if ( !is_front_page() && !is_home() ) :
				?>
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img
                        src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/logos/NSRC_Logo_Name_Black.png"
                        alt="No Surrender Running Club Logo" class="medium-logo main-logo" /></a>
                <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/assets/logos/NSRC_Logo_Symbol_Black.png"
                    alt="Lightning Bolt" class="small-logo secondary-logo" />
                <?php endif; ?>
                <?php

			$no_surrender_running_club_description = get_bloginfo( 'description', 'display' );
			if ( $no_surrender_running_club_description || is_customize_preview() ) :
				?>
                <p class="site-description">
                    <?php echo $no_surrender_running_club_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                </p>
                <?php endif; ?>
            </div><!-- .site-branding -->


        </header><!-- #masthead -->