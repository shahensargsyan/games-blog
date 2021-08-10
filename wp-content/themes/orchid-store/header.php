<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orchid_Store
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="http://ultimategameworld.com/vendor/core/plugins/cookie-consent/css/cookie-consent.css?v=1.0.0">
    <link media="all" type="text/css" rel="stylesheet" href="http://ultimategameworld.com/themes/martfury/plugins/bootstrap/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://ultimategameworld.com/themes/martfury/plugins/owl-carousel/assets/owl.carousel.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://ultimategameworld.com/themes/martfury/plugins/owl-carousel/assets/owl.theme.default.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://ultimategameworld.com/themes/martfury/plugins/slick/slick.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://ultimategameworld.com/themes/martfury/plugins/lightGallery/css/lightgallery.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link media="all" type="text/css" rel="stylesheet" href="http://ultimategameworld.com/themes/martfury/board-games/lib/bootstrap/css/bootstrap.min.css?v=1.0.11">
    <link media="all" type="text/css" rel="stylesheet" href="http://ultimategameworld.com/themes/martfury/board-games/lib/css/font-awesome.css?v=1.0.11">
    <link media="all" type="text/css" rel="stylesheet" href="http://ultimategameworld.com/themes/martfury/board-games/lib/css/owl.carousel.min.css?v=1.0.11">
    <link media="all" type="text/css" rel="stylesheet" href="http://ultimategameworld.com/themes/martfury/board-games/css/style.css?v=1.0.11">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php 
	if( function_exists( 'wp_body_open' ) ) { 
		wp_body_open(); 
	} 
	?>
	<div id="page" class="site __os-page-wrap__">

		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'orchid-store' ); ?></a>

		<?php
		/**
        * Hook - orchid_store_header.
        *
        * @hooked orchid_store_header_action - 10
        */
        do_action( 'orchid_store_header' );
        ?>
        
        <div id="content" class="site-content">