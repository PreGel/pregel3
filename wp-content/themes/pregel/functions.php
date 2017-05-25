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
/*require_once(get_template_directory().'/assets/functions/custom-post-type.php');*/

/* below was the custom product type - might be using magento or woo for products section instead*/
/*require_once(get_template_directory().'/assets/functions/product-post-type.php');*/

/*custom post type article*/
require_once(get_template_directory().'/assets/functions/article-post-type.php');

/*custom post type event*/
require_once(get_template_directory().'/assets/functions/event-post-type.php');

// Customize the WordPress login menu
require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
require_once(get_template_directory().'/assets/functions/admin.php'); 

// Makes a Job Opening Post 
require_once(get_template_directory().'/assets/functions/custom-job-posting-type.php');

// Makes a Collateral Post 
require_once(get_template_directory().'/assets/functions/collateral-post-type.php');


