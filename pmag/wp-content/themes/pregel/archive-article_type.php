<?php get_header(); ?>
			
	<div id="pg-news-container" class="">

		<div id="pg-news-inner-container" class="row">

			<div id="pg-featured-article-banner" class="large-12">
				<div class="row-expanded">
					<div id="pg-featured-article-banner-img" class="large-12 columns"><img src="" alt=""></div>
				</div>
			</div>
			
			<!-- sidebar on right container column-->
			<div id="pg-news-bottom-section" class="large-12 columns">
			  <div class="row">
				<!-- sidebar on right container column-->
			    <div id ="pg-news-feed-sidebar-container" class="large-3 columns">
			    	<div class="row">
			    		<div class="large-12"><?php get_sidebar(/*'news'*/); ?></div>
			    	</div>	
			    </div>

			    <div id="news-grid-feed" class="large-9 columns" role="main">
	    		  <div class="row">
	    		    <div class="large-12 columns">
				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'archive-grid-news' ); ?>
					    
					<?php endwhile; ?>	

						<?php joints_page_navi(); ?>
						
					<?php else : ?>
												
						<?php get_template_part( 'parts/content', 'missing' ); ?>
							
					<?php endif; ?>
					</div>
				  </div>																				
			    </div> <!-- end #news-grid-feed -->
			</div><!-- end #pg-news-bottom-section -->
		   </div>
		</div> <!-- end #pg-news-inner-container -->

	</div> <!-- end #pg-news-container -->

<?php get_footer(); ?>