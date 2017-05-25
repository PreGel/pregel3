<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "large"; ?>

<div id="pglogo2" class="show-for-large">
				<div class="logo show-for-large">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pregel-logo.png" alt="PreGel">
				</div>
			</div>

<div class="top-bar show-for-<?php echo $breakpoint ?>" id="second-top-bar-menu">
		<div class="row expanded">
			<div class="large-9 columns">
				<?php joints_top_nav_second(); ?>
			</div>
			<div class="large-3 medium-4 columns">
				<?php get_sidebar('titlebar'); ?>
			</div>
		</div>
</div>