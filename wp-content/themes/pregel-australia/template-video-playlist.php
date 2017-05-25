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
	 <div id="title-banner" class="large-centered columns">
		<h1 class="text-center"><?php the_field('video_page_title'); ?></h1>							
	 </div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Playlist 1 Section -->	
			<div id="pg-playlist-section-one">
			 <div id="playlist-title" class="small-12 large-12 columns">
				 <h2><?php the_field('playlist_title_one'); ?></h2>
			 </div>
			 
			 <div class="small-12 medium-6 large-4 end columns" style="margin: 2rem auto;">
				 <?php echo do_shortcode('[mx_youtuber type="video" id="NLDyJg1-yz0" display="title" size="medium"]'); ?>
			 </div>
			 <div class="small-12 medium-6 large-4 end columns" style="margin: 2rem auto;">
				 <?php echo do_shortcode('[mx_youtuber type="video" id="F5CDuzw6rHo" display="title" size="medium"]'); ?>
			 </div>
			 <div class="small-12 medium-6 large-4 end columns" style="margin: 2rem auto;">
				 <?php echo do_shortcode('[mx_youtuber type="video" id="7K_z6L62IdU" display="title" size="medium"]'); ?>
			 </div>
			 <div class="small-12 medium-6 large-4 end columns" style="margin: 2rem auto;">
				 <?php echo do_shortcode('[mx_youtuber type="video" id="GttainEM4ng" display="title" size="medium"]'); ?>
			 </div>
			 <div class="small-12 medium-6 large-4 end columns" style="margin: 2rem auto;">
				 <?php echo do_shortcode('[mx_youtuber type="video" id="8gTNnfprVj8" display="title" size="medium"]'); ?>
			 </div>
			 <div class="small-12 medium-6 large-4 end columns" style="margin: 2rem auto;">
				 <?php echo do_shortcode('[mx_youtuber type="video" id="KDfhzbvXdzI" display="title" size="medium"]'); ?>
			 </div>
			 
			</div>
		<!-- Playlist 2 Section -->	
			<div id="pg-playlist-section-two" class="alt-background-light-blue">
			 <div id="playlist-title" class="small-12 large-12 columns">
				 <h2><?php the_field('playlist_title_two'); ?></h2>
			 </div>
			
			 <div class="small-12 medium-6 large-4 end columns" style="margin: 2rem auto;">
				 <?php echo do_shortcode('[mx_youtuber type="video" id="SdOk_qpRYbU" display="title" size="medium"]'); ?>
			 </div>
			 
			</div>
		<!-- Playlist 3 Section -->	
			<div id="pg-playlist-section-three">
			 <div id="playlist-title" class="small-12 large-12 columns" style="margin: 2rem auto;">
				 <h2><?php the_field('playlist_title_three'); ?></h2>
			 </div>
			 
			 <div class="small-12 medium-6 large-4 end columns" style="margin: 2rem auto;">
				 <?php echo do_shortcode('[mx_youtuber type="video" id="7kYbqEvmhhI" display="title" size="medium"]'); ?>
			 </div>
			
			</div>
		<!-- Playlist 4 Section -->	
			<!-- <div id="pg-playlist-section-four" class="alt-background-light-blue">
			 <div id="playlist-title" class="small-12 large-12 columns">
				 <h2><?php the_field('playlist_title_four'); ?></h2>
			 </div>
			 <div class="small-12 medium-12 large-12 columns">
				 <?php echo do_shortcode(''); ?>
			 </div>
			</div> -->
		<!-- Playlist 5 Section -->	
			<!-- <div id="pg-playlist-section-four" class="alt-background-light-blue">
			 <div id="playlist-title" class="small-12 large-12 columns">
				 <h2><?php the_field('playlist_title_five'); ?></h2>
			 </div>
			 <div class="small-12 medium-12 large-12 columns">
				 <?php echo do_shortcode(''); ?>
			 </div>
			</div> -->
		<!-- Playlist 6 Section -->	
			<!-- <div id="pg-playlist-section-four" class="alt-background-light-blue">
			 <div id="playlist-title" class="small-12 large-12 columns">
				 <h2><?php the_field('playlist_title_six'); ?></h2>
			 </div>
			 <div class="small-12 medium-12 large-12 columns">
				 <?php echo do_shortcode(''); ?>
			 </div>
			</div> -->
	<?php endwhile; endif; ?>	

  </div> <!-- end #inner-content -->
 </div> <!-- end #content -->

<?php get_footer(); ?>