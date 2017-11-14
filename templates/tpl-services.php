<?php
/**
 * Template Name: Services
 */
get_header(); ?>

<section id="template-container" class="services">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<?php if ( have_rows( 'services' ) ): ?>
					<?php while ( have_rows( 'services' ) ): the_row(); ?>
						<?php
						$icon    = get_sub_field( 'icon' );
						$title   = get_sub_field( 'title' );
						$content = get_sub_field( 'content' );
						?>
						<div class="col-md-6 col-sm-12 equal-height">
							<div class="col-md-2">
								<img class="service-icon"
								     src="<?php
								     if ( $icon ) :
									     echo $icon;
								     else :
									     echo get_template_directory_uri() . '/assets/images/icons/services/in-home-design.png';
								     endif; ?>" alt="icon">
							</div>
							<div class="col-md-10">
								<h4 class="service-title"><?php echo $title; ?></h4>
								<p><?php echo $content; ?></p>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
				<?php else : ?>
					<div class="col-md-6 col-sm-12 equal-height">
						<div class="col-md-2">
							<img class="service-icon"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/in-home-design.png'; ?>"
							     alt="icon">
						</div>
						<div class="col-md-10">
							<h4 class="service-title">Design</h4>
							<p>Our experienced designers will create the kitchen and bath of your dreams.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 equal-height">
						<div class="col-md-2">
							<img class="service-icon"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/3d-perspective.png'; ?>"
							     alt="icon">
						</div>
						<div class="col-md-10">
							<h4 class="service-title">3D Perspective Drawings</h4>
							<p>Case Supply’s advanced software system provides you with realistic drawings of your
								space.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 equal-height">
						<div class="col-md-2">
							<img class="service-icon"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/installation.png'; ?>"
							     alt="icon">
						</div>
						<div class="col-md-10">
							<h4 class="service-title">Installation</h4>
							<p>Case Supply’s professional installers will help make your project come to life.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 equal-height">
						<div class="col-md-2">
							<img class="service-icon"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/field-measure.png'; ?>"
							     alt="icon">
						</div>
						<div class="col-md-10">
							<h4 class="service-title">Field Measure</h4>
							<p>Prior to ordering, we will measure your space to ensure accuracy.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 equal-height">
						<div class="col-md-2">
							<img class="service-icon"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/job-site-delivery.png'; ?>"
							     alt="icon">
						</div>
						<div class="col-md-10">
							<h4 class="service-title">Delivery</h4>
							<p>Our team will assure your products are delivered safely and on time.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 equal-height">
						<div class="col-md-2">
							<img class="service-icon"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/services/financing.png'; ?>"
							     alt="icon">
						</div>
						<div class="col-md-10">
							<h4 class="service-title">Financing</h4>
							<p>Case Supply is committed to ensuring your project's affordability.</p>
						</div>
					</div>
				<?php endif;
				wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
