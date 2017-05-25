<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// Custom Functions
require_once(get_template_directory().'/assets/functions/custom-functions.php'); 

// Custom Metaboxes
//just for testing - remove example functions
//require_once(get_template_directory().'/assets/functions/cmb2-example-functions.php'); 
//require_once(get_template_directory().'/assets/functions/cmb2-functions.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 
require_once(get_template_directory().'/assets/functions/menu-walkers.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
//require_once(get_template_directory().'/assets/functions/custom-post-type.php');

/* below was the custom product type - might be using magento or woo for products section instead*/
/*require_once(get_template_directory().'/assets/functions/product-post-type.php');*/

/*custom post type article*/
require_once(get_template_directory().'/assets/functions/pmag-post-type.php');

/*custom post type event*/
//require_once(get_template_directory().'/assets/functions/event-post-type.php');

// Customize the WordPress login menu
require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
require_once(get_template_directory().'/assets/functions/admin.php'); 

// Makes a Job Opening post 
//require_once(get_template_directory().'/assets/functions/custom-job-posting-type.php');

/*for events manager calendar*/

add_action('wpfc_calendar_search','wpfc_em_calendar_search', 10, 1);

// custom post type for new magazine - idea is to preserve old magazine as is - this will need to be transferred to new theme or moved into a plugin when time permits
// moving this into partials
/*function magazine_custom_post() {
  $labels = array(
    'name'               => _x( 'Article', 'post type general name' ),
    'singular_name'      => _x( 'Article', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'article' ),
    'add_new_item'       => __( 'Add New Article' ),
    'edit_item'          => __( 'Edit Article' ),
    'new_item'           => __( 'New Article' ),
    'all_items'          => __( 'All Articles' ),
    'view_item'          => __( 'View Article' ),
    'search_items'       => __( 'Search Articles' ),
    'not_found'          => __( 'No articles found' ),
    'not_found_in_trash' => __( 'No articles found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'P Mag Articles'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our articles for P Magazine',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'post-formats', 'author' ),
    'has_archive'   => true,
    'taxonomies' => array('category','post_tag'),
    'exclude_from_search' => false,
    'capability_type' => 'post',
    'rewrite' => array( 'slug' => 'articles' ),
  );
  register_post_type( 'pmag_article', $args ); 
}
add_action( 'init', 'magazine_custom_post' );*/

// Show posts of 'post', 'article' post types on page
/*add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
  if ( is_home() || $query->is_main_query() )
    $query->set( 'post_type', array( 'post', 'pmag_article' ) );
  return $query;
}*/

// automatically retrieve the first image from posts 
// only doing this because these were set up without featured images and a gallery type posts before 
// should move to feature image 
function get_first_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all( '/<img .+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches );
    $first_img = $matches[1][0];
    if ( empty( $first_img ) ) {
        // defines a fallback imaage
        $first_img = get_template_directory_uri() . "/images/default.jpg";
    }
    $first_img = '<img src="' . $first_img . '" alt="Post Image" />';
    return $first_img;
}



add_filter( 'pre_get_posts', 'pg_add_custom_type' );
function pg_add_custom_type( $query )
{
    if ( is_admin() )
	return;
    
    if (
        ! $query->is_main_query()
        // Here we can check for all Conditional Tags
        OR ! $query->is_archive() // For e.g.: Every archive will feature both post types
    )
        return $query;

    $query->set( 'post_type', array( 'post', 'pmag_article' ) );

    return $query;
}