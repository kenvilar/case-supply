<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casesupply
 */

?>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<section class="no-results not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'casesupply' ); ?></h1>
			</header>

			<div class="">
				<?php
				if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<p><?php
						printf(
							wp_kses(
								__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'casesupply' ),
								array(
									'a' => array(
										'href' => array(),
									),
								)
							),
							esc_url( admin_url( 'post-new.php' ) )
						);
						?></p>
				
				<?php elseif ( is_search() ) : ?>

					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'casesupply' ); ?></p>

					<div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6 col-xs-12">
						<?php /*get_search_form();*/ ?>
					</div>
				
				<?php else : ?>

					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'casesupply' ); ?></p>

					<div class="col-lg-offset-4 col-lg-4 col-md-offset-2 col-md-8 col-sm-offset-3 col-sm-6 col-xs-12">
						<?php /*get_search_form();*/ ?>
					</div>
				
				<?php endif; ?>
			</div>
		</section>
	</div>
</div>
