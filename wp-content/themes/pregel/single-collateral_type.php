<?php
/*
single_collateral_type.php
*/
?>
 <?php get_header(); ?> 
			
<div id="content">

	<!-- Title Banner of Page with Big Image -->
	   <div id="pg-about-banner-container">
	    <div class="row">
		 <div id="" class="large-centered columns">					
		 </div>
	    </div> 
	   </div>

	<div id="inner-content" class="row">

		<main id="main" class="large-12 large-centered columns" role="main">
		
		  <div id="single-collateral-post-container" class="large-10 large-centered columns">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single-collateral' ); ?>
		    					
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

          </div>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>