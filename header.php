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
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="main-container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'casesupply' ); ?></a>
	
	<?php require 'layouts/navigation.php'; ?>

	<section id="banner">
		<div class="container-fluid">
			<div class="row">
				<div class="jumbotron text-right">
					<h1>Hello, world!
						<small>bienvenue
					</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
						laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
	</section>
	