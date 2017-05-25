<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<!-- <label> -->
		<!-- <span class="screen-reader-text"><?php //echo _x( 'Search for:', 'label', 'jointstheme' ) ?></span> -->
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Keresés...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'jointstheme' ) ?>" />
	<!-- </label> -->
	<!-- <input type="submit" class="search-submit button" value="<?php //echo esc_attr_x( 'Search', 'jointstheme' ) ?>" /> -->
	<button class="search-submit button" type="submit">
		  <!-- Screen readers will see "close" -->
		  <span class="show-for-sr">Keresés</span>
		  <!-- Visual users will see the X, but not the "Close" text -->
		  <span aria-hidden="true"><i class="fi-magnifying-glass"></i></span>
	</button>
</form>