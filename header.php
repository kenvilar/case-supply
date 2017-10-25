<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casesupply
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri() . '/assets/images/favicon.png'; ?>" sizes="any" type="image/png">
	
	<?php wp_head(); ?>
	
	<?php if ( get_field( 'custom_css', 'option' ) ) : ?>
		<style type="text/css">
			<?php the_field( 'custom_css', 'option' ); ?>
		</style>
	<?php endif; ?>

</head>

<body <?php body_class(); ?>>

<div class="preloader">
	<div class="pl-line pl-line-1"></div>
	<div class="pl-line pl-line-2"></div>
	<div class="pl-line pl-line-3"></div>
	<div class="pl-line pl-line-4"></div>
</div>

<div id="main-container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'casesupply' ); ?></a>
	
	<?php require 'layouts/navigation.php'; ?>
	
	<?php if ( ! is_front_page() ) : ?>
		<section id="normal-banner">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-10">
						<h1><?php echo get_the_title(); ?></h1>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
