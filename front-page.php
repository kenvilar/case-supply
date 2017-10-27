<?php

get_header(); ?>

<section id="banner">
	<?php
	/*if ( get_field( 'home_slider' ) ) :
		the_field( 'home_slider' );
	else :
		putRevSlider( "home_slider", "homepage" );
	endif;*/
	if ( class_exists( 'RevSliderFront' ) && is_plugin_active( 'revslider/revslider.php' ) ) :
		if ( get_field( 'home_slider' ) ) :
			if ( shortcode_exists( 'rev_slider' ) ) :
				$operations       = new RevSliderOperations();
				$arrValues        = $operations->getGeneralSettingsValues();
				$includesGlobally = RevSliderFunctions::getVal( $arrValues, "includes_globally", "on" );
				$strPutIn         = RevSliderFunctions::getVal( $arrValues, "pages_for_includes" );
				$isPutIn          = RevSliderOutput::isPutIn( $strPutIn, true );
				if ( $isPutIn == false ) {
					echo 'fail1';
				} else {
					//putRevSlider( "home_slider", "homepage" );
					echo 'a';
				}
			else :
				echo 'fail';
			endif;
		else :
			echo 'fail';
		endif;
	else :
		echo 'Please active the revolution slider plugin.';
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

<section id="home-our-story">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12">
				<h1 class="text-center">OUR STORY</h1>
				<p class="text-justify">
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
