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
				<div class="location col-md-6 col-sm-12 col-xs-12">
					<div class="col-md-2 col-sm-2 col-xs-1">
						<img class="pull-right"
						     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
						     alt="location">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 address">
						<h4>Syracuse Showroom</h4>
						<p>
							601 West Fayette Street Syracuse, NY 13204 <br>
							t 315.425.1818&nbsp;&nbsp;&nbsp;f 315.471.0597
						</p>
					</div>
				</div>
				<div class="location col-md-6 col-sm-12 col-xs-12">
					<div class="col-md-2 col-sm-2 col-xs-1">
						<img class="pull-right"
						     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
						     alt="location">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 address">
						<h4>Amsterdam Showroom</h4>
						<p>
							4184 State Highway 30 Amsterdam, NY 12010-6202 <br>
							t 518.883.7218&nbsp;&nbsp;&nbsp;f 518.883.7225
						</p>
					</div>
				</div>
				<div class="location col-md-6 col-sm-12 col-xs-12">
					<div class="col-md-2 col-sm-2 col-xs-1">
						<img class="pull-right"
						     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
						     alt="location">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 address">
						<h4>Auburn Showroom</h4>
						<p>
							360 Grant Avenue, Suite 102 Auburn, NY 13021 <br>
							t 315.425.1818&nbsp;&nbsp;&nbsp;f 315.471.0597
						</p>
					</div>
				</div>
				<div class="location col-md-6 col-sm-12 col-xs-12">
					<div class="col-md-2 col-sm-2 col-xs-1">
						<img class="pull-right"
						     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
						     alt="location">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 address">
						<h4>The Warehouse</h4>
						<p>
							150 Ainsley Drive Syracuse, NY 13210 <br>
							t 315.425.1818&nbsp;&nbsp;&nbsp;f 315.424.0626
						</p>
					</div>
				</div>
				<div class="location col-md-6 col-sm-12 col-xs-12">
					<div class="col-md-2 col-sm-2 col-xs-1">
						<img class="pull-right"
						     src="<?php echo get_template_directory_uri() . '/assets/images/icons/location.png'; ?>"
						     alt="location">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 address">
						<h4>Rome Showroom</h4>
						<p>
							293-295 East Dominick Street Rome, NY 13440 <br>
							t 315.425.1818&nbsp;&nbsp;&nbsp;f 315.471.0597
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container hours-of-operation">
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				<div class="title">Hours of Operation</div>
			</div>
			<div class="col-md-offset-2 col-md-8 nopaddingleft">
				<div class="col-md-7 col-sm-12 col-xs-12">
					<div class="col-md-5 col-sm-5 col-xs-4 days nopaddingleft nopaddingright">
						Monday <br>
						Tuesday <br>
						Wednesday <br>
						Thursday <br>
						Friday <br>
						Saturday* <br>
						Sunday <br>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-7 time nopaddingright">
						9:00 AM - 5:00 PM <br>
						9:00 AM - 5:00 PM <br>
						9:00 AM - 5:00 PM <br>
						9:00 AM - 5:00 PM <br>
						9:00 AM - 5:00 PM <br>
						9:00 AM - 1:00 PM <br>
						CLOSED
					</div>
				</div>
				<div class="col-md-5 col-sm-12 col-xs-12">
					*We are open on Saturday's from Labor Day to Memorial Day ONLY. We are CLOSED on Saturday's during
					the summer months.
				</div>
			</div>
		</div>
	</div>
</section>

<div id="map"></div>

<script src="<?php echo get_template_directory_uri() . '/assets/js/map.js'; ?>"></script>
<script async defer
        src="//maps.googleapis.com/maps/api/js?key=AIzaSyCLI2mmf0Q6SK6-_v4BT6xtizZgz06QWi0&callback=initMap"></script>
<?php get_footer(); ?>
