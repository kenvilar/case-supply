<?php
/* Google Map */
?>

<?php if ( have_rows( 'google_map' ) ) : ?>
	<?php while ( have_rows( 'google_map' ) ) : the_row();
		$latitude  = get_sub_field( 'latitude' );
		$longitude = get_sub_field( 'longitude' );
		$zoom      = get_sub_field( 'zoom' );
		$api_key   = get_sub_field( 'api_key' );
		?>

		<script type="text/javascript">
			function initMap() {
				var syracuse = {
					info : '<strong>Syracuse Showroom</strong><br>\
					601 West Fayette Street Syracuse, NY 13204',
					lat  : 43.0479122,
					long : -76.164553
				};

				var auburn = {
					info : '<strong>Auburn Showroom</strong><br>\
					360 Grant Avenue, Suite 102 Auburn, NY 13021',
					lat  : 42.9630126,
					long : -76.5393456
				};

				var rome = {
					info : '<strong>Rome Showroom</strong><br>\
					293-295 East Dominick Street Rome, NY 13440',
					lat  : 43.2075497,
					long : -75.4522878
				};

				var amsterdam = {
					info : '<strong>Amsterdam Showroom</strong><br>\
					4184 State Highway 30 Amsterdam, NY 12010-6202',
					lat  : 43.0182246,
					long : -74.1960794
				};

				var warehouse = {
					info : '<strong>The Warehouse</strong><br>\
					150 Ainsley Drive Syracuse, NY 13210',
					lat  : 43.0111347,
					long : -76.1354913
				};

				var locations = [
					[syracuse.info, syracuse.lat, syracuse.long, 0],
					[auburn.info, auburn.lat, auburn.long, 1],
					[rome.info, rome.lat, rome.long, 2],
					[amsterdam.info, amsterdam.lat, amsterdam.long, 3],
					[warehouse.info, warehouse.lat, warehouse.long, 4],
				];

				var map = new google.maps.Map( document.getElementById( 'map' ), {
					zoom   : 9,
					center : new google.maps.LatLng( 43.2075497, -75.4522878 ),
					styles : [
						{
							elementType : 'geometry',
							stylers     : [{ color : '#f5f5f5' }]
						},
						{
							elementType : 'labels.icon',
							stylers     : [{ visibility : 'off' }]
						},
						{
							elementType : 'labels.text.fill',
							stylers     : [{ color : '#616161' }]
						},
						{
							elementType : 'labels.text.stroke',
							stylers     : [{ color : '#f5f5f5' }]
						},
						{
							featureType : 'administrative.land_parcel',
							elementType : 'labels.text.fill',
							stylers     : [{ color : '#bdbdbd' }]
						},
						{
							featureType : 'poi',
							elementType : 'geometry',
							stylers     : [{ color : '#eeeeee' }]
						},
						{
							featureType : 'poi',
							elementType : 'labels.text.fill',
							stylers     : [{ color : '#757575' }]
						},
						{
							featureType : 'poi.park',
							elementType : 'geometry',
							stylers     : [{ color : '#e5e5e5' }]
						},
						{
							featureType : 'poi.park',
							elementType : 'labels.text.fill',
							stylers     : [{ color : '#9e9e9e' }]
						},
						{
							featureType : 'road',
							elementType : 'geometry',
							stylers     : [{ color : '#ffffff' }]
						},
						{
							featureType : 'road.arterial',
							elementType : 'labels.text.fill',
							stylers     : [{ color : '#757575' }]
						},
						{
							featureType : 'road.highway',
							elementType : 'geometry',
							stylers     : [{ color : '#dadada' }]
						},
						{
							featureType : 'road.highway',
							elementType : 'labels.text.fill',
							stylers     : [{ color : '#616161' }]
						},
						{
							featureType : 'road.local',
							elementType : 'labels.text.fill',
							stylers     : [{ color : '#9e9e9e' }]
						},
						{
							featureType : 'transit.line',
							elementType : 'geometry',
							stylers     : [{ color : '#e5e5e5' }]
						},
						{
							featureType : 'transit.station',
							elementType : 'geometry',
							stylers     : [{ color : '#eeeeee' }]
						},
						{
							featureType : 'water',
							elementType : 'geometry',
							stylers     : [{ color : '#65aa90' }]
						},
						{
							featureType : 'water',
							elementType : 'labels.text.fill',
							stylers     : [{ color : '#9e9e9e' }]
						}
					]
				} );

				var infowindow = new google.maps.InfoWindow( {} );

				var marker, i;

				for ( i = 0; i < locations.length; i++ ) {
					marker = new google.maps.Marker( {
						position  : new google.maps.LatLng( locations[i][1], locations[i][2] ),
						map       : map,
						animation : google.maps.Animation.DROP
					} );

					google.maps.event.addListener( marker, 'click', (function( marker, i ) {
						return function() {
							infowindow.setContent( locations[i][0] );
							infowindow.open( map, marker );

							//Marker animation
							if ( marker.getAnimation() !== null ) {
								marker.setAnimation( null );
							}
						};
					})( marker, i ) );
				}


				////
				////
				//// Click event listener for map location icons
				////
				////
				document.getElementById( "clicktomap-0" ).addEventListener( "click", function() {
					mymarker = new google.maps.Marker( {
						position  : new google.maps.LatLng( locations[0][1], locations[0][2] ),
						map       : map,
						animation : google.maps.Animation.DROP
					} );

					infowindow.setContent( locations[0][0] );
					infowindow.open( map, mymarker );
				} );
				document.getElementById( "clicktomap-1" ).addEventListener( "click", function() {
					mymarker = new google.maps.Marker( {
						position  : new google.maps.LatLng( locations[1][1], locations[1][2] ),
						map       : map,
						animation : google.maps.Animation.DROP
					} );

					infowindow.setContent( locations[1][0] );
					infowindow.open( map, mymarker );
				} );
				document.getElementById( "clicktomap-2" ).addEventListener( "click", function() {
					mymarker = new google.maps.Marker( {
						position  : new google.maps.LatLng( locations[2][1], locations[2][2] ),
						map       : map,
						animation : google.maps.Animation.DROP
					} );

					infowindow.setContent( locations[2][0] );
					infowindow.open( map, mymarker );
				} );
				document.getElementById( "clicktomap-3" ).addEventListener( "click", function() {
					mymarker = new google.maps.Marker( {
						position  : new google.maps.LatLng( locations[3][1], locations[3][2] ),
						map       : map,
						animation : google.maps.Animation.DROP
					} );

					infowindow.setContent( locations[3][0] );
					infowindow.open( map, mymarker );
				} );
				document.getElementById( "clicktomap-4" ).addEventListener( "click", function() {
					mymarker = new google.maps.Marker( {
						position  : new google.maps.LatLng( locations[4][1], locations[4][2] ),
						map       : map,
						animation : google.maps.Animation.DROP
					} );

					infowindow.setContent( locations[4][0] );
					infowindow.open( map, mymarker );
				} );

			}

		</script>

		<script async defer
		        src="//maps.googleapis.com/maps/api/js?key=<?php echo ( $api_key ) ? $api_key : 'AIzaSyCLI2mmf0Q6SK6-_v4BT6xtizZgz06QWi0'; ?>&callback=initMap"></script>
	
	<?php endwhile;
	wp_reset_postdata(); ?>

<?php endif;
wp_reset_query(); ?>
