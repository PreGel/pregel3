<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * 
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category PreGel
 * @package  PG_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

add_action( 'cmb2_admin_init', 'pg_register_article_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function pg_register_article_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_pg_article_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Additional Information', 'cmb2' ),
		'object_types'  => array( 'article_type', ), // Post type
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		// 'show_on_cb' => 'pg_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );
	$cmb_demo->add_field( array(
		'name' => __( 'Subtitle', 'cmb2' ),
		'desc' => __( 'This will show on below the title if featured on home page or on article page ( optional ) ', 'cmb2' ),
		'id'   => $prefix . 'subtitle',
		'type' => 'textarea_small',
	) );
	$cmb_demo->add_field( array(
		'name' => __( 'Callout', 'cmb2' ),
		'desc' => __( 'If featured on Home Page, this will be the text below the title and subtitle ( optional ) ', 'cmb2' ),
		'id'   => $prefix . 'callout',
		'type' => 'textarea',
	) );
}