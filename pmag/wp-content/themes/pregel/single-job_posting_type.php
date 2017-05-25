<?php
/*
This is the single post template for the custom job post type
*/
?>
 <?php get_header(); ?> 
			
<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 large-centered columns" role="main">
		
		<div id="single-job-post-container" class="large-12 large-centered columns">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    					
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

        </div>

		</main> <!-- end #main -->
	
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>