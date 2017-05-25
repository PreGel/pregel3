<?php
/*
Template Name: P Mag Home
*/
?>
<?php get_header(); ?>
			
<div id="content" class="p-mag-content">

<div class="row">
	 <div id="pmag-logo-img" class="large-2 medium-2 small-3 columns"></div>
	 <div id="pmag-nav-top" class="large-10 medium-10 small-9 columns"></div>
	 <div id="#pmag-nav-bottom" class="large-12 medium-12 small-12 columns">
	   <ul id="pmag-nav-links" class="menu">
		<li><a class="p-mag-link" href="https://www.pregelamerica.com/pmag/">HOME</a></li>
	    <li><a class="p-mag-link" href="https://www.pregelamerica.com/pmag/all-issues/">BROWSE ISSUES</a></li>
	    <li><a class="p-mag-link" href="https://www.pregelamerica.com/pmag/category/recipes/">RECIPES</a></li>
		<li><a class="p-mag-link" href="https://www.pregelamerica.com/pmag/category/top-ten/">TOP TEN</a></li>
	   </ul>
	 </div>
</div>
	
 <div id="p-mag-inner-content">

	  <div class="row">
		<main id="main" class="large-8 medium-12 small-12 columns" role="main">
				    
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Master Slider -->
			<div id="p-mag-slider">
			<h1>Featured Articles</h1>
			 <div class="row" id="pg-mag-slider-row">
			  <div class="small-12 medium-12 large-12 columns">
				 <?php the_field('p_mag_slider'); ?>
			  </div>
			 </div>
			</div>
			<!-- Top Ten -->
			<div id="p-mag-top-ten">
			 <div class="row" id="pg-mag-content-row">
			  <div class="small-12 medium-12 large-12 columns">
				 <h2 class="p-mag-section-title">Top Ten</h2>
			  </div>
			  <div id="pmag-content-row" class="small-12 medium-12 large-12 columns">
				<?php the_field('top_ten_articles'); ?>
			  </div>
			 </div>
			</div>
			<!-- Recipe Inspiration -->
			<div id="p-mag-recipe">
			 <div class="row" id="pg-mag-content-row">
			  <div class="small-12 medium-12 large-12 columns">
				 <h2 class="p-mag-section-title">Recipe Inspiration</h2>
			  </div>
			  <div id="pmag-content-row" class="small-12 medium-12 large-12 columns">
				<?php the_field('recipe_inspiration_articles'); ?>
			  </div>
			 </div>
			</div>
			<!-- What We Are Loving -->
			<div id="p-mag-wwal">
			 <div class="row" id="pg-mag-content-row">
			  <div class="small-12 medium-12 large-12 columns">
				 <h2 class="p-mag-section-title">What We Are Loving</h2>
			  </div>
			  <div id="pmag-content-row" class="small-12 medium-12 large-12 columns">
				<?php the_field('loving_articles'); ?>
			  </div>
			 </div>
			</div>
		<?php endwhile; endif; ?>

		</main>
		
		<?php get_sidebar('sidebar1'); ?>

	  </div>


 </div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>