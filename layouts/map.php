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
				var myLocation = {
					lat : <?php echo ( $latitude ) ? $latitude : '43.0479122'; ?>,
					lng : <?php echo ( $longitude ) ? $longitude : '-76.164553'; ?>
				};

				var map = new google.maps.Map( document.getElementById( 'map' ), {
					center : myLocation,
					zoom   : <?php echo ( $zoom ) ? get_sub_field( 'zoom' ) : '14'; ?>,
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

				var marker = new google.maps.Marker( {
					position : myLocation,
					map      : map,
					title    : 'Case Supply'
				} );
			}
		</script>

		<script async defer
		        src="//maps.googleapis.com/maps/api/js?key=<?php echo ( $api_key ) ? $api_key : 'AIzaSyCLI2mmf0Q6SK6-_v4BT6xtizZgz06QWi0'; ?>&callback=initMap"></script>
	
	<?php endwhile; ?>

<?php endif; ?>

