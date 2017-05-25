<?php get_header(); ?>
			
	<div id="content" class="pg-about-content">
	 <div id="pg-about-banner-container">
	  <div class="row">
	  <div id="pg-about-banner"></div>
	 </div> 
	</div>
	   			
	<div id="pg-events-container" class="row">
		<div id="title-banner" class="large-centered columns">
			<h1 class="text-center">Eventos</h1>							
		</div>
		<div id="events-container">
		 <div id="pg-about-section-one">
		  <div class="" id="pg-about-content-row">
		   <div id="event-blurb" class="small-12 large-8 columns">
			<p>En PreGel MEXICO, ponemos a su alcance nuestros servicios y productos a lo largo del año. Ya se trate de ferias comerciales, cursos de capacitación o demostraciones, nuestra meta es poner a su alcance los mejores ingredientes y servicios de la industria. Para mayor información sobre cualquiera de los eventos listados, envíenos un correo electrónico a <a href="mailto:servicioclientes@pregelmexico.com">eservicioclientes@pregelmexico.com</a>.</p>
		   </div>

		   <div class="sidebar large-4 medium-5 small-12 columns end" role="complementary">
			<div id="sidebar-news" class="large-12 medium-12 small-12 columns">
				<h4 class="text-center" id="event-bar-title">Entérese de Nuestros Eventos</h4>
        		 <?php $terms = get_terms('event_cat');
					echo '<ul id="event-cat-sidebar" class="text-center">';
						foreach ($terms as $term) {
						echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
						}
					echo '</ul>';
				 ?>
			</div>
		   </div>
			
		  </div>
		 </div>
        </div>

        <?php global $query_string; 
        $posts = query_posts($query_string.'&order=ASC'); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- To see additional archive styles, visit the /parts directory -->
		<?php get_template_part( 'parts/loop', 'single-event'); ?>
					    
		<?php endwhile; ?>	

		<?php joints_page_navi(); ?>
						
		<?php else : ?>
			<div id="title-banner" class="large-centered columns">					
				<h2 class="text-center">
				    Actualmente no hay eventos en nuestro horario.
					<br>
					¡Vuelve con nosotros pronto!
				</h2>
			</div>		
		<?php endif; ?>

		<?php wp_reset_query(); // reset the query ?>

		
	</div> <!-- end #pg-events-container -->
	</div> <!-- end #content -->

<?php get_footer(); ?>