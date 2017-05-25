<?php
/* joints Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/
/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'product_cat', 
    	array('product_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Product Categories', 'jointswp' ), /* name of the custom taxonomy */
    			'query_var'		=> 'product_cat',
    			'singular_name' => __( 'Product Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Product Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Product Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Product Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Product Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Product Category', 'jointswp' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Product Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Product Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Product Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'products', 'with_front' => false, 'hierarchical' => true),
    	)
    );   
    
	// now let's add custom tags (these act like categories)
    register_taxonomy( 'product_tag', 
    	array('product_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Product Tags', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Product Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Product Tags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Product Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Product Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Product Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Product Tag', 'jointswp' ), /* edit Product taxonomy title */
    			'update_item' => __( 'Update Product Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Product Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Product Tag Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 

// let's create the function for the custom type
function custom_post_product() { 
	// creating (registering) the custom type 
	register_post_type( 'product_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Products', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Product', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Products', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Product', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Products', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Product', 'jointswp'), /* New Display Title */
			'view_item' => __('View Product', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Products', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the product custom post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-cart', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			/*\\\\\ testing - the %product_cat% only work with filter below*/
			'rewrite'	=> array( 'slug' => 'product/%product_cat%', 'with_front' => false), /* you can specify its url slug */
			/* //////////    end testing*/
			'has_archive' => 'product', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			//'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'product_type');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'product_type');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_product');
	

/* \\\\\\\\\\\\\\\\\ testing - this is to add category to product url, but cannot get parent category too*/	
/*Filtro per modificare il permalink*/
add_filter('post_link', 'product_permalink', 1, 3);
add_filter('post_type_link', 'product_permalink', 1, 3);

function product_permalink($permalink, $post_id, $leavename) {
	//con %brand% catturo il rewrite del Custom Post Type
    if (strpos($permalink, '%product_cat%') === FALSE) return $permalink;
        // Get post
        $post = get_post($post_id);
        if (!$post) return $permalink;

        // Get taxonomy terms

        $parent = get_term($term->parent, get_query_var('product_cat') );

        $terms = wp_get_object_terms($post->ID, 'product_cat');
        if (!is_wp_error($terms) && !empty($terms) && is_object($terms[0]))
        	$taxonomy_slug = $terms[0]->slug;
        else $taxonomy_slug = 'no-product_cat';


    return str_replace('%product_cat%', $taxonomy_slug, $permalink);
}
/* ///////////////////end testing*/
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */