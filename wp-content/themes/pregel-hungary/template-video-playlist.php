<?php
/*
Template Name: Video Playlist
*/
?>

<?php get_header(); ?>

 <div id="content" class="pg-video-content">

  <!-- Title Banner of Page with Big Image -->
   <div id="pg-about-banner-container">
    <div class="row">
	 <div id="pg-about-banner"></div>
    </div> 
   </div>

  <div id="inner-content" class="row">
  	<div class="row">
		<div id="title-banner" class="large-centered columns">
			<h1 class="text-center"><?php the_title(); ?></h1>							
		</div>
	</div>

	 <!-- <div id="title-banner" class="large-centered columns">
		<h1 class="text-center"><?php //the_field('video_page_title'); ?></h1>							
	 </div> -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Playlist 1 Section -->	
			<div id="pg-playlist-section-one">
			 <div id="playlist-title" class="small-12 large-12 columns">
				 <h2><?php the_field('playlist_title_one'); ?></h2>
			 </div>
			 <div class="small-12 medium-12 large-12 columns">
			 	<?php the_field('playlist_section_one'); ?>
			 </div>
			</div>
	<?php endwhile; endif; ?>	

  </div> <!-- end #inner-content -->
 </div> <!-- end #content -->

<?php get_footer(); ?>