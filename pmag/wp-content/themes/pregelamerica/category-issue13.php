<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div id="container">
  <div id="content" role="main">
    <h1 class="page-title">
      <?php
					printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?>
    </h1>
    <div class="issueBlock"><img src="<?php bloginfo( 'template_url' ); ?>/images/covers/issue13_cover.png" />
      <ul>
        <li><strong>In This Issue...</strong></li>
        <li>Menu of Options: How to Represent What You Present</li>
        <li>Getting to Know PreGel AMERICA’s 5-Star Pastry Ambassador Program</li>
        <li>Top Ten: Celebrating 10 Years of PreGel AMERICA</li>
      </ul>
    </div>
    <?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>
  </div>
  <!-- #content --> 
</div>
<!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
