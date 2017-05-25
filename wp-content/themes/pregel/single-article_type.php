<?php
/*
single_article_type.php
*/
?>
<?php get_header(); ?>

	<div id="content" class="pg-about-content">
	
	<!-- Title Banner of Page with Big Image--> 
			<div id="pg-single-article-banner-container">
			 <div class="row">
			  <div   class="large-centered columns">
	  		   <div class="small-12 medium-8 large-8 small-centered columns" id="article-image-banner-container">
			   <section id="article-image-banner" itemprop="articleBody">
				<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned
						the_post_thumbnail("large");
					} else { // if not then display a default image
						echo '<img src="http://pregel2.com/wp-content/uploads/2016/07/LOGO-AMERICAWEB-01.jpg">';
					} 
				?>
			   </section>
			  </div>			
			 </div>
			</div>
	       </div>
	  <div id="pg-news-bottom-section">
	  	<div class="row">

			<main id="main" class="large-8 medium-12 medium-center small-12 columns" role="main">
				    
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
			<!-- To see additional archive styles, visit the /parts directory -->
			<?php get_template_part( 'parts/loop', 'single-article' ); ?>
					    
			<?php endwhile; ?>	

			<?php joints_page_navi(); ?>
						
		    <?php else : ?>
												
			<?php get_template_part( 'parts/content', 'missing' ); ?>
							
			<?php endif; ?>
			
		    </main> <!-- end #main -->		
			<div class="sidebar-news">
			 <?php get_sidebar('news'); ?>
			</div>
	    </div>
     </div>
	</div>

<?php get_footer(); ?>