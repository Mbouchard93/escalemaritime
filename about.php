<?php 
/* 
Template Name: À propos
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

<?php get_template_part('/templates/banner') ?>
<h2>TEST</h2>
</main>

<?php get_footer(); ?>