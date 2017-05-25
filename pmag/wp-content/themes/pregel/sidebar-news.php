<div id="sidebar-news" class="sidebar large-12 medium-12 columns" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar-news' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-news' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("You are on the news widget", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>

</div>