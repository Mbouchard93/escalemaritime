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
            'supports' => array('title', 'id'),   
        )
    );
    register_post_type('teams',
        array(
            'labels' => array(
                'name' => __('Équipes'),
                'singular_name' => __('Équipe')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-groups',
            'rewrite' => array('slug' => 'teams'),
            'show_in_rest' => true,
            'supports' => array('title', 'id'),   
        )
    );
    register_post_type('partners',
        array(
            'labels' => array(
                'name' => __('Partenaires'),
                'singular_name' => __('Partenaire')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-businessman',
            'rewrite' => array('slug' => 'partners'),
            'show_in_rest' => true,
            'supports' => array('title', 'id'),   
        )
    );
}

function remove_wysiwyg() {
    remove_post_type_support('page', 'editor');
}

add_action('init', 'create_posttype');
add_action('init', 'remove_wysiwyg');

wp_enqueue_script( 'dialog', get_template_directory_uri() . '/assets/js/dialog.js');
wp_enqueue_script( 'leaflet', get_template_directory_uri() . '/assets/js/leaflet.js');
wp_enqueue_script( 'map', get_template_directory_uri() . '/assets/js/map.js');
wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js');

?>