<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

<section id="template-container" class="contact">
	<div class="container locations">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 col-xs-12">
				<?php if ( have_rows( 'list_of_locations' ) ) : ?>

					<div class="location col-md-6 col-sm-12 col-xs-12 equal-height address">
						<div class="col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-12">
							<div class="uppercase title">Our Showrooms</div>
						</div>
						<?php while ( have_rows( 'list_of_locations' ) ) : the_row();
							$location_name = get_sub_field( 'location_name' );
							$address       = get_sub_field( 'address' );
							$telephone     = get_sub_field( 'telephone' );
							$fax           = get_sub_field( 'fax' ); ?>

							<div class="col-md-2 col-sm-2 col-xs-1">
								<img class="pull-right"
								     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
								     alt="location">
							</div>
							<div class="col-md-10 col-sm-10 col-xs-11 address">
								<h4><?php echo $location_name; ?></h4>
								<p>
									<?php echo $address; ?><br>
									<?php echo ( $telephone ) ? '<span style="font-weight:bold;">t</span> ' . $telephone . '&nbsp;&nbsp;&nbsp;' : ''; ?><?php if ( $fax ) : ?>
										<span style="font-weight:bold;">f</span> <?php echo $fax; ?><?php endif; ?>
								</p>
							</div>
						<?php endwhile;
						wp_reset_postdata(); ?>
					</div>
				
				<?php else : ?>

					<div class="location col-md-6 col-sm-12 col-xs-12 equal-height address">
						<div class="col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-12">
							<div class="uppercase title">Our Showrooms</div>
						</div>
						<!--1st-->
						<div class="col-md-2 col-sm-2 col-xs-1">
							<a href="#map" id="clicktomap-0">
								<img class="pull-right"
								     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
								     alt="location">
							</a>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-11 address">
							<h4>Syracuse Showroom</h4>
							<p>
								601 West Fayette Street Syracuse, NY 13204 <br>
								<span style="font-weight:bold;">t</span> 315.425.1818&nbsp;&nbsp;&nbsp;
								<span style="font-weight:bold;">f</span> 315.471.0597
							</p>
						</div>
						<!--2nd-->
						<div class="col-md-2 col-sm-2 col-xs-1">
							<a href="#map" id="clicktomap-1">
								<img class="pull-right"
								     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
								     alt="location">
							</a>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-11 address">
							<h4>Auburn Showroom</h4>
							<p>
								360 Grant Avenue, Suite 102 Auburn, NY 13021 <br>
								<span style="font-weight:bold;">t</span> 315.425.1818&nbsp;&nbsp;&nbsp;
								<span style="font-weight:bold;">f</span> 315.471.0597
							</p>
						</div>
						<!--3rd-->
						<div class="col-md-2 col-sm-2 col-xs-1">
							<a href="#map" id="clicktomap-2">
								<img class="pull-right"
								     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
								     alt="location">
							</a>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-11 address">
							<h4>Rome Showroom</h4>
							<p>
								293-295 East Dominick Street Rome, NY 13440 <br>
								<span style="font-weight:bold;">t</span> 315.425.1818&nbsp;&nbsp;&nbsp;
								<span style="font-weight:bold;">f</span> 315.471.0597
							</p>
						</div>
						<!--4th-->
						<div class="col-md-2 col-sm-2 col-xs-1">
							<a href="#map" id="clicktomap-3">
								<img class="pull-right"
								     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
								     alt="location">
							</a>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-11 address">
							<h4>Amsterdam Showroom</h4>
							<p>
								4184 State Highway 30 Amsterdam, NY 12010-6202 <br>
								<span style="font-weight:bold;">t</span> 518.883.7218&nbsp;&nbsp;&nbsp;
								<span style="font-weight:bold;">f</span> 518.883.7225
							</p>
						</div>
						<!--5th-->
						<div class="col-md-2 col-sm-2 col-xs-1">
							<a href="#map" id="clicktomap-4">
								<img class="pull-right"
								     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
								     alt="location">
							</a>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-11 address">
							<h4>The Warehouse</h4>
							<p>
								150 Ainsley Drive Syracuse, NY 13210 <br>
								<span style="font-weight:bold;">t</span> 315.425.1818&nbsp;&nbsp;&nbsp;
								<span style="font-weight:bold;">f</span> 315.424.0626
							</p>
						</div>
					</div>
				<?php endif;
				wp_reset_query(); ?>

				<div class="location col-md-6 col-sm-12 col-xs-12 equal-height hours-of-operation">
					<div class="col-md-offset-2 col-md-10 col-sm-offset-2 col-sm-10 col-xs-offset-1 col-xs-10 nopaddingleft">
						<div class="uppercase title">Hours of Operation</div>
					</div>
					<div class="col-md-offset-2 col-md-10 nopaddingleft">
						<div class="col-md-offset-0 col-md-12 col-sm-offset-2 col-sm-10 col-xs-12 nopaddingleft">
							<?php if ( have_rows( 'hours_of_operations' ) ) : ?>
								<table>
									<?php while ( have_rows( 'hours_of_operations' ) ) : the_row();
										$day  = get_sub_field( 'day' );
										$time = get_sub_field( 'time' ); ?>
										<tr>
											<td class="days"><?php echo $day; ?></td>
											<td class="time"><?php echo $time; ?></td>
										</tr>
									<?php endwhile; ?>
								</table>
							<?php else : ?>
								<table>
									<tr>
										<td class="days">Monday</td>
										<td class="time">9:00 AM - 5:00 PM</td>
									</tr>
									<tr>
										<td class="days">Tuesday</td>
										<td class="time">9:00 AM - 5:00 PM</td>
									</tr>
									<tr>
										<td class="days">Wednesday</td>
										<td class="time">9:00 AM - 5:00 PM</td>
									</tr>
									<tr>
										<td class="days">Thursday</td>
										<td class="time">9:00 AM - 5:00 PM</td>
									</tr>
									<tr>
										<td class="days">Friday</td>
										<td class="time">9:00 AM - 5:00 PM</td>
									</tr>
									<tr>
										<td class="days">Saturday</td>
										<td class="time">9:00 AM - 1:00 PM</td>
									</tr>
									<tr>
										<td class="days">Sunday</td>
										<td class="time">CLOSED</td>
									</tr>
								</table>
							<?php endif; ?>
						</div>
						<br>
						<div class="col-md-12 col-sm-12 col-xs-12 nopaddingleft"
						     style="font-size: 16px;line-height: 25px;">
							<?php if ( get_field( 'additional_notes_for_hour_of_operations' ) ) : ?>
								<?php the_field( 'additional_notes_for_hour_of_operations' ); ?>
							<?php else : ?>
								*We are open on Saturday's from Labor Day to Memorial Day ONLY. We are CLOSED on Saturday's during
								the summer months.
							<?php endif; ?>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 nopaddingleft">
							<br><br>
							<a href="" class="btn btn-primary mybutton1 center-block text-uppercase" data-toggle="modal"
							   data-target="#myContactForm">Contact Us</a>
							<div id="myContactForm" class="modal fade contact-form" role="dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
											<h3 class="text-center text-uppercase text-green"><strong>Contact Form</strong></h3>
											<?php if ( get_field( 'contact_form_shortcode' ) ) :
												$cf7_shortcode = get_field( 'contact_form_shortcode' );
												echo do_shortcode( $cf7_shortcode );
											else : ?>
												<form action="">
													<div class="casesupply-contact-form">
														<div class="form-group">
															<input type="text" class="form-control" id="name" name="name"
															       placeholder="Name" required>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" id="phone" name="phone"
															       placeholder="Phone" required>
														</div>
														<div class="form-group">
															<input type="text" class="form-control" id="email" name="email"
															       placeholder="Email" required>
														</div>
														<div class="form-group">
															<textarea class="form-control" type="textarea" id="questions"
															          name="questions" placeholder="Questions" maxlength="140"
															          rows="7">
															</textarea>
														</div>
														<button type="button" id="submit" name="submit"
														        class="btn btn-primary mybutton1 center-block">SUBMIT
														</button>
													</div>
												</form>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--<section id="template-container" class="contact-form" style="padding-top:0;">
	<div class="container locations">
		<div class="row">
			<div class="col-xs-12">
				<?php /*if ( get_field( 'contact_form_shortcode' ) ) :
					$cf7_shortcode = get_field( 'contact_form_shortcode' );
					echo do_shortcode( $cf7_shortcode );
				else : */ ?>
					<form action="">
						<div class="casesupply-contact-form">
							<h3 class="text-center text-uppercase text-green"><strong>Contact Form</strong></h3>
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
							<textarea class="form-control" type="textarea" id="questions" name="questions" placeholder="Questions"
							          maxlength="140" rows="7"></textarea>
							</div>
							<button type="button" id="submit" name="submit" class="btn btn-primary mybutton1 center-block">SUBMIT
							</button>
						</div>
					</form>
				<?php /*endif; */ ?>
			</div>
		</div>
	</div>
</section>-->

<div id="map"></div>

<?php require get_template_directory() . '/layouts/map-2.php'; ?>

<?php get_footer(); ?>
