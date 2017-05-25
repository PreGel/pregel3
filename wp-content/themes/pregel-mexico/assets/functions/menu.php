<?php
// Register menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Top Main Menu', 'jointswp' ),   // Main nav in header
        'main-nav-left' => __( 'The Left Split Main Menu', 'jointswp' ),   // Split Main nav in header
        'main-nav-right' => __( 'The Right Split Main Menu', 'jointswp' ),   // Split Main nav in header
		'footer-links' => __( 'Footer Links', 'jointswp' ) // Secondary nav in footer
	)
);

// The Top Expanding Bar Menu - this may be retired in favor of one below 
function joints_top_nav_exbar() {
     wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'top-simple-menu',       // Adding custom nav class
        'theme_location' => 'main-nav',                 // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Topbar_Menu_Walker()
    ));
} /* End Top Menu */


// The Top Menu ( secondary )
function joints_top_nav_second() {
     wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical medium-horizontal menu',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
        'theme_location' => 'main-nav',                 // Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Topbar_Menu_Walker()
    ));
} /* End Top Menu ( secondary ) */

// The Top Menu
function joints_top_nav() {
	 wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical medium-horizontal menu',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Topbar_Menu_Walker()
    ));
} /* End Top Menu */

// Below for split menu effect
// The Top Menu left
function joints_top_nav_left() {
     wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'dropdown menu',       // Adding custom nav class
        /*'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',*/
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
        'theme_location' => 'main-nav-left',                 // Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Topbar_Menu_Walker()
    ));
} /* End Top Menu left */

// The Top Menu right
function joints_top_nav_right() {
     wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'dropdown menu',       // Adding custom nav class
        /*'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',*/
        'items_wrap' => '<ul id="%1$s" class="%2$s test" data-dropdown-menu>%3$s</ul>',
        'theme_location' => 'main-nav-right',                 // Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Topbar_Menu_Walker()
    ));
} /* End Top Menu right */

// The Off Canvas Menu ( this will only get the top bar items )
function joints_off_canvas_nav() {
	 wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical menu',       // Adding custom nav class
        /*'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',*/
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-drilldown>%3$s</ul>',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Off_Canvas_Menu_Walker()
    ));
} /* End Off Canvas Menu */

// The Off Canvas Menu ( to get the split menu left side )
function joints_off_canvas_nav_getleft() {
     wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical menu',       // Adding custom nav class
        /*'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',*/ // trying to group them into a single drilldown
        'theme_location' => 'main-nav-left',                 // Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Off_Canvas_Menu_Walker()
    ));
} /* End Off Canvas Menu */

// The Off Canvas Menu ( to get the split menu right side )
function joints_off_canvas_nav_getright() {
     wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical menu',       // Adding custom nav class
        /*'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',*/ // trying to group them into a single drilldown
        /*'items_wrap' => '<ul id="%1$s" class="%2$s" data-drilldown>%3$s</ul>',*/
        'theme_location' => 'main-nav-right',                 // Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Off_Canvas_Menu_Walker()
    ));
} /* End Off Canvas Menu */

// The Footer Menu
function joints_footer_links() {
    wp_nav_menu(array(
    	'container' => 'false',                              // Remove nav container
    	'menu' => __( 'Footer Links', 'jointswp' ),   	// Nav name
    	'menu_class' => 'menu',      					// Adding custom nav class
    	'theme_location' => 'footer-links',             // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
    	'fallback_cb' => ''  							// Fallback function
	));
} /* End Footer Menu */

// Header Fallback Menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => '',      // Adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // Before each link
        'link_after' => ''                             // After each link
	) );
}

// Footer Fallback Menu
function joints_footer_links_fallback() {
	/* You can put a default here if you like */
}