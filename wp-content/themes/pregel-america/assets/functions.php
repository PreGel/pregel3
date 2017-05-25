<?php
/**
* Enqueues child theme stylesheet, loading first the parent theme stylesheet.
*/
function pg_custom_enqueue_child_theme_styles() {
wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'pg_custom_enqueue_child_theme_styles' );


/*add page support for woo commerce this will only be needed on sites that are not using Magento to run the products section*/

/*remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<div id="content">
  		<div id="inner-content" class="row">
  		<main id="main" class="large-8 medium-8 columns" role="main">';
}

function my_theme_wrapper_end() {
  echo '</main>';
}*/

// add woocommerce support for only for sites that do not use magento for products	

//add_theme_support( 'woocommerce' );