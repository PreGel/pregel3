<?php
/*
Template Name: 5 Row with Break
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
			  <div class="small-12 large-8 large-centered columns">
				 <div class="text-centered"><?php the_field('section_one_text'); ?></div>
			  </div>
			 </div>
			</div>
		<!-- Content section 2 -->
			<div id="pg-about-section-two" class="alt-background-light-blue">
			 <div class="row" id="pg-about-content-row">
			  <div class="small-12 large-4 columns">
				 <h2 class="text-center"><?php the_field('section_two_title'); ?></h2>
			  </div>
			  <div class=" small-12 large-8 columns">
				 <?php the_field('section_two_text'); ?>
			  </div>
			 </div>
			</div>
		<!-- Body Banner Break Section -->
		<section class="parrallax">
		 <div class="parrallax-container">
		  <h1><?php the_field('body_banner_text'); ?></h1>	 
		 </div>
		</section>
		<!-- Content section 3 -->
			<div  id="pg-about-section-three" class="alt-background-light-blue">
				<div class="row" id="pg-about-content-row">
				    <div class="small-12 large-4 columns">
						<h2 class="text-center"><?php the_field('section_three_title'); ?></h2>
					</div>
					<div class="small-12 large-8 columns">
						<?php the_field('section_three_text'); ?>
					</div>
				</div>
			</div>
		<!-- Content section 4 -->
			<div id="pg-about-section-four">
			 <div class="row" id="pg-about-content-row">
			  <div class="small-12 large-4 columns">
				 <h2 class="text-center"><?php the_field('section_four_title'); ?></h2>
			  </div>
			  <div class="small-12 large-8 columns">
				 <?php the_field('section_four_text'); ?>
			  </div>
			 </div>
			</div>
		<!-- Content section 3 -->
			<div  id="pg-about-section-three" class="alt-background-light-blue">
				<div class="row" id="pg-about-content-row">
				    <div class="small-12 large-4 columns">
						<h2 class="text-center"><?php the_field('section_five_title'); ?></h2>
					</div>
					<div class="small-12 large-8 columns">
						<?php the_field('section_five_text'); ?>
					</div>
				</div>
			</div>

    <?php endwhile; endif; ?>	

 </div> <!-- end #pg-inner-content -->
</div> <!-- end #pg-about-content -->

<?php get_footer(); ?>
