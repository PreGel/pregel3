<div data-sticky-container>


	<div class="top-bar sticky" id="top-bar-menu" data-sticky data-sticky-on="large" data-anchor="content" data-margin-top="0">

		<div class="row">
			<div class="large-5 columns">
				<div class="top-bar-left show-for-large">
					<div class="split-left">
						<ul id="menu-main-left-1" class="dropdown menu" data-dropdown-menu="">
							<li class="menu-item menu-item-type-post_type menu-item-object-page" role="menuitem" aria-haspopup="true" aria-selected="false" aria-expanded="false" aria-label="About Us" data-is-click="false">
							<a href="/">Home</a>
							</li>
							
							<?php the_block('wp_prod_menu'); ?>
				
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-submenu is-dropdown-submenu-parent is-down-arrow" role="menuitem" aria-haspopup="true" aria-selected="false" aria-expanded="false" aria-label="About Us" data-is-click="false">
							<a href="https://asia.pregel2.com/training/training-classes/">Training</a>
								<!-- have to add these manual for the moment -->
							<ul class="menu arrow-box submenu is-dropdown-submenu first-sub vertical" data-submenu="" aria-hidden="true" role="menu">
								<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://asia.pregel2.com/training/open-a-gelato-shop/">Open a Gelato Shop</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://asia.pregel2.com/training/the-business-plan-for-opening-a-gelato-shop/">The Business Plan</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://asia.pregel2.com/training/artisan-gelato-ingredients/">Artisan Gelato Ingredients</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://asia.pregel2.com/training/the-importance-of-gelato-and-pastry-training-courses/">Importance of Training</a></li>
								<!-- <li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://asia.pregel2.com/training/training-classes/">Training Classes</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://staging.pregel-itc.com/training/training-center-instructors-staff/">Instructors &amp; Staff</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://staging.pregel-itc.com/training/general-information-policies/">General Information &amp; Policies</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://staging.pregel-itc.com/training/my-bookings/">My Bookings</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://staging.pregel-itc.com/training/five-star-ambassadors/">Sponsors</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page is-submenu-item is-dropdown-submenu-item" role="menuitem"><a href="https://staging.pregel-itc.com/training/5-star-ambassadors-program/">5-Star Ambassador Program</a> </li> -->
							</ul>

							</li>
					    </ul>
						<?php //joints_top_nav_left(); ?>
					</div>
				</div>
			</div>

			<div class="large-2 columns">
				<div class="logo show-for-large">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pregel-logo.png" alt="PreGel">
				</div>
			</div>

			<div class="large-5 columns">
				<div class="top-bar-right show-for-large">
					<div class="split-right"><?php joints_top_nav_right(); ?>
						 <?php //the_block('top.cart');?>
					</div>
				</div>
			</div>


			<!-- pull in the add to cart dropdown from magento -->
			<!-- <div class="top-cart-right">

                   <?php //the_block('top.cart');?>
            </div> -->

			<!-- <div class="top-bar-right float-right show-for-small-only"> -->
			<!-- <div class="top-bar-right float-right hide-for-large"> -->
			<div class="top-bar-right hide-for-large">
				<ul class="menu">
					<li class="mobile-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pregel-logo.png" alt="PreGel"></li>
					<li class="m-menu-icon"><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
					<!-- <li><a data-toggle="off-canvas">Menu</a></li> -->
				</ul>
			</div>
		</div>
	</div>

</div>