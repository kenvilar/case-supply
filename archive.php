<?php
/**
 * The template for displaying archive pages
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casesupply
 */

get_header(); ?>

	<section id="primary"
	         class="content-area container <?php echo is_dynamic_sidebar() ? 'col-md-9 col-sm-12 col-xs-12 equal-height' : ''; ?>">
		<div id="main" class="site-main">
			
			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header>
				
				<?php
				while ( have_posts() ) : the_post();
					
					get_template_part( 'template-parts/content', get_post_format() );
				
				endwhile;
				
				the_posts_navigation();
			
			else :
				
				get_template_part( 'template-parts/content', 'none' );
			
			endif; ?>

		</div>
	</section>

<?php get_sidebar(); ?>

<?php
get_footer();
