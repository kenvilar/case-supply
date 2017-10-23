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
				else : ?>
					Case Supply is pleased to announce that we have formed a priviledged partnership with the General
					Electric Co. Not only is Case Supply the exclusive Monogram distributor and dealer in upstate New York,
					but we also sell Profile, Hotpoint, and GE brand-name appliances.
					<br><br>
					Case Supply is also a New York State Energy Star dealer.
				<?php endif; ?>
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
								<h4 class="product-title"><?php echo $title; ?></h4>
							</div>
							<div class="single-product-content">
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
							<h4 class="product-title">KITCHEN</h4>
						</div>
						<div class="single-product-content">
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
							<h4 class="product-title">BATH</h4>
						</div>
						<div class="single-product-content">
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
							<h4 class="product-title">COUNTERTOPS</h4>
						</div>
						<div class="single-product-content">
							Case Supply proudly offers a variety of granite, solid-surface, quartz, and laminate
							countertop
							products.
							<br><br>
							<div class="col-md-3 col-sm-6 col-xs-6 equal-height"><img
										src="<?php echo get_template_directory_uri() . '/assets/images/corian-design.png'; ?>"
										alt="image"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 equal-height"><img
										src="<?php echo get_template_directory_uri() . '/assets/images/hartson-kennedy.png'; ?>"
										alt="image"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 equal-height"><img
										src="<?php echo get_template_directory_uri() . '/assets/images/cambria.png'; ?>"
										alt="image"></div>
							<div class="col-md-3 col-sm-6 col-xs-6 equal-height"><img
										src="<?php echo get_template_directory_uri() . '/assets/images/busch.png'; ?>"
										alt="image"></div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/original/stove.png'; ?>);background-position-y: 15%;">
							<h4 class="product-title">APPLIANCES</h4>
						</div>
						<div class="single-product-content">
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
