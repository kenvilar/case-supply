<?php
/* Navigation Menu */
?>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-open" data-toggle="collapse"
			        data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<button type="button" class="navbar-toggle navbar-toggle-close" data-toggle="collapse"
			        data-target="#bs-example-navbar-collapse-1"><img
						src="<?php echo get_template_directory_uri() . '/assets/images/close.png'; ?>" alt="close">
			</button>
			<!--<a class="navbar-brand" href="#">Brand</a>-->
			<a class="navbar-brand" href="#"><img
						src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/original/case-supply-logo.png' ); ?>"
						alt=""></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/">Home</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/products">Products</a></li>
				<li><a href="/our-team">Our Team</a></li>
				<li><a href="/faq">FAQ</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>