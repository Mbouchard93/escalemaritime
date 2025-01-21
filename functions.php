<?php
function create_posttype() {
    register_post_type('events',
        array(
            'labels' => array(
                'name' => __('Événements'),
                'singular_name' => __('Événement')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-calendar-alt',
            'rewrite' => array('slug' => 'events'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),   
        )
    );
}
add_action('init', 'create_posttype');
?>