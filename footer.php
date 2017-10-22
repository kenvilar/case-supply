<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casesupply
 */

?>

	<section id="template-container" class="get-in-touch text-center">
		<div class="container">
			<div class="row">
				<p class="header1 header">GET IN TOUCH</p>
				<p class="header5">We'd love to hear from you!</p><br>
			</div>
		</div>
		<div class="container-fluid color-white">
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12">
					<div class="col-md-4 col-sm-4 col-xs-12 single background-dark-gray">
						<a href="">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/email.png'; ?>"
							     alt="icon">
							<p>information@casesupply.com</p>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 single background-green">
						<a href="">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/call.png'; ?>"
							     alt="icon">
							<p>315.425.1818</p>
						</a>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 single background-blue">
						<a href="">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/facebook.png'; ?>"
							     alt="icon">
							<p>Find us on Facebook</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="text-center col-md-12">
					<a href="<?php echo esc_url( __( '/', 'casesupply' ) ); ?>">
						<?php printf( esc_html__( '&copy; %s, INC. ALL RIGHTS RESERVED', 'casesupply' ), 'CASE SUPPLY' ); ?>
					</a>
				</div>
			</div>
		</div>
	</footer>

</div><!-- #main-container -->

<?php wp_footer(); ?>

</body>
</html>
