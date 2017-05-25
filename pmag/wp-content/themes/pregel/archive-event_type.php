<?php get_header(); ?>
			
	<div id="pg-events-container" class="">

		<div id="pg-events-inner-container" class="row">

			<div class="large-12" id="pg-featured-article-banner">
				<div class="row-expanded">
				    <h1 class="text-center">Events</h1>							
			    </div>
	        </div>
			
			<!-- sidebar on right container column-->
			<div id="pg-events-bottom-section" class="large-12">
	
	    		    <div class="large-12">
		    		    <div id="tradeshows-title" class="">
					        <h1>Trade Shows</h1>							
				        </div>
					</div>

				    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'single-event' ); ?>
					    
					<?php endwhile; ?>	

						<?php joints_page_navi(); ?>
						
					<?php else : ?>
												
						<?php get_template_part( 'parts/content', 'missing' ); ?>
							
					<?php endif; ?>
																			
			</div><!-- end #pg-news-bottom-section -->
		</div> <!-- end #pg-events-inner-container -->

	</div> <!-- end #pg-events-container -->

<?php get_footer(); ?>