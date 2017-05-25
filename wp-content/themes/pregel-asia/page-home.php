<?php get_header(); ?>
	
	<div id="content">
		<div id="intro">
			<?php masterslider("ms-2"); ?>
		</div>
		<div id="product-bar">
			<div class="row">
				<a href="#gelato"><div class="large-3 columns link gelato"><h3>Gelato</h3></div></a>
				<a href="#pastry"><div class="large-3 columns link pastry"><h3>Pastry</h3></div></a>
				<a href="#froyo"><div class="large-3 columns link froyo"><h3><span>Frozen</span><br> Yogurt</h3></div></a>
				<a href="#bev"><div class="large-3 columns link bev"><h3>Beverages</h3></div></a>
			</div>
		</div>

		<!-- home widget grid -->
		<h1>HOME PAGE FOR CHINA - THIS WILL OVERRIDE DEFAULT FOR CUSTOMIZATIONS</h1>
		<div class="row">
			<div class="large-6 columns">
				 <?php get_sidebar('home_grid1'); ?>
			</div>
			<div class="large-6 columns">
				 <?php get_sidebar('home_grid2'); ?>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
				 <?php get_sidebar('home_grid3'); ?>
			</div>
			<div class="large-6 columns">
				 <?php get_sidebar('home_grid4'); ?>
			</div>
		</div>
		<!-- end home widget grid -->

	</div> <!-- end #content -->

<?php get_footer(); ?>