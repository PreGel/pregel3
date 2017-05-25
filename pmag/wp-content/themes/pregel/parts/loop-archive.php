<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">	
 		
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->

	<section class="entry-content row" itemprop="articleBody">
		<!-- <a href="<?php the_permalink() ?>"><?php //the_post_thumbnail('thumbnail'); ?></a> -->
		<div class="large-3 columns">
		<?php
		if ( get_the_post_thumbnail( $post_id ) != '' ) {
			the_post_thumbnail('thumbnail');
		} else {
        // echo '<a class="cat-intro-image" href="'.the_permalink().'">'.get_first_image().'</a>';
			$first_img = get_first_image();
		}
		?>
			<a class="cat-intro-image" href="<?php the_permalink() ?>"><?php echo $first_img ?></a>
		</div>
		<div class="large-9 columns">
			<?php the_excerpt(); ?>
			<?php //the_content('<button class="tiny">Read more...</button>'); ?>
		</div>
	</section> <!-- end article section -->

	<!-- <footer class="article-footer">
		<p class="tags"><?php //the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> --> <!-- end article footer -->	
	   						
</article> <!-- end article -->