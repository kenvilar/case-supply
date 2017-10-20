<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casesupply
 */

?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="text-center col-md-12">
					<a href="<?php echo esc_url( __( '/', 'casesupply' ) ); ?>">
						<?php printf( esc_html__( '&copy; %s, INC. ALL RIGHTS RESERVED', 'casesupply' ), 'CASE SUPPLY' ); ?>
					</a>
				</div>
			</div>
		</div>
	</footer>

</div><!-- #main-container -->

<?php wp_footer(); ?>

</body>
</html>
