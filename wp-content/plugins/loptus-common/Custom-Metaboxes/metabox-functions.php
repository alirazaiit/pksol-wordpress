<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
$textdomain = "loptus";
function cmb_sample_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	
    $meta_boxes[] = array(
        'id'         => 'page_setting',
        'title'      => 'Page Setting',
        'pages'      => array('page'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(   
            array(
                'name' => 'Page Image',
                'desc' => 'Input Page Image background',
                'id'   => $prefix . 'page_image',
                'type'    => 'file',
            ),
        )
    );

    $meta_boxes[] = array(
    'id'         => 'service_setting',
    'title'      => 'Service Setting',
    'pages'      => array('service'), // Post type
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true, // Show field names on the left
    //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
    'fields' => array(   
        array(
            'name' => 'Service Image Icon',
            'desc' => 'Input Icon Image on service',
            'id'   => $prefix . 'service_image',
            'type'    => 'file',
        ),
    )
);

    $meta_boxes[] = array(
        'id'         => 'post_setting',
        'title'      => 'Post Setting',
        'pages'      => array('post'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(   
        )
    );
    // Add other metaboxes as needed

    $meta_boxes[] = array(
        'id'         => 'team_setting',
        'title'      => 'Team Setting',
        'pages'      => array('team'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(   
            array(
                'name' => 'Team Position',
                'desc' => 'Input Position of team member',
                'id'   => $prefix . 'team_position',
                'type'    => 'text',
            ),
            array(
                'name' => 'Team facebook',
                'desc' => 'Input link facebook of team member',
                'id'   => $prefix . 'team_facebook',
                'type'    => 'text',
            ),
            array(
                'name' => 'Team twitter',
                'desc' => 'Input link twitter of team member',
                'id'   => $prefix . 'team_twitter',
                'type'    => 'text',
            ),
            array(
                'name' => 'Team google',
                'desc' => 'Input link google of team member',
                'id'   => $prefix . 'team_google',
                'type'    => 'text',
            ),
            array(
                'name' => 'Team linkedin',
                'desc' => 'Input link linkedin of team member',
                'id'   => $prefix . 'team_linkedin',
                'type'    => 'text',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'portfolio_setting',
        'title'      => 'Portfolio Setting',
        'pages'      => array('portfolio'), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'id', 'value' => array( 2, ), ), // Specific post IDs to display this metabox
        'fields' => array(
        )
    );
    
	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

} 