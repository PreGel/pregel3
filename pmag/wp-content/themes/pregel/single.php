<?php get_header(); ?>


<!-- This should show for p-mag sections -->
			
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
  <main id="main" class="large-8 medium-7 small-12 columns" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
	<?php endwhile; else : ?>
		
	<?php get_template_part( 'parts/content', 'missing' ); ?>

	<?php endif; ?>

  </main> <!-- end #main -->

	<?php get_sidebar(); ?>
  </div>
 </div> <!-- end #inner-content -->
</div> <!-- end #content -->

<?php get_footer(); ?>