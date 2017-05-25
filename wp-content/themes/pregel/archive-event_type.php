<?php get_header(); ?>
			
	<div id="content" class="pg-about-content">
	 <div id="pg-about-banner-container">
	  <div class="row">
	  <div id="pg-about-banner"></div>
	 </div> 
	</div>
	   			
	<div id="pg-events-container" class="row">
		<div id="title-banner" class="large-centered columns">
			<h1 class="text-center">Events</h1>							
		</div>
		<div id="events-container">
		 <div id="pg-about-section-one">
		  <div class="" id="pg-about-content-row">
		   <div id="event-blurb" class="small-12 large-8 columns">
			<p>PreGel travels the country throughout the year in an effort to get you the information you need about quality artisanal dessert ingredient solutions. At these events, not only do you have the opportunity to taste the final product our ingredients create, but you can enjoy the entire experience. See, smell, and learn about the tools that will enhance your business directly from our skilled staff of dedicated sales agents and trained chefs of our International Training Centers.  Join us for industry events, trainings, demos, workshops, or 5-Star Seminars lectured by world-renowned pastry chefs.</p>
			<p>For more information on any of the listed events, email us at <a href="mailto:events@pregelamerica.com">events@pregelamerica.com</a>.</p>
		   </div>

		   <div class="sidebar large-4 medium-5 small-12 columns end" role="complementary">
			<div id="sidebar-news" class="large-12 medium-12 small-12 columns">
				<h4 class="text-center" id="event-bar-title">Discover our Events</h4>
        		 <?php $terms = get_terms('event_cat');
					echo '<ul id="event-cat-sidebar" class="text-center">';
						foreach ($terms as $term) {
						echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
						}
					echo '</ul>';
				 ?>
			</div>
		   </div>
			
		  </div>
		 </div>
        </div>

        <?php global $query_string; 
        $posts = query_posts($query_string.'&order=ASC'); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- To see additional archive styles, visit the /parts directory -->
		<?php get_template_part( 'parts/loop', 'single-event'); ?>
					    
		<?php endwhile; ?>	

		<?php joints_page_navi(); ?>
						
		<?php else : ?>
			<div id="title-banner" class="large-centered columns">					
				<h2 class="text-center">
				    There are currently no events on our schedule.
					<br>
					Check back with us soon!
				</h2>
			</div>		
		<?php endif; ?>

		<?php wp_reset_query(); // reset the query ?>

		
	</div> <!-- end #pg-events-container -->
	</div> <!-- end #content -->

<?php get_footer(); ?>