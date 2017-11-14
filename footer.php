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

				<div class="col-md-4 col-sm-4 col-xs-12 single background-dark-gray equal-height"
				     style="background: linear-gradient(rgba(164, 164, 164, 0.80), rgba(164, 164, 164, 0.80)),
						     url(
				     <?php
				     if ( get_field( 'email_background_image_url', 'option' ) ) :
					     the_field( 'email_background_image_url', 'option' );
				     else :
					     echo get_template_directory_uri() . '/assets/images/get-in-touch/Summerhill_K_BHG_MEQUON_005_15-email.jpg';
				     endif; ?>);">
					
					<?php if ( get_field( 'email', 'option' ) ) : ?>
						<a href="mailto:<?php the_field( 'email', 'option' ); ?>" target="_blank"
						   rel="noopener noreferrer">
							<img src="<?php the_field( 'email_icon', 'option' ); ?>" alt="icon">
							<p><?php the_field( 'email', 'option' ); ?></p>
						</a>
					<?php else : ?>
						<a href="mailto:information@casesupply.com" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/email.png'; ?>"
							     alt="icon">
							<p>information@casesupply.com</p>
						</a>
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 single background-green equal-height"
				     style="background: linear-gradient(rgba(54, 158, 105, 0.80), rgba(54, 158, 105, 0.80)),
						     url(
				     <?php
				     if ( get_field( 'phone_background_image_url', 'option' ) ) :
					     the_field( 'phone_background_image_url', 'option' );
				     else :
					     echo get_template_directory_uri() . '/assets/images/get-in-touch/Vanity62-phone.jpg';
				     endif; ?>);">
					
					<?php if ( get_field( 'phone', 'option' ) ) : ?>
						<a href="tel:<?php the_field( 'phone', 'option' ); ?>" target="_blank"
						   rel="noopener noreferrer">
							<img src="<?php the_field( 'phone_icon', 'option' ); ?>" alt="icon">
							<p><?php the_field( 'phone', 'option' ); ?></p>
						</a>
					<?php else : ?>
						<a href="tel:315.425.1818" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/call.png'; ?>"
							     alt="icon">
							<p>315.425.1818</p>
						</a>
					<?php endif; ?>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 single background-blue equal-height"
				     style="background: linear-gradient(rgba(95, 154, 224, 0.80), rgba(95, 154, 224, 0.80)),
						     url(
				     <?php
				     if ( get_field( 'facebook_background_image_url', 'option' ) ) :
					     the_field( 'facebook_background_image_url', 'option' );
				     else :
					     echo get_template_directory_uri() . '/assets/images/get-in-touch/clareanne-residential-1500x998-fb.jpg';
				     endif; ?>);">
					
					<?php if ( get_field( 'facebook', 'option' ) ) : ?>
						<a href="<?php the_field( 'facebook', 'option' ); ?>" target="_blank" rel="noopener noreferrer">
							<img src="<?php the_field( 'facebook_icon', 'option' ); ?>" alt="icon">
							<p>Find us on Facebook</p>
						</a>
					<?php else : ?>
						<a href="https://www.facebook.com/casesupplyinc/" target="_blank" rel="noopener noreferrer">
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
			<div class="social-icons social-icons-small social-icons-circle">
				
				<?php if ( get_field( 'facebook_url', 'option' ) ) : ?>
					<a href="<?php the_field( 'facebook_url', 'option' ); ?>" class="social icon-facebook"
					   target="_blank" rel="noopener noreferrer">
						<i class="fa fa-facebook icon-primary"></i>
					</a>
				<?php endif; ?>
				
				<?php if ( get_field( 'instagram_url', 'option' ) ) : ?>
					<a href="<?php the_field( 'instagram_url', 'option' ); ?>" class="social icon-instagram"
					   target="_blank" rel="noopener noreferrer">
						<i class="fa fa-instagram icon-primary"></i>
					</a>
				<?php endif; ?>
				
				<?php if ( get_field( 'linkedin_url', 'option' ) ) : ?>
					<a href="<?php the_field( 'linkedin_url', 'option' ); ?>" class="social icon-linkedin"
					   target="_blank" rel="noopener noreferrer">
						<i class="fa fa-linkedin icon-primary"></i>
					</a>
				<?php endif; ?>
				
				<?php if ( get_field( 'houzz_url', 'option' ) ) : ?>
					<a href="<?php the_field( 'houzz_url', 'option' ); ?>" class="social icon-houzz" target="_blank"
					   rel="noopener noreferrer">
						<i class="fa fa-houzz icon-primary"></i>
					</a>
				<?php endif; ?>
				
				<?php if ( get_field( 'pinterest_url', 'option' ) ) : ?>
					<a href="<?php the_field( 'pinterest_url', 'option' ); ?>" class="social icon-pinterest"
					   target="_blank" rel="noopener noreferrer">
						<i class="fa fa-pinterest icon-primary"></i>
					</a>
				<?php endif; ?>

			</div>
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
