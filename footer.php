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
						<?php if ( get_field( 'email', 'option' ) ) : ?>
							<a href="mailto:<?php the_field( 'email', 'option' ); ?>">
								<img src="<?php the_field( 'email_icon', 'option' ); ?>" alt="icon">
								<p><?php the_field( 'email', 'option' ); ?></p>
							</a>
						<?php else : ?>
							<a href="mailto:information@casesupply.com">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/email.png'; ?>"
								     alt="icon">
								<p>information@casesupply.com</p>
							</a>
						<?php endif; ?>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 single background-green">
						<?php if ( get_field( 'phone', 'option' ) ) : ?>
							<a href="tel:<?php the_field( 'phone', 'option' ); ?>">
								<img src="<?php the_field( 'phone_icon', 'option' ); ?>" alt="icon">
								<p><?php the_field( 'phone', 'option' ); ?></p>
							</a>
						<?php else : ?>
							<a href="tel:315.425.1818">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/call.png'; ?>"
								     alt="icon">
								<p>315.425.1818</p>
							</a>
						<?php endif; ?>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 single background-blue">
						<?php if ( get_field( 'facebook', 'option' ) ) : ?>
							<a href="<?php the_field( 'facebook', 'option' ); ?>">
								<img src="<?php the_field( 'facebook_icon', 'option' ); ?>" alt="icon">
								<p>Find us on Facebook</p>
							</a>
						<?php else : ?>
							<a href="https://www.facebook.com/casesupplyinc/">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/facebook.png'; ?>"
								     alt="icon">
								<p>Find us on Facebook</p>
							</a>
						<?php endif; ?>
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
