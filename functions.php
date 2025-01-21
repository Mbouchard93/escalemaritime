<?php

function remove_wysiwyg() {
    remove_post_type_support( 'page', 'editor' );
}

add_action('init', 'create_posttype');
add_action('init', 'remove_wysiwyg');

?>