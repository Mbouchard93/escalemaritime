<?php 
/* 
Template Name: Historique et mission
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

</main>

<?php get_footer(); ?>