<div id="post-not-found" class="hentry">
	
	<?php if ( is_search() ) : ?>
		
		<header class="article-header">
			<h1><?php _e("Sajnos nincs a keresésnek megfelelő találat", "jointswp");?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e("Próbálja meg a keresést más szavakkal", "jointswp");?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<!-- <footer class="article-footer">
			<p><?php //_e("translate in the parts/missing-content.php template.", "jointstheme"); ?></p>
		</footer>  -->
		
	<?php else: ?>
	
		<header class="article-header">
			<h1><?php _e("Sajnos nincs a keresésnek megfelelő találat", "jointstheme"); ?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e("Sajnos nincs a keresésnek megfelelő találat", "jointstheme"); ?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<!-- <footer class="article-footer">
		  <p><?php //_e("Translate in the parts/missing-content.php template.", "jointstheme"); ?></p>
		</footer> -->
			
	<?php endif; ?>
	
</div>
