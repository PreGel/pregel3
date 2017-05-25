<div class="off-canvas position-right" id="off-canvas" data-off-canvas data-position="right">

	<!-- pull in the products search from magento -->
	
		<?php the_block('top.wpsearch'); ?>
	
	<ul id="mobile-menu" class="vertical menu" data-drilldown>
	
		<?php the_block('wp_mobile_prod_menu'); ?>
		
		<?php joints_off_canvas_nav_getleft(); ?>
		
		
		<?php joints_off_canvas_nav_getright(); ?>
		<ul class="mobile-menu-divider">
		<li class="group-title">MORE</li>
	</ul>
	<?php joints_off_canvas_nav(); ?>
	</ul>
	
</div>