<?php

get_header(); ?>

<section id="banner">
	<div class="container-fluid">
		<div class="row">
			<div class="jumbotron"
			     style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/original/banner-homepage-original.png'; ?>);">
			</div>
		</div>
	</div>
</section>

<section id="home-services">
	<div class="container-fluid">
		<div class="row">
			<div class="text-center single-service col-md-4 col-sm-12">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/design.png'; ?>" alt="">
				<h3>Design</h3>
				<p>Our certified designers will come to you in the comfort of your home to design the kitchen or bath of
					your dreams.</p>
			</div>
			<div class="text-center single-service col-md-4 col-sm-12">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/installation.png'; ?>" alt="">
				<h3>INSTALLATION</h3>
				<p>Case Supply’s professional contractors will complete your project to perfection.</p>
			</div>
			<div class="text-center single-service col-md-4 col-sm-12">
				<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/delivery.png'; ?>" alt="">
				<h3>DELIVERY</h3>
				<p>Our experts will make sure your products are delivered safely and on time to your doorstep.</p>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
