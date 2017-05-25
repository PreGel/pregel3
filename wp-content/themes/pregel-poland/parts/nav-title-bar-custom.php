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
			<div class="large-9 columns">
				<?php joints_top_nav_second(); ?>
			</div>
			<div class="large-2 columns">
				<?php the_block('top.wpsearch'); ?>
		    </div>
		</div>
 <!--  </div> -->
</div>