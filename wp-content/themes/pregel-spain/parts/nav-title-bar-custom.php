<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "large"; ?>

<div class="top-bar show-for-<?php echo $breakpoint ?>" id="second-top-bar-menu">
	<!-- <div id="top-bar-drawer"> -->
		<div class="row expanded">
			<div class="large-9 columns">
				<?php joints_top_nav_second(); ?>
			</div>
			<div class="large-3 medium-4 columns">
				<?php the_block('top.wpsearch'); ?>
		    </div>
		</div>
 <!--  </div> -->
</div>