<?php
/*
Template Name: Asia Home English
*/
?>
<?php get_header(); ?>
	
	<div id="content">
		<div id="intro">
			<?php masterslider("pg-home"); ?>
		</div>
		<div id="product-bar">
			<div class="row expanded">
				<a href="#"><div class="large-3 small-6 columns link gelato"><h3>Gelato</h3></div></a>
				<a href="#"><div class="large-3 small-6 columns link pastry"><h3>Pastry</h3></div></a>
				<a href="#"><div class="large-3 small-6 columns link froyo"><h3 id="soft-serve">Soft&nbsp;Serve</h3></div></a>
				<a href="#"><div class="large-3 small-6 columns link bev"><h3>Coffee Shop</h3></div></a>
			</div>
		</div>

		<!-- home widget grid -->



		<!-- IE does not support calc ?? - was using calc for full responsive homepage grid to offset title in overlay -->
		<!-- <style>
			@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
             /* IE10+ CSS here */
		    .pg-text-overlay .widgettitle {
			  	/*transform: translateY(-140%) !important;*/
			  	transform: translateY(140%) !important;
			  	/*transform: translateY(calc(-100% - 10px)) !important;*/
				}
			.pg-caption:hover .pg-text-overlay {
				 transform: translateY(20%); 
				}
		    } 
		</style> -->


		<div class="row expanded large-collapse">
			<div class="large-4 medium-12 columns">

				<div id="homeGridOne" class="homeGrid">

					<?php
					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_one'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  


					<div class="widget_sp_image">
						  <!-- test static headers -->
					<h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>	       
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>

					    </article>
					</div>
					  

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid1');
					}
					?>


				</div> <!-- end homeGrid -->

			    </div> <!-- end column -->

			<div class="large-4 medium-12 columns">

				<div id="homeGridTwo" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_two'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<div class="widget_sp_image">
						 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						       
						        </div>


					    </article>
					</div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid2');
					}
					?>

				</div>  <!-- end homeGrid -->

			</div> <!-- end column -->
			<div class="large-4 medium-12 columns">

			<div id="homeGridThree" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_three'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					 <div class="widget_sp_image">
					 	 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						       
						        </div>


					    </article>
					</div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid3');
					}
					?>

				</div>  <!-- end homeGrid -->

			</div> <!-- end column -->

			<div class="large-4 medium-12 columns">

				<div id="homeGridFour" class="homeGrid">
				<?php
					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_four'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					 <div class="widget_sp_image">
					 	<!-- testing static headers	 -->				 	 
					   <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						       
						        </div>


					    </article>
					</div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid4');
					}
					?>
			     </div>   <!-- end homeGrid -->
			</div>  <!-- end column -->

			<div class="large-4 medium-12 columns">

				<div id="homeGridFive" class="homeGrid">


				<?php
					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_five'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  <div class="widget_sp_image">
					  	 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						        
						        </div>


					    </article>
					</div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid5');
					}
					?>
					</div>  <!-- end homeGrid -->

			</div>  <!-- end column -->

			<div class="large-4 medium-12 columns">

				<div id="homeGridSix" class="homeGrid">

				<?php
					$args = array(
						'post_type' => 'article_type',
						'meta_key' => 'home_feature_position',
						'meta_value' => 'home_feature_six'
						);

					$my_query = new WP_Query( $args );

					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post(); ?>
					  <div class="widget_sp_image">
					  	 <h4 class="widgettitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
					   <article class="pg-caption">
					   	<!-- custom thumbnail size 600px wide -->
					    		<?php the_post_thumbnail('home-feature') ?>

					    		<div class="pg-text-overlay">
						        <p class="homegrid-article-text"><?php echo get_post_meta( get_the_ID(), '_pg_article_callout', true );?></p>
						        <p><a class="button" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></p>
						        
						        </div>


					    </article>
					   </div>

					        <?php endwhile;
					        wp_reset_query(); 
					}
					
					else {
						 get_sidebar('home_grid6');
					}
					?>
					</div>  <!-- end homeGrid -->

			</div> <!-- end column -->


		</div> <!-- end row -->
		<!-- end home widget grid -->
		<?php 

						$image = get_field('bottom_banner');
						$link = get_field('bottom_banner_link');

						if( !empty($image) ): ?>
						<div id="home-bottom-banner" class="alt-background-light-blue">
							<div class="row">
								<div class="small-12 columns ">
									 <a href="<?php echo $link ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
								</div>
							</div>
						</div>

		<?php endif; ?>
	</div> <!-- end #content -->

<?php get_footer(); ?>