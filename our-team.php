<?php 
/* 
Template Name: Notre équipe
*/
?>

<?php get_header(); ?>

<main>
<?php
    wp_nav_menu( $arg = array (
    'menu' => 'about',
    'menu_class' => 'sub-navigation',
    'theme_location' => 'primary'
    ));
?>
</main>

<?php get_footer(); ?>