<div class="sidebar large-4 medium-12 small-12 columns" role="complementary">
 <div id="sidebar-help" class="large-12 medium-12 small-12 columns">	
	<?php if ( is_active_sidebar( 'help_sidebar' ) ) : ?>

		<?php dynamic_sidebar( 'help_sidebar' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>
 </div>
</div>