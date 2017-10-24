<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link    https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package casesupply
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div class="container" id="main">

			<div class="row error-404 not-found">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<br><br>
					<img class="img-responsive center-block"
					     src="<?php echo get_template_directory_uri() . '/assets/images/404.png'; ?>" alt="404">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 text-center">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'casesupply' ); ?></h1>
					</header>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links above?', 'casesupply' ); ?></p>
				</div>

				<div class="col-md-12 col-xs-12 page-content">

				</div>
			</div>

		</div>
	</section>
	<br><br>

<?php
get_footer();
