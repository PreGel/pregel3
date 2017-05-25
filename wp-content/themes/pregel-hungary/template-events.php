<?php
/*
Template Name: Events Main Page
*/
?>
<?php get_header(); ?>
			
	<div id="content" class="pg-about-content">
	 <div id="pg-about-banner-container">
	  <div class="row">
	  <div id="pg-about-banner"></div>
	 </div> 
	</div>


	<div id="events-container">
	<div class="row">
		<div id="title-banner" class="large-centered columns">
			<h1 class="text-center"><?php the_title(); ?></h1>							
		</div>
	</div>


		<div id="pg-about-section-one">
			<div class="row" id="pg-about-content-row">
				<div class="small-12 medium-12 large-4 columns">
					<h2 class="text-center"><?php the_field('section_one_title'); ?></h2>
				</div>
				<div id="event-blurb" class="small-12 large-8 columns">
					<p><?php the_field('section_one_text'); ?></p>
				</div>
			</div>
		</div>
	</div>

		

			
				<div class="row">
					<div class="large-12">
						 <?php wp_list_categories('taxonomy=event_cat'); ?>
					
					<?php
					$args = array(
						'post_type' => 'event_type',
						'order' => 'ASC'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					
					   <?php get_template_part( 'parts/loop', 'single-event'); ?>
					  

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 echo('<p>no events</p>');
					}
					?>

				</div>

				</div>
			
			

	</div> <!-- end #content-->

<?php get_footer(); ?>