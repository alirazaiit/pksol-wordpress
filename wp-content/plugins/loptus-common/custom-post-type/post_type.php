<?php
// register post type Portfolio
add_action( 'init', 'register_loptus_Portfolio' );
function register_loptus_Portfolio() {
    
    $labels = array( 
        'name' => __( 'Portfolio', 'loptus' ),
        'singular_name' => __( 'Portfolio', 'loptus' ),
        'add_new' => __( 'Add New Portfolio', 'loptus' ),
        'add_new_item' => __( 'Add New Portfolio', 'loptus' ),
        'edit_item' => __( 'Edit Portfolio', 'loptus' ),
        'new_item' => __( 'New Portfolio', 'loptus' ),
        'view_item' => __( 'View Portfolio', 'loptus' ),
        'search_items' => __( 'Search Portfolio', 'loptus' ),
        'not_found' => __( 'No Portfolio found', 'loptus' ),
        'not_found_in_trash' => __( 'No Portfolio found in Trash', 'loptus' ),
        'parent_item_colon' => __( 'Parent Portfolio:', 'loptus' ),
        'menu_name' => __( 'Portfolio', 'loptus' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List Portfolio',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'Portfolio', 'type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'Portfolio', $args );
}
add_action( 'init', 'create_Type_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it Skillss for your posts

function create_Type_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like Skills
//first do the translations part for GUI

  $labels = array(
    'name' => __( 'Type', 'loptus' ),
    'singular_name' => __( 'Type', 'loptus' ),
    'search_items' =>  __( 'Search Type','loptus' ),
    'all_items' => __( 'All Type','loptus' ),
    'parent_item' => __( 'Parent Type','loptus' ),
    'parent_item_colon' => __( 'Parent Type:','loptus' ),
    'edit_item' => __( 'Edit Type','loptus' ), 
    'update_item' => __( 'Update Type','loptus' ),
    'add_new_item' => __( 'Add New Type','loptus' ),
    'new_item_name' => __( 'New Type Name','loptus' ),
    'menu_name' => __( 'Type','loptus' ),
  );     

// Now register the taxonomy

  register_taxonomy('type',array('Portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));

}

// register post type service
add_action( 'init', 'register_loptus_service' );
function register_loptus_service() {
    
    $labels = array( 
        'name' => __( 'Service', 'loptus' ),
        'singular_name' => __( 'Service', 'loptus' ),
        'add_new' => __( 'Add New Service', 'loptus' ),
        'add_new_item' => __( 'Add New Service', 'loptus' ),
        'edit_item' => __( 'Edit Service', 'loptus' ),
        'new_item' => __( 'New Service', 'loptus' ),
        'view_item' => __( 'View Service', 'loptus' ),
        'search_items' => __( 'Search Service', 'loptus' ),
        'not_found' => __( 'No Service found', 'loptus' ),
        'not_found_in_trash' => __( 'No Service found in Trash', 'loptus' ),
        'parent_item_colon' => __( 'Parent Service:', 'loptus' ),
        'menu_name' => __( 'Service', 'loptus' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List service',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'service', 'type2' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'service', $args );
}

// register post type team
add_action( 'init', 'register_loptus_team' );
function register_loptus_team() {
    
    $labels = array( 
        'name' => __( 'Team', 'loptus' ),
        'singular_name' => __( 'Team', 'loptus' ),
        'add_new' => __( 'Add New Team', 'loptus' ),
        'add_new_item' => __( 'Add New Team', 'loptus' ),
        'edit_item' => __( 'Edit Team', 'loptus' ),
        'new_item' => __( 'New Team', 'loptus' ),
        'view_item' => __( 'View Team', 'loptus' ),
        'search_items' => __( 'Search Team', 'loptus' ),
        'not_found' => __( 'No Team found', 'loptus' ),
        'not_found_in_trash' => __( 'No Team found in Trash', 'loptus' ),
        'parent_item_colon' => __( 'Parent Team:', 'loptus' ),
        'menu_name' => __( 'Team', 'loptus' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List team',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'team', 'type3' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'team', $args );
}



// register post type case
add_action( 'init', 'register_loptus_case' );
function register_loptus_case() {
    
    $labels = array( 
        'name' => __( 'Case', 'loptus' ),
        'singular_name' => __( 'Case', 'loptus' ),
        'add_new' => __( 'Add New Case', 'loptus' ),
        'add_new_item' => __( 'Add New Case', 'loptus' ),
        'edit_item' => __( 'Edit Case', 'loptus' ),
        'new_item' => __( 'New Case', 'loptus' ),
        'view_item' => __( 'View Case', 'loptus' ),
        'search_items' => __( 'Search Case', 'loptus' ),
        'not_found' => __( 'No Case found', 'loptus' ),
        'not_found_in_trash' => __( 'No case found in Trash', 'loptus' ),
        'parent_item_colon' => __( 'Parent case:', 'loptus' ),
        'menu_name' => __( 'Case', 'loptus' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'List case',
        'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
        'taxonomies' => array( 'case', 'type3' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri(). '/img/admin_ico.png', 
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'case', $args );
}

?>