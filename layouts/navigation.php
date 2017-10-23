<?php
/* Navigation Menu */
?>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-open" data-toggle="collapse"
			        data-target="#bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<button type="button" class="navbar-toggle navbar-toggle-close" data-toggle="collapse"
			        data-target="#bs-navbar-collapse"><img
						src="<?php echo get_template_directory_uri() . '/assets/images/close.png'; ?>" alt="close">
			</button>
			<?php if ( get_field( 'logo', 'option' ) ): ?>

				<a class="navbar-brand" href="/">
					<img src="<?php the_field( 'logo', 'option' ); ?>" alt="logo">
				</a>
			
			<?php else : ?>

				<a class="navbar-brand manual-text" href="/">CASE SUPPLY</a>
			
			<?php endif; ?>
		</div>
		<?php
		wp_nav_menu( array(
			'menu'            => 'menu',
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'bs-navbar-collapse',
			'menu_class'      => 'nav navbar-nav navbar-right',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
			'item_spacing'    => 'preserve',
			'depth'           => 0,
			'walker'          => new Bootstrap_Walker_Nav_Menu(),
			'theme_location'  => 'primary-menu',
		) );
		?>
	</div>
</nav>
