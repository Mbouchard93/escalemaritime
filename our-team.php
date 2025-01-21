<?php 
/* 
Template Name: Notre équipe
*/
?>

<?php get_header(); ?>

<main>
<?php
    wp_nav_menu( $arg = array (
    'menu' => 'À propos',
    'menu_class' => 'sub-navigation',
    'theme_location' => 'primary'
    ));
?>

<?php get_template_part('/templates/bloc_text_image') ?>
</main>

<?php get_footer(); ?>