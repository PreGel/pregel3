<?php get_header(); ?>
			
	<div id="content" class="pg-about-content">
	 <div id="pg-about-banner-container">
	  <div class="row">
	  <div id="pg-about-banner"></div>
	 </div> 
	</div>
	   			
	<div id="pg-events-container" class="row">
		<!-- <div id="title-banner" class="large-centered columns">
			<h1 class="text-center">Esemény</h1>							
		</div> -->
		<div id="events-container">
		 <div id="pg-about-section-one">
		  <div class="" id="pg-about-content-row">
		   <div class="small-12 medium-12 large-4 columns">
			<h2 class="text-center">Esemény</h2>
		   </div>
		   <div id="event-blurb" class="small-12 large-8 columns">
			<p>A Pregel a kiállítások kapcsán egész évben járja a világot annak érdekében, hogy Ön minden szükséges információt megkapjon a minőségi kézműves cukrászati alapanyag kínálatáról. Ezeken a rendezvényeken, nem csak arra van lehetősége, hogy megkóstolja alapanyagainkból készített termékeinek, hanem élvezheti annak teljes élményét, látványát, illatát. 
Továbbá megismerheti a vállalkozását javító technikáinkat, melyeket közvetlenül a Nemzetközi Oktatási Központ szakképzett cukrászaitól és elkötelezett értékesítési képviselőinktől sajátíthat el.
Csatlakozzon hozzánk a szakmai rendezvényeken, tréningeken, bemutatókon, workshopokon vagy világhírű cukrászok által tartott 5 csillagos szemonáriumokon. További információkért lépjen velünk kapcsolatba az alábbi eseményeken:
</p>
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
				    There are currently no events on our schedule.
					<br>
					Check back with us soon!
				</h2>
			</div>		
		<?php endif; ?>

		<?php wp_reset_query(); // reset the query ?>
		
	</div> <!-- end #pg-events-container -->
	</div> <!-- end #content -->

<?php get_footer(); ?>