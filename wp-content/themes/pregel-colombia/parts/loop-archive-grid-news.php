<?php if( 0 === ( $wp_query->current_post  )  % 4 ): ?>

    <!--<div class="row archive-grid" data-equalizer> Begin Row:--> 

<?php endif; ?> 

		<!--Item: -->
		<!-- <div class="" data-equalizer-watch> -->
		<div id="pg-news-cards" class="large-3 medium-4 small-6 columns panel end" data-equalizer-watch>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			  <div class="news-card-img-container">
				<div class="news-card-img" itemprop="articleBody">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned
							the_post_thumbnail('news');
						} else { // if not then display a default image
							echo '<img src="http://pregel2.com/wp-content/uploads/2016/07/LOGO-AMERICAWEB-01.jpg" alt="" />';
						} 
					?>			
					</a>
				</div> <!-- end article section -->
			  </div>	
				<header class="article-header">
					<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>	
					 <!-- get_template_part( 'partials/content', 'byline' ); -->
				</header> <!-- end article header -->	
								
				<section class="entry-content" itemprop="articleBody">
					<!-- <p><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p> -->
					<p><a class="button" id="news-card-button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Leer más</a></p>

				</section> <!-- end article section -->
			 				    							
			</article> <!-- end article -->
			
		<!-- </div> -->

        </div>  <!--End Row: --> 
<?php if( 0 === ( $wp_query->current_post + 1 )  % 4  ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

<?php endif; ?>

