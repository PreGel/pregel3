<div id="post-not-found" class="hentry">
	
	<?php if ( is_search() ) : ?>
		
		<header class="article-header">
			<h1><?php _e("Désolée, aucun résultat à votre recherche.", "jointswp");?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e("Effectuez une autre recherche.", "jointswp");?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<!-- <footer class="article-footer">
			<p><?php //_e("This is the error message in the parts/missing-content.php template.", "jointstheme"); ?></p>
		</footer> -->
		
	<?php else: ?>
	
		<header class="article-header">
			<h1><?php _e("Désolée, aucun résultat à votre recherche!", "jointstheme"); ?></h1>
		</header>
		
		<section class="entry-content">
			<p><?php _e("Effectuez une autre recherche.", "jointstheme"); ?></p>
		</section>
		
		<section class="search">
		    <p><?php get_search_form(); ?></p>
		</section> <!-- end search section -->
		
		<!-- <footer class="article-footer">
		  <p><?php //_e("This is the error message in the parts/missing-content.php template.", "jointstheme"); ?></p>
		</footer> -->
			
	<?php endif; ?>
	
</div>
