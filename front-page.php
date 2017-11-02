<?php

get_header(); ?>

<section id="banner">
	<?php
	if ( class_exists( 'RevSliderFront' ) && is_plugin_active( 'revslider/revslider.php' ) ) :
		if ( get_field( 'home_slider' ) ) :
			$home_slider_alias = new RevSliderSlider();
			if ( $home_slider_alias->isAliasExistsInDB( 'home_slider' ) ) :
				the_field( 'home_slider' );
			else : ?>
				<div style="background: url(<?php echo get_template_directory_uri() . '/assets/images/banner-homepage.png'; ?>) no-repeat;height: 400px;background-size: cover;background-position-y: center;"></div>
			<?php endif;
		else : ?>
			<div style="background: url(<?php echo get_template_directory_uri() . '/assets/images/banner-homepage.png'; ?>) no-repeat;height: 400px;background-size: cover;background-position-y: center;"></div>
		<?php endif;
	else :
		echo '<div style="text-align: center;color: red;">Please install or active the revolution slider plugin.</div>';
	endif;
	?>
</section>

<section id="home-services">
	<div class="container">
		<div class="row">
			<?php if ( have_rows( 'services' ) ): ?>
				<?php while ( have_rows( 'services' ) ): the_row(); ?>
					<?php
					$title   = get_sub_field( 'service_title' );
					$icon    = get_sub_field( 'service_icon_image' );
					$content = get_sub_field( 'service_content' );
					?>
					<div class="text-center single-service col-md-4 col-sm-12 col-xs-12 equal-height">
						<img src="<?php echo $icon; ?>" alt="icon">
						<h3><?php echo $title; ?></h3>
						<p><?php echo $content; ?></p>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			<?php else : ?>
				<div class="text-center single-service col-md-4 col-sm-12 col-xs-12 equal-height">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/design.png'; ?>"
					     alt="icon">
					<h3>DESIGN</h3>
					<p>Our experienced designers will create the kitchen and bath of your dreams.</p>
				</div>
				<div class="text-center single-service col-md-4 col-sm-12 col-xs-12 equal-height">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/installation.png'; ?>"
					     alt="icon">
					<h3>INSTALLATION</h3>
					<p>Case Supply's professional installers will help make your project come to life.</p>
				</div>
				<div class="text-center single-service col-md-4 col-sm-12 col-xs-12 equal-height">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/icons/delivery.png'; ?>"
					     alt="icon">
					<h3>DELIVERY</h3>
					<p>Our team will assure your products are delivered safely and on time.</p>
				</div>
			<?php endif;
			wp_reset_query(); ?>
		</div>
	</div>
</section>

<section id="home-our-story"
         style="background: linear-gradient(rgba(255, 255, 255, 0.90), rgba(255, 255, 255, 0.40)),
		         url(<?php echo ( get_field( 'our_story_image' ) ) ? the_field( 'our_story_image' ) : get_template_directory_uri() . '/assets/images/Annicca_2048x1536.jpg'; ?>);">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-12">
				<h1 class="text-center">OUR STORY</h1>
				<p class="text-center">
					<?php
					if ( get_field( 'our_story' ) ) :
						the_field( 'our_story' );
					else : ?>
						For over 50 years, the Case Supply family of employees has dedicated itself to servicing the needs
						of New York State’s kitchen and bath customers.
						<br><br>
						Case Supply, Inc. is a third generation, family-owned Kitchen & Bath design center that started in
						the city of Syracuse, NY in 1958 by Joseph A. Cicci, president of the New York State Home Builders
						Association (first elected in 1963) and is now run by his grandson, Joseph S. Cicci, formerly of
						Rome, New York.
						<br><br>
						Case Supply is bringing the home improvement industry’s latest styles, trends, fixtures and
						cabinetry to all of Central New York with respected consumer brands to meet every budget. We offer
						in-home design and measurement services, job-site delivery, project financing and the creative
						expertise of our local specialists.
						​<br><br>
						Kitchen and bath construction projects are emotional experiences, and no one is better prepared to
						guide you from vision to completion than Case Supply. Our award-winning design team facilitates all
						aspects of sale and delivery with the nation’s most-coveted products and the industry’s
						most-respected service team.
						​<br><br>
						The Case Supply team welcomes you as your journey in home improvement begins!
					<?php endif; ?>
				</p>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
