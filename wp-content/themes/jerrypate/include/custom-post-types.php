<?php 

add_action('init', 'register_mypost_type');
function register_mypost_type() {
register_post_type( 'projects',
    array(
        'labels' => array(
            'name'                  => 'Projects',
            'singular_name'         => 'Project',
            'add_new'               => 'Add New',
            'add_new_item'          => 'Add New Project',
            'edit_item'             => 'Edit Project',
            'new_item'              => 'New Project',
            'all_items'             => 'All Projects',
            'view_item'             => 'View Project',
            'search_items'          => 'Search Projects',
            'not_found'             => 'No channels found',
            'not_found_in_trash'    => 'No channels found in trash',
            'parent_item_colon'     => '',
            'menu_name'             => 'Projects'
        ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => true,
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-admin-home',
        'supports'              => array( 'title','content','thumbnail' ),
        'taxonomies'            => array('category',)
    )
);
}

?>