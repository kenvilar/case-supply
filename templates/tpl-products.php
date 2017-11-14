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
							<h2 class="product-title text-center">CABINETS</h2>
						</div>
					</div>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/products/Bathroom.jpg'; ?>);background-position-y: 55%;">
						</div>
						<div class="single-product-content">
							<h2 class="product-title text-center">FIXTURES</h2>
						</div>
					</div>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/products/Countertop.jpg'; ?>);background-position-y: 85%;">
						</div>
						<div class="single-product-content">
							<h2 class="product-title text-center">COUNTERTOPS</h2>
						</div>
					</div>
					<div class="col-md-12">
						<div class="single-product single-product-toggle" data-toggle="tooltip" data-placement="top"
						     title="Click For More Details"
						     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/products/Appliance.jpg'; ?>);background-position-y: 60%;">
						</div>
						<div class="single-product-content">
							<h2 class="product-title text-center">MISCELLANEOUS</h2>
						</div>
					</div>
				<?php endif;
				wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
