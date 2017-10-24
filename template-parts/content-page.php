<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casesupply
 */

?>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>

			<div class="entry-content">
				<?php
				the_content();
				
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'casesupply' ),
					'after'  => '</div>',
				) );
				?>
			</div>

		</article>
	</div>
</div>
