<?php get_header(); ?>

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

	<div id="archive-content">
	
		<div id="inner-content" class="row">
		
		    <main id="main" class="large-8 medium-8 columns" role="main">
			    
		    	<header>
		    		<h1 class="page-title"><?php the_archive_title();?></h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>
		
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	
			<?php get_sidebar(); ?>
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>