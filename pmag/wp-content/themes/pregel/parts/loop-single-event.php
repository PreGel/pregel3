
<div id="single-event-container" class="large-12 medium-12 small-12 columns">


	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							
		<header class="article-header">	
			<div id="event-title" class="large-12 medium-12 small-12 columns"><h3 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h3></div>
	    </header> <!-- end article header -->

	    <section class="entry-content" itemprop="articleBody">
			<div id="event-img-container" class="large-3 medium-4 small-9 columns"><?php the_post_thumbnail('full'); ?></div>
			<div class="large-9 medium-8 small-12 columns"><?php the_content(); ?></p></div><p>
		</section> <!-- end article section -->


		<footer class="article-footer">
			<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>	</footer> <!-- end article footer -->
											
														
	</article> <!-- end article -->



</div> <!-- end container div -->