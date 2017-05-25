<div class="sidebar large-4 medium-6 small-12 end columns" role="complementary">
 <div id="sidebar-news" class="large-12 medium-12 small-12 columns">
	<?php if ( is_active_sidebar( 'news_sidebar' ) ) : ?>

		<?php dynamic_sidebar( 'news_sidebar' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate the News Widget", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>
 </div>
</div>