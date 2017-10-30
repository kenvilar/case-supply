<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

<section id="template-container" class="contact">
	<div class="container locations">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="uppercase title">Our Showrooms</div>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
				<?php if ( have_rows( 'list_of_locations_1st_column' ) || have_rows( 'list_of_locations_2nd_column' ) ) : ?>
					<div class="location col-md-6 col-sm-12 col-xs-12 equal-height">
						<?php while ( have_rows( 'list_of_locations_1st_column' ) ) : the_row();
							$location_name = get_sub_field( 'location_name' );
							$address       = get_sub_field( 'address' );
							$telephone     = get_sub_field( 'telephone' );
							$fax           = get_sub_field( 'fax' ); ?>

							<div class="col-md-2 col-sm-2 col-xs-1">
								<img class="pull-right"
								     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
								     alt="location">
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 address">
								<h4><?php echo $location_name; ?></h4>
								<p>
									<?php echo $address; ?><br>
									<?php echo ( $telephone ) ? 'T ' . $telephone . '&nbsp;&nbsp;&nbsp;' : ''; ?><?php if ( $fax ) : ?>F <?php echo $fax; ?><?php endif; ?>
								</p>
							</div>
						
						<?php endwhile;
						wp_reset_postdata(); ?>
					</div>
					<div class="location col-md-6 col-sm-12 col-xs-12 equal-height">
						<?php while ( have_rows( 'list_of_locations_2nd_column' ) ) : the_row();
							$location_name = get_sub_field( 'location_name' );
							$address       = get_sub_field( 'address' );
							$telephone     = get_sub_field( 'telephone' );
							$fax           = get_sub_field( 'fax' ); ?>

							<div class="col-md-2 col-sm-2 col-xs-1">
								<img class="pull-right"
								     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
								     alt="location">
							</div>
							<div class="col-md-10 col-sm-10 col-xs-10 address">
								<h4><?php echo $location_name; ?></h4>
								<p>
									<?php echo $address; ?><br>
									<?php echo ( $telephone ) ? 'T ' . $telephone . '&nbsp;&nbsp;&nbsp;' : ''; ?><?php if ( $fax ) : ?>F <?php echo $fax; ?><?php endif; ?>
								</p>
							</div>
						
						<?php endwhile;
						wp_reset_postdata(); ?>
					</div>
				<?php else : ?>
					<div class="location col-md-6 col-sm-12 col-xs-12 equal-height">
						<!--1st-->
						<div class="col-md-2 col-sm-2 col-xs-1">
							<img class="pull-right"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
							     alt="location">
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 address">
							<h4>Syracuse Showroom</h4>
							<p>
								601 West Fayette Street Syracuse, NY 13204 <br>
								T 315.425.1818&nbsp;&nbsp;&nbsp;F 315.471.0597
							</p>
						</div>
						<!--2nd-->
						<div class="col-md-2 col-sm-2 col-xs-1">
							<img class="pull-right"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
							     alt="location">
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 address">
							<h4>Amsterdam Showroom</h4>
							<p>
								4184 State Highway 30 Amsterdam, NY 12010-6202 <br>
								T 518.883.7218&nbsp;&nbsp;&nbsp;F 518.883.7225
							</p>
						</div>
						<!--3rd-->
						<div class="col-md-2 col-sm-2 col-xs-1">
							<img class="pull-right"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
							     alt="location">
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 address">
							<h4>Auburn Showroom</h4>
							<p>
								360 Grant Avenue, Suite 102 Auburn, NY 13021 <br>
								T 315.425.1818&nbsp;&nbsp;&nbsp;F 315.471.0597
							</p>
						</div>
						<!--4th-->
						<div class="col-md-2 col-sm-2 col-xs-1">
							<img class="pull-right"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
							     alt="location">
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 address">
							<h4>Rome Showroom</h4>
							<p>
								293-295 East Dominick Street Rome, NY 13440 <br>
								T 315.425.1818&nbsp;&nbsp;&nbsp;F 315.471.0597
							</p>
						</div>
					</div>
					<div class="location col-md-6 col-sm-12 col-xs-12 equal-height">
						<div class="col-md-2 col-sm-2 col-xs-1">
							<img class="pull-right"
							     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
							     alt="location">
						</div>
						<div class="col-md-10 col-sm-10 col-xs-10 address">
							<h4>The Warehouse</h4>
							<p>
								150 Ainsley Drive Syracuse, NY 13210 <br>
								T 315.425.1818&nbsp;&nbsp;&nbsp;F 315.424.0626
							</p>
						</div>
					</div>
				<?php endif;
				wp_reset_query(); ?>
			</div>
		</div>
	</div>
	<div class="container hours-of-operation">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="uppercase title">Hours of Operation</div>
			</div>
			<div class="col-md-offset-2 col-md-8 nopaddingleft">
				<div class="col-md-7 col-sm-12 col-xs-12">
					<div class="col-md-5 col-sm-5 col-xs-4 days nopaddingleft nopaddingright">
						<?php if ( have_rows( 'hours_of_operations' ) ) : ?>
							<?php while ( have_rows( 'hours_of_operations' ) ) : the_row();
								$day = get_sub_field( 'day' );
								echo $day . '<br>';
							endwhile;
							wp_reset_postdata(); ?>
						<?php else : ?>
							Monday <br>
							Tuesday <br>
							Wednesday <br>
							Thursday <br>
							Friday <br>
							Saturday* <br>
							Sunday <br>
						<?php endif;
						wp_reset_query(); ?>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-7 time nopaddingright">
						<?php if ( have_rows( 'hours_of_operations' ) ) : ?>
							<?php while ( have_rows( 'hours_of_operations' ) ) : the_row();
								$time = get_sub_field( 'time' );
								echo $time . '<br>';
							endwhile;
							wp_reset_postdata(); ?>
						<?php else : ?>
							9:00 AM - 5:00 PM <br>
							9:00 AM - 5:00 PM <br>
							9:00 AM - 5:00 PM <br>
							9:00 AM - 5:00 PM <br>
							9:00 AM - 5:00 PM <br>
							9:00 AM - 1:00 PM <br>
							CLOSED
						<?php endif;
						wp_reset_query(); ?>
					</div>
				</div>
				<div class="col-md-5 col-sm-12 col-xs-12">
					<?php if ( get_field( 'additional_notes_for_hour_of_operations' ) ) :
						the_field( 'additional_notes_for_hour_of_operations' );
					else : ?>
						*We are open on Saturday's from Labor Day to Memorial Day ONLY. We are CLOSED on Saturday's during
						the summer months.
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="map"></div>

<?php require get_template_directory() . '/layouts/map.php'; ?>

<?php get_footer(); ?>
