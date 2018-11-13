<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Synchronization
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'synchronization' ); ?></a>

            <?php
		if ( get_header_image() ) { ?>
			<header id="masthead" class="site-header header-background-image" style="background-image: url(<?php echo esc_url( get_header_image() ); ?>) " role="banner">
		<?php } else { ?>
			<header id="masthead" class="site-header" role="banner">
		<?php }
            ?>
                            
                 <?php
			// Make sure there is a social menu to display.
			if ( has_nav_menu( 'social' ) ) { ?>
			<nav class="social-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>' . synchronization_get_svg( array( 'icon' => 'chain' ) ),
					) );
				?>
			</nav>  <!-- .social-menu -->
		<?php } ?>                   
              
        
            <div class="site-branding">
                <div class="site-logo">    
                    <?php the_custom_logo(); ?>
                </div>
                <div class="site-branding__text">
                        <?php
                            if ( is_front_page() && is_home() ) : ?>
                                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php else : ?>
                                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php
                            endif;

                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) : ?>
                                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                            <?php
                            endif; ?>
                </div>
            </div><!-- .site-branding -->
        
	</header><!-- #masthead -->
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <i class="fa fa-reorder" aria-hidden="true"></i>
                <?php esc_html_e('Primary Menu', 'synchronization'); ?>
            </button>
            <?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' )); ?>
        </nav><!-- #site-navigation -->
	
                                
                                
                        
                        

	<div id="content" class="site-content">
