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
    register_post_type('info',
    array(
        'labels' => array(
            'name' => __('Information'),
            'singular_name' => __('info')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-info',
        'rewrite' => array('slug' => 'info'),
        'show_in_rest' => true,
        'supports' => array('title', 'id'),   
    )
);
}

// ! ALT DES IMAGES //

function get_acf_image_alt($image_id, $acf_field = '') {
    if (!$image_id) {
        return '';
    }

    $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

    if (empty($alt) && $acf_field) {
        $alt = get_field_object($acf_field)['label'] ?? ''; 
    }

    return esc_attr($alt);
}

function restrict_single_info_post( $query ) {
    if ( ! is_admin() && $query->is_main_query() && 'info' === $query->get( 'post_type' ) ) {
        if ( ! is_singular() && ! is_admin() ) {
            // Limiter à un seul article
            $query->set( 'posts_per_page', 1 );
        }
    }
}


function remove_wysiwyg() {
    remove_post_type_support('page', 'editor');
}

add_action('init', 'create_posttype');
add_action('init', 'remove_wysiwyg');
add_action( 'pre_get_posts', 'restrict_single_info_post' );

wp_enqueue_script( 'dialog', get_template_directory_uri() . '/assets/js/dialog.js');
wp_enqueue_script( 'leaflet', get_template_directory_uri() . '/assets/js/leaflet.js');
wp_enqueue_script( 'map', get_template_directory_uri() . '/assets/js/map.js');
wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js');

?>