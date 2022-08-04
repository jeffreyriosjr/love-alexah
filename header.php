<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Love_Alexah
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://kit.fontawesome.com/ba414641d6.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); 

$banner_section = get_field('banner_section');
$banner_background = get_template_directory_uri() . '/img/Sage-Equities_Eastchester-Living_Website_Home_Hero.jpg';
$slider_or_image = get_field('slider_or_singe_image');
$slider_plugin_installed = is_plugin_active( 'nextend-smart-slider3-pro/nextend-smart-slider3-pro.php') || is_plugin_active( 'smart-slider-3/smart-slider-3.php');

?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'love-alexah' ); ?></a>

	<header id="masthead" class="container-fluid site-header">
		<div class="site-branding m-3">
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
			$love_alexah_description = get_bloginfo( 'description', 'display' );
			if ( $love_alexah_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $love_alexah_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<nav id="site-navigation" class="main-navigation">
		
			
		<button class="menu-toggle"><?php esc_html_e( 'Primary Menu', 'love-alexah' ); ?></button>
		<div class="main-navbar pb-5">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			</div>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->
