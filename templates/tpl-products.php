<?php
/**
 * Template Name: Products
 */
get_header(); ?>

<section id="template-container" class="products">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<?php
				if ( get_field( 'page_content' ) ) :
					the_field( 'page_content' );
				endif; ?>
			</div>
		</div>
	</div>
	<div class="container products-container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 products-box">
				<?php if ( have_rows( 'list_of_products' ) ): ?>
					<?php while ( have_rows( 'list_of_products' ) ): the_row();
						$title   = get_sub_field( 'title' );
						$image   = get_sub_field( 'image' );
						$content = get_sub_field( 'content' );
						?>
						<div class="col-md-12">
							<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
							     title="Click For More Details"
							     style="background-image: url(<?php
							     if ( $image ) :
								     echo $image;
							     else :
								     echo get_template_directory_uri() . '/assets/images/original/clareanne-residential-1500x998.png';
							     endif; ?>);background-position-y: center;">
							</div>
							<div class="single-product-content">
								<h2 class="product-title text-center"><?php echo $title; ?></h2>
								<?php echo $content; ?>
							</div>
						</div>
					<?php endwhile;
					wp_reset_postdata(); ?>
				<?php else : ?>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/original/clareanne-residential-1500x998.png'; ?>);background-position-y: center;">
						</div>
						<div class="single-product-content">
							<h2 class="product-title text-center">KITCHEN</h2>
							For most people, renovating a kitchen is a once-in-a-lifetime experience. Case Supply
							recognizes
							the importance of your project, and understands the details surrounding each decision. That
							is
							why Case Supply represents only elite manufacturers of cabinetry, appliances and fixtures,
							with
							styles to fit every budget and every dream.
							<br><br>
							Certified Kitchen Designers will walk you through each phase of work, from elevations to
							three-dimensional perspectives, from field measurement to implementation. Case Supply even
							has a
							referral network.
							<br><br>
							Case Supply wants your kitchen project to be special!
						</div>
					</div>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/original/Seagrove_Kirkstead_B_cambriastyle_001_14_1260x960.png'; ?>);background-position-y: 40%;">
						</div>
						<div class="single-product-content">
							<h2 class="product-title text-center">BATH</h2>
							Today’s bathroom serves as an oasis from everyday stress. At Case Supply, we take luxury
							bathing
							to a new level. Relaxing whirlpools, steam showers, and innovative bodyspray systems have
							made
							bath remodeling more exciting than ever.
							<br><br>
							If you’re looking to make a small bathroom more functional, Case Supply can help you as
							well.
							Water closets and pedestal lavatories together in stylish ensembles can create a prestigious
							look on any budget.
							<br><br>
							At Case Supply, bathrooms are our business!
						</div>
					</div>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/original/brittanicca_t_khachibrandonbarre_001_16_1260x960.png'; ?>);background-position-y: 85%;">
						</div>
						<div class="single-product-content">
							<h2 class="product-title text-center">COUNTERTOPS</h2>
							Case Supply proudly offers a variety of granite, solid-surface, quartz, and laminate
							countertop
							products.
							<br><br>
							<div class="col-md-3 col-sm-6 col-xs-6 equal-height"><img
										src="<?php echo get_template_directory_uri() . '/assets/images/corian-design.png'; ?>"
										alt="image" style="width:auto!important;height:auto!important;"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 equal-height"><img
										src="<?php echo get_template_directory_uri() . '/assets/images/hartson-kennedy.png'; ?>"
										alt="image" style="width:auto!important;height:auto!important;"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 equal-height"><img
										src="<?php echo get_template_directory_uri() . '/assets/images/cambria.png'; ?>"
										alt="image" style="width:auto!important;height:auto!important;"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 equal-height"><img
										src="<?php echo get_template_directory_uri() . '/assets/images/busch.png'; ?>"
										alt="image" style="width:auto!important;height:auto!important;"></div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/original/stove.png'; ?>);background-position-y: 15%;">
						</div>
						<div class="single-product-content">
							<h2 class="product-title text-center">APPLIANCES</h2>
							VISIT OUR UPDATED SHOWROOM <br>
							Check out our newly remodeled showroom for the latest trends in Kitchen & Bath styles!
						</div>
					</div>
				<?php endif;
				wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
