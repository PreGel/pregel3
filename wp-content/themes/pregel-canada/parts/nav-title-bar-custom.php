<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "large"; ?>

<div id="pglogo2" class="show-for-large">
				<div class="logo show-for-large">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pregel-logo.png" alt="PreGel">
				</div>
			</div>

<div class="top-bar show-for-<?php echo $breakpoint ?>" id="second-top-bar-menu">
	<!-- <div id="top-bar-drawer"> -->
		<div class="row expanded">
			<div class="large-2 columns">
				<?php //get_sidebar('titlebar'); ?>
			</div>
			<div class="large-6 columns">
				<?php //joints_top_nav_exbar(); ?>
				<?php joints_top_nav_second(); ?>
			</div>
			<!-- <div class="large-3 columns">
				<?php //the_block('top.cart');?>
			</div> -->
			<div class="large-6 columns">
				<?php the_block('top.wpsearch'); ?>
		    </div>
			<!-- <span class="nav-close"></span> -->
		</div>
 <!--  </div> -->
</div>