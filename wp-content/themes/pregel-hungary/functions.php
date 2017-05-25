<?php
/**
* Enqueues child theme stylesheet, loading first the parent theme stylesheet.
*/
function pg_custom_enqueue_child_theme_styles() {
wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'pg_custom_enqueue_child_theme_styles', 999 );






//  add_action('wp_print_scripts','pg_dequeue_footer_foundation');
// function pg_dequeue_footer_foundation() {
//    wp_dequeue_script('foundation-js');
//  }
// Adding Foundation scripts file in the footer
/*function child_site_scripts() {
    wp_enqueue_script( 'new-foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), '6.2', true );
}
    add_action('wp_enqueue_scripts', 'child_site_scripts', 999);*/