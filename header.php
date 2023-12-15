<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rockable
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

<?php
  // $primaryColor = get_field( 'primary_color', 'options');
  // $secondaryColor = get_field( 'secondary_color', 'options');
  // $toDarkMode = get_field( 'to_dark_mode', 'options');
  // $toLightMode = get_field( 'to_light_mode', 'options');
  $bg = get_field( 'background_image', 'options');
?>

<style>
	body {
		--primary-color: #1D1D1D;
		--secondary-color: #FFFFFF;
		--color-black: var(--secondary-color);

		background-image: url(<?php echo $bg; ?>);
		background-size: cover;
		background-attachment: fixed;
	}
</style>

<body <?php body_class();?>>

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rockable' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header__container">
			<a href="/" class="h2 brand">ROCKABLE</a>

			<div class="sub-nav">
				<a href="https://rockabledesign.com/v3/contact/" class="btn">CONTACT OUR TEAM</a>
				<ul>
					<li><a href="#" class="btn">PORTFOLIO</a></li>
					<li><a href="https://rockabledesign.com/v3/about/" class="btn">ABOUT</a></li>
					<li><a href="https://rockabledesign.com/v3/process/" class="btn">PROCESS</a></li>
				</ul>
			
				<button class="hamburger-menu">
					<span class="plus"></span>
					<span class="minus"></span>
				</button>
			</div>
		</div>
	</header>