<?php get_header(); ?>

<!-- This should show for p-mag sections -->

<div class="row">
 <div class="large-12 columns">
  <div id="pmag-head">
   <div class="pmag-logoimg">
	<img src="<?php echo home_url( '/' ); ?>wp-content/themes/pregelamerica/img/pmag-logo-27.png">
   </div>
   <div class="pmag-nav">
	<div class="pmag-nav-links">
	 <ul>
	  <li><a href="<?php echo home_url( '/' ); ?>">HOME</a></li>
	  <li><a href="<?php echo home_url( '/' ); ?>index.php/all-issues/">BROWSE ISSUES</a></li>
	  <li><a href="<?php echo home_url( '/' ); ?>index.php/tag/recipes/">RECIPES</a></li>
	  <li><a href="<?php echo home_url( '/' ); ?>index.php/category/top-ten/">TOP TEN</a></li>
	 </ul>
	</div>
   </div>
  </div>
 </div>
</div>
	
<div id="content">
 <div id="inner-content" class="row">
	<main id="main" class="large-8 medium-8 columns" role="main">
				
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
	<?php endwhile; endif; ?>							
			    					
	</main> <!-- end #main -->

    <?php get_sidebar(); ?>
		    
 </div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>