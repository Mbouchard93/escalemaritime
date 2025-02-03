<?php 
/* 
Template Name: Accueil
*/
?>


<?php get_header(); ?>

    
<main>
    <?php 
        get_template_part('/templates/about_section');
    ?>

<?php 
    $events_limit = 6;
    include get_template_directory() . '/templates/events.php'; 
?>

    <?php 
        get_template_part('/templates/map');
    ?>

    <?php get_template_part('/templates/banner_partners') ?>

</main>


<?php 
    get_footer(); 
?>

