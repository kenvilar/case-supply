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
							<span class="product-title-show-when-hover-image"><?php echo $title; ?></span>
							<div class="single-product-content">
								<h2 class="product-title text-center"><?php echo $title; ?></h2>
								<div class="container-fluid">
									<div class="row">
										<?php echo $content; ?>
									</div>
								</div>
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
						<span class="product-title-show-when-hover-image">CABINETS</span>
						<div class="single-product-content">
							<h2 class="product-title text-center">CABINETS</h2>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.bjtidwell.com/" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/cabinets/Monarch.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.durasupreme.com/" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/cabinets/Dura-Supreme.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://kitchenkompact.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/cabinets/Kitchen-Kompact.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.medallioncabinetry.com/" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/cabinets/Medallion-Gold.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.riverruncabinetry.com/" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/cabinets/RiverRun.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.wolfhomeproducts.com/" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/cabinets/Wolf-Products.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.woodpro.com/" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/cabinets/WoodPro.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/products/Bathroom.jpg'; ?>);background-position-y: 55%;">
						</div>
						<span class="product-title-show-when-hover-image">FIXTURES</span>
						<div class="single-product-content">
							<h2 class="product-title text-center">FIXTURES</h2>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://aquaticbath.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/fixture/Aquatic.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.elkay.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/fixture/Elkay.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.gerberonline.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/fixture/Gerber.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.insinkerator.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/fixture/Insinkerator.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.us.kohler.com/us/" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/fixture/Kohler.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.moen.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/fixture/Moen2.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.mrsteam.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/fixture/Mr.-Steam.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.sterlingplumbing.com" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/fixture/Sterling.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.swanstone.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/fixture/Swan.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/products/Countertop.jpg'; ?>);background-position-y: 85%;">
						</div>
						<span class="product-title-show-when-hover-image">COUNTERTOPS</span>
						<div class="single-product-content">
							<h2 class="product-title text-center">COUNTERTOPS</h2>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.buschproducts.com" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/countertops/Busch.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.cambriausa.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/countertops/Cambria2.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.dupont.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/countertops/DuPont.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.formica.com/en/us/homeowner" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/countertops/Formica.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.hartson-kennedy.com" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/countertops/Hartson-Kennedy.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.cosentino.com/sensa" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/countertops/Cosentino.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.wilsonart.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/countertops/Wilsonart2.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://stonecentralny.com/" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/countertops/stone-central.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/products/Appliance.jpg'; ?>);background-position-y: 60%;">
						</div>
						<span class="product-title-show-when-hover-image">MISCELLANEOUS</span>
						<div class="single-product-content">
							<h2 class="product-title text-center">MISCELLANEOUS</h2>
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.bascoshowerdoor.com" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/miscellaneous/Basco.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.besttile.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/miscellaneous/Best-Tile.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.broan-nutone.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/miscellaneous/Broan_NuTone.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.geappliances.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/miscellaneous/General-Electric.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.rangairemfg.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/miscellaneous/Rangaire.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.remeecasting.com" target="_blank" rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/miscellaneous/Remee-Casting.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
									<div class="col-md-3 col-sm-6 col-xs-6 equal-height">
										<a href="http://www.richelieu.com/us/en" target="_blank"
										   rel="noopener noreferrer">
											<img class="img-responsive"
											     src="<?php echo get_template_directory_uri(); ?>/assets/images/products/miscellaneous/Richelieu.png"
											     alt="products-image"
											     style="width:auto !important;height:auto !important;">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endif;
				wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
