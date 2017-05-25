<?php
/*
This is the custom post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom taxonomy is called
register_taxonomy( 'shoes',
then your single template should be
taxonomy-shoes.php

*/
?>
 <?php get_header(); ?>
  <div id="content" class="pg-about-content"> 

   <div id="pg-events-container" class="row">
	

	<div id="events-container">
	 <div id="pg-about-section-one">
	  <div class="" id="pg-about-content-row">
	   <div class="sidebar large-12 medium-12 small-12 columns end" role="complementary">
		<div id="sidebar-news" class="large-12 medium-12 small-12 columns">
		 <h2 class="text-center" id="event-bar-title"><!-- <?php _e("Event Categories:", "jointstheme"); ?> --> <?php single_cat_title(); ?></h2>

		 <div class="large-12 small-12 end columns">
		  <div class="row">
			<?php $terms = get_terms('collateral_cat');
				echo '<div id="collateral-cat-sidebar" class="large-10 large-centered columns">';
				    foreach ($terms as $term) {
					 echo '<div id="collateral-cat-li" class="large-3 medium-3 small-6 end columns">
					 <a href="'.get_term_link($term).'">'.$term->name.'</a>
					 </div>';
					}
				echo '</div>';
			?>
		  </div>
		 </div>
		 <div id="collateral-cat-button" class="large-9 medium-8 small-12 end columns">
			<a href="https://www.pregelcanada.com/resources/downloads/" class="button">Return to all Collateral</a>
		 </div>
	    </div>
	   </div>
	  </div>
	 </div>
    </div> 


	<div id="collateral-card-container" class="large-12 medium-12 small-12 columns">
			<?php global $query_string; 
	        $posts = query_posts($query_string.'&order=ASC'); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!-- To see additional archive styles, visit the /parts directory -->
			<?php get_template_part( 'parts/loop', 'collateral-cat'); ?>
						    
			<?php endwhile; ?>	

			<?php joints_page_navi(); ?>
							
			<?php else : ?>
				<div id="title-banner" class="large-centered columns">					
					<h2 class="text-center">
					    There are currently no collateral pages avaiable.
						<br>
						Check back with us soon!
					</h2>
				</div>		
			<?php endif; ?>

			<?php wp_reset_query(); // reset the query ?>

			<div class="large-9 medium-8 small-12 end columns">
				<a href="https://www.pregelcanada.com/resources/downloads/" class="button">Return to all Collateral</a>
			</div>
	</div>
	
  </div> <!-- end #pg-events-container -->			
 </div> <!-- end #content -->
<?php get_footer(); ?>