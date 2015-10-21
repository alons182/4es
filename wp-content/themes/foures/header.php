<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 4es
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
            <div class="header-container">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo.png" alt="Logo" /></a>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo header-logo-white"><img src="<?php echo get_template_directory_uri();  ?>/img/logo-white.png" alt="Logo" /></a>
               
                <?php
					wp_nav_menu(
						 array(
						 	'theme_location' => 'primary',
						 	'container'       => 'nav',
							'container_class' => 'header-menu',
							'container_id'    => '',
							'menu_class'      => 'header-menu-ul',
							'menu_id'         => '',
						 	 ) 

				);?>
                
                <button id="btn-menu" class="header-btn-menu">
                    <i class="icon-menu"></i>
                </button>
                 
                
            </div>   
            
        </header>
