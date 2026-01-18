<?php
// This MUST be the first line

add_action('init', function() {
    register_post_type('reports', array(
        'labels'      => array('name' => 'Reports', 'singular_name' => 'Report'),
        'public'      => true,
        'show_ui'     => true, // This forces it to show in the sidebar
        'menu_icon'   => 'dashicons-document',
        'supports'    => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true
    ));
});