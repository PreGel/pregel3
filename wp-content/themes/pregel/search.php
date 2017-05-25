<?php get_header(); ?>
			
	<div id="content">
		<!-- Title Banner of Page with Big Image -->
		<div id="pg-about-banner-container">
		 <div class="row">
		  <div id="pg-about-banner"></div>
		 </div> 
		</div>

		<div id="pg-news-bottom-section">
		
		 <div class="row">

			<header>
			 <h1 class="archive-title"><?php _e('Search Results for:', 'jointstheme'); ?> 
				<?php echo esc_attr(get_search_query()); ?>
			 </h1>
			</header>

			<main id="main" class="large-8 medium-12 medium-center small-12 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
				
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
			    <?php endif; ?>
	
		    </main> <!-- end #main -->

				<?php get_sidebar('news'); ?>
	
		 </div>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
