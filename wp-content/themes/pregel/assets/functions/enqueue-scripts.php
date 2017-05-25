<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way


    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.min.js', array( 'jquery' ), '6.0', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
   
    // Register main stylesheet
    //wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );
     wp_enqueue_style( 'site-css', get_stylesheet_uri(), array(), '', 'all' );

    // Register font icons stylesheet
    wp_enqueue_style( 'ficons-css', get_template_directory_uri() . '/assets/foundation-icons/foundation-icons.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);


  // Load Typekit font files in header - can this be done better?

function theme_typekit() {
      wp_enqueue_script( 'theme_typekit', 'https://use.typekit.net/zgq7ijl.js', '', false);
  }
  add_action( 'wp_enqueue_scripts', 'theme_typekit' );

  function theme_typekit_inline() {
    if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
      <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <?php }
  }
  add_action( 'wp_head', 'theme_typekit_inline' );