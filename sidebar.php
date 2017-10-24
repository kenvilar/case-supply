<?php
/**
 * The sidebar containing the main widget area
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casesupply
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<section id="template-container" class="widget-area col-md-3 col-sm-12 col-xs-12 equal-height">
	<div class="container-fluid">
		<div class="row">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
</section>
