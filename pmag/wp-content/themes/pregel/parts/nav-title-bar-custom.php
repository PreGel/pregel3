<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "large"; ?>

<div class="top-bar show-for-<?php echo $breakpoint ?>" id="second-top-bar-menu">
	<!-- <div id="top-bar-drawer"> -->
	<div id="top-bar-row" class="row expanded">
		<!-- <div class="large-2 columns">
			<?php //get_sidebar('titlebar'); ?>
			&nbsp;
		</div> -->
		<div class="large-4 large-offset-2 medium-6 columns">
			<?php //joints_top_nav_exbar(); ?>
			<ul id="menu-secondary-top-bar" class="vertical medium-horizontal menu" data-responsive-menu="accordion medium-dropdown"><li id="menu-item-470" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-470"><a href="https://pregelamerica.com/locations/">Locations</a></li>
				<li id="menu-item-58" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58"><a href="https://pregelamerica.com/news/">News</a></li>
				<li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61"><a href="https://pregelamerica.com/events/">Events</a></li>
				<li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a href="https://pregelamerica.com/recipes/">Recipes</a></li>
				<li id="menu-item-531" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-531"><a href="https://pregelamerica.com/resources/">Resources</a>
					<ul class="menu arrow-box">
						<!-- <li id="menu-item-54" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54"><a href="http://pregel2.com/resources/blog/">Blog</a></li> -->
						<li id="menu-item-57" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a href="https://pregelamerica.com/resources/videos/">Videos</a></li>
						<li id="menu-item-533" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-533"><a href="https://pregelamerica.com/pmag">P magazine</a></li>
						<li id="menu-item-533" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-533"><a href="https://pregelamerica.com/resources/downloads/">Collateral Downloads</a></li>
						<li id="menu-item-534" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-534"><a href="https://pregelmarketplace.com">Image Downloads</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- <div class="large-3 columns">
			<?php //the_block('top.cart');?>
		</div> -->
		<div class="large-3 large-offset-3 medium-6 columns">
			<?php //the_block('top.wpsearch'); ?>
			<?php get_sidebar('titlebar'); ?>
		</div>
		<span class="nav-close"></span>
	</div>
	<!--  </div> -->
</div>