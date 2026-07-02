<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alabali
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alabali' ); ?></a>

<!-- Offcanvas Menu Overlay (خلفية معتمة) -->
<div class="offcanvas-menu-overlay"></div>

<!-- Offcanvas Menu (المنيو الجانبي) -->
<div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
        <i class="fa fa-times"></i>
    </div>
    <div class="canvas-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group-4601.webp" alt="Logo">
    </div>
    <nav class="canvas-menu">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'header',
            'container'      => false,
            'menu_class'     => '',
            'fallback_cb'    => '__return_false',
        ) );
        ?>
    </nav>
    <div class="canvas-btn">
        <a href="#" class="btn-get-touch w-100">Get in touch</a>
    </div>
</div>

<header id="masthead" class="site-header custom-header">
    <div class="header-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark w-100 p-0">
            
            <a class="navbar-brand p-0" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group-4601.webp" alt="Portal Logo" class="header-logo">
            </a>

            <!-- روابط التنقل للديسكتوب (تظهر فقط على الشاشات الكبيرة) -->
            <div class="nav-menu d-none d-lg-block">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'header',
                    'container'      => false,
                    'menu_class'     => '',
                    'fallback_cb'    => '__return_false',
                ) );
                ?>
            </div>

            <!-- التوجلر (Hamburger) - يظهر فقط على الموبايل -->
            <div class="canvas-open">
                <i class="fa fa-bars"></i>
            </div>

            <!-- زر Get in Touch للديسكتوب -->
            <div class="d-none d-lg-block">
                <a href="#" class="btn-get-touch">Get in touch</a>
            </div>
        </nav>
    </div>
</header>
