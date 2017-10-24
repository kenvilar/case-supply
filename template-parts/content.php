<?php
/**
 * Template part for displaying posts
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
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				
				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<small><?php casesupply_posted_on(); ?></small>
					</div><br>
					<?php
				endif; ?>
			</header>

			<div class="entry-content">
				<?php
				the_content( sprintf(
					wp_kses(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'casesupply' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );
				
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'casesupply' ),
					'after'  => '</div>',
				) );
				?>
			</div>
		</article>
	</div>
</div>
