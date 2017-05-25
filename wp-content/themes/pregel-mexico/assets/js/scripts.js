jQuery(document).foundation();
/* 
These functions make sure WordPress 
and Foundation play nice together.
*/

jQuery(window).resize(function() {
    jQuery(".off-canvas-wrapper-inner").removeClass("is-open-right");
    jQuery(".off-canvas-wrapper-inner").removeClass("is-off-canvas-open");
    jQuery(".off-canvas").removeClass("is-open");
});

// Remove empty P tags created by WP inside of Accordion and Orbit
jQuery(document).ready(function() {
    
    jQuery('.accordion p:empty, .orbit p:empty').remove();
    
    /**
	 * For parts/loop-archive-grid.php
	 * Makes sure last grid item floats left
	 */

	jQuery( '.archive-grid .columns' ).last().addClass( 'end' );


// fake megamenu for now, delete this when can pull entire magento menu into wordpress - this disables submenu slideouts
  jQuery( 'ul li ul li ul' ).removeClass('submenu is-dropdown-submenu');

  jQuery( 'ul li ul li' ).removeClass('has-submenu is-dropdown-submenu-parent');

  jQuery( 'ul li ul li ul li' ).removeClass('is-submenu-item is-dropdown-submenu-item');

//custom add scripts
/*FAQ toggle boxes*/
jQuery( "#faq-1" ).click(function() {
  jQuery( "#faq-toggle-1" ).toggle( "slow", function() {
  });
    return false;
});
jQuery( "#faq-2" ).click(function() {
  jQuery( "#faq-toggle-2" ).toggle( "slow", function() {
  });
    return false;
});
jQuery( "#faq-3" ).click(function() {
  jQuery( "#faq-toggle-3" ).toggle( "slow", function() {
  });
    return false;
});
jQuery( "#faq-4" ).click(function() {
  jQuery( "#faq-toggle-4" ).toggle( "slow", function() {
  });
    return false;
});

// this is just so the expanded top bar can closed on click as well as mouseout - there is probably a better way

  /*jQuery('span.nav-close').click(
       function(){ 
        jQuery('#second-top-bar-menu').css('height','45px');
        setTimeout(function () { 
              jQuery('#second-top-bar-menu').css('height','');
              }, 2000);
      }
  );*/

// testing animation on drop down menus
 /* jQuery('.dropdown').on(
    'show.zf.dropdownmenu', function() {
      var dropdown = jQuery(this).find('.is-dropdown-submenu');
      dropdown.css('display', 'none');*/
      //this works but seems a little twitchy
      /*Foundation.Motion.animateIn(dropdown, 'hinge-in-from-top');*/
      //use this for now
      /*dropdown.fadeIn('slow');*/
      /*dropdown.slideDown('slow');
  });
  jQuery('.dropdown').on(
    'hide.zf.dropdownmenu', function() {
      var dropdown = jQuery(this).find('.is-dropdown-submenu');
      dropdown.css('display', 'inherit');*/
      //this works but seems a little twitchy
      /*Foundation.Motion.animateOut(dropdown, 'fade-out');*/
      //use this for now
     /* dropdown.fadeOut('slow');*/
     /*dropdown.slideUp('fast');
  });*/


});