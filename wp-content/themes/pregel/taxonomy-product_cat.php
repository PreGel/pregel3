<?php
/*
This is the product post type taxonomy template.
If you edit the custom taxonomy name, you've got
to change the name of this template to
reflect that name change.


*/
// grab the URL for the category image
if (function_exists('category_image_src')) {
	$category_image = category_image_src( array( 'size' => 'full' ) , false ); 
} else {
	$category_image = '';
}
?>


<?php get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<div class="row">
			<div class="large-6 columns">
				 <?php if ($category_image) : ?>
				
				<!-- category featured image -->
				<img src="<?php echo $category_image; ?>" alt="<?php single_cat_title();?>" desc="<?php echo wp_strip_all_tags( category_description() );?>"/>			
				
				<?php endif; ?>
			</div>
			<div class="large-6 columns">
				<h1 class="page-title"><?php single_cat_title(); ?></h1>
				<p><?php echo category_description(); ?></p>

			</div>
		</div>

	    <main id="main" class="large-12 medium-12 columns first" role="main">


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		 
				<!-- To see additional archive styles, visit the /parts directory -->
				<?php get_template_part( 'parts/loop', 'archive-grid-twoup' ); ?>
			    
			<?php endwhile; ?>	

				<?php joints_page_navi(); ?>
				
			<?php else : ?>
										
				<?php get_template_part( 'parts/content', 'missing' ); ?>
					
			<?php endif; ?>


	    </main> <!-- end #main -->

	    <?php //get_sidebar(); ?>
	    
	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>