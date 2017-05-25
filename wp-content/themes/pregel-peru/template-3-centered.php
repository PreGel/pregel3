<?php
/*
Template Name: 3 row centered
*/
?>
<?php get_header(); ?>

<div id="content" class="">

 <!-- Beginning of Content  -->   
	<div id="title-banner" class="large-centered columns">
		<h1 class="text-center"><?php the_field('title_banner_text'); ?></h1>							
	</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <!-- Content section 1 -->
	    	<div id="pg-about-section-one">
			 <div class="row" id="pg-about-content-row">
			  <div class="small-12 medium-10 large-10 large-centered medium-centered columns">
				 <?php the_field('section_one_text'); ?>
			  </div>
			 </div>
			</div>
		<!-- Content section 2 -->
			<div id="pg-about-section-two" class="alt-background-light-blue">
			 <div class="row" id="pg-about-content-row">
			  <div class="small-12 medium-10 large-10 large-centered medium-centered columns">
				 <?php the_field('section_two_text'); ?>
			  </div>
			 </div>
			</div>
		<!-- Content section 3 -->
			<div id="pg-about-section-three">
			 <div class="row" id="pg-about-content-row">
			  <div class="small-12 medium-10 large-10 large-centered medium-centered columns">
				 <?php the_field('section_three_text'); ?>
			  </div>
			 </div>
			</div>
		
    <?php endwhile; endif; ?>	

 </div> <!-- end #pg-inner-content -->
</div> <!-- end #pg-about-content -->

<?php get_footer(); ?>