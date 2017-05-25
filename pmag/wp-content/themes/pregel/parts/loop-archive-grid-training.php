<?php foreach (array_chunk($posts, 3, true) as $posts) :  ?>

    <div class="row" data-equalizer> <!--Begin Row:--> 
    
            <?php foreach( $posts as $post ) : setup_postdata($post); ?>

        <!--Item: -->
		<div class="large-4 medium-4 columns" data-equalizer-watch>
        
			<?php
  global $post, $EM_Category, $wp_query;
     $EM_Cat = em_get_category($wp_query->queried_object->term_id); ?>
       <h1><?php echo $EM_Cat->output('#_CATEGORYNAME'); ?></h1><br/>
       <p><?php echo $EM_Cat->output('#_CATEGORYNOTES'); ?></p><br/>
       <h3>Next Events</h3><br/>
       <div>
        <p><?php echo $EM_Cat->output('#_CATEGORYNEXTEVENTS'); ?></p>
       </div>
			
		</div>
		
	 <?php endforeach; ?>
	
	</div>  <!--End Row: --> 
	
<?php endforeach; ?>    

<?php wp_reset_postdata(); ?>