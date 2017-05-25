<?php
/*
Template Name: 2 row with Testimonal 
*/
?>
<?php get_header(); ?>

<div id="content" class="pg-about-content">

 <!-- Title Banner of Page with Big Image -->
   <div id="pg-about-banner-container">
    <div class="row">
	 <div id="pg-about-banner"></div>
    </div> 
   </div>
 <!-- Beginning of Content  -->   
		<div id="title-banner" class="large-centered columns">
		  <h1 class="text-center"><?php the_field('title_banner_text'); ?></h1>							
	    </div>
	<div id="inner-about-content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <!-- Content section 1 -->
			<div id="pg-about-section-one">
			 <div class="row" id="pg-about-content-row">
			  <div class="small-12 large-4 columns">
				 <h2><?php the_field('section_one_title'); ?></h2>
			  </div>
			  <div class="small-12 large-8 columns">
				 <?php the_field('section_one_text'); ?>
			  </div>
			 </div>
			</div>
		<!-- Content section 2 -->
			<div id="pg-about-section-two" class="alt-background-light-blue">
			 <div class="row" id="pg-about-content-row">
			  <div class="small-12 large-4 columns">
				 <h2><?php the_field('section_two_title'); ?></h2>
			  </div>
			  <div class=" small-12 large-8 columns">
				 <?php the_field('section_two_text'); ?>
			  </div>
			 </div>
			</div>
		<!-- Testimonial Section Break -->
			<div id="pg-about-testimonial">
	         <div class="row" id="pg-about-content-row">
		      <div class="large-12 columns" id="testimonial_text_body">

						<?php 

						$image = get_field('testimonial_image');

						if( !empty($image) ): ?>

						<div class="small-12 medium-12 large-4 columns">
						 <div id="pg-testimonial-container" class="small-11 small-centered columns">
						 </div>
						</div>
						<div id="testimonal-quote" class="small-12 medium-12 large-8 columns">
							<?php the_field('testimonial_text'); ?>
						</div>
						
					    <?php endif; ?>

			  </div>
			 </div>
		    </div>

    <?php endwhile; endif; ?>	

 </div> <!-- end #pg-inner-content -->
</div> <!-- end #pg-about-content -->

<?php get_footer(); ?>
