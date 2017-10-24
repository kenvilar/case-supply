<?php
/**
 * Template part for displaying results in search pages
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casesupply
 */

?>

<div class="row">
	<div class="col-lg-12 col-md-12">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<small><?php casesupply_posted_on(); ?></small>
					</div>
				<?php endif; ?>
			</header>

			<div class="container-fluid">
				<?php the_excerpt(); ?>
			</div>

		</article>
		<hr>
	</div>
</div>
