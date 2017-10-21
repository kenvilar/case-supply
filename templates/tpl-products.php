<?php
/**
 * Template Name: Products
 */
get_header(); ?>

<section id="template-container" class="products">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				Case Supply is pleased to announce that we have formed a priviledged partnership with the General
				Electric Co. Not only is Case Supply the exclusive Monogram distributor and dealer in upstate New York,
				but we also sell Profile, Hotpoint, and GE brand-name appliances.
				<br><br>
				Case Supply is also a New York State Energy Star dealer.
			</div>
		</div>
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 products-box">
				<div class="col-md-12">
					<div class="single-product"
					     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/original/clareanne-residential-1500x998.png'; ?>);background-position-y: center;">
						<h4>KITCHEN</h4>
					</div>
				</div>
				<div class="col-md-12">
					<div class="single-product"
					     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/original/Seagrove_Kirkstead_B_cambriastyle_001_14_1260x960.png'; ?>);background-position-y: 40%;">
						<h4>BATH</h4>
					</div>
				</div>
				<div class="col-md-12">
					<div class="single-product"
					     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/original/brittanicca_t_khachibrandonbarre_001_16_1260x960.png'; ?>);background-position-y: 85%;">
						<h4>COUNTERTOPS</h4>
					</div>
				</div>
				<div class="col-md-12">
					<div class="single-product"
					     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/original/stove.png'; ?>);background-position-y: 15%;">
						<h4>APPLIANCES</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
