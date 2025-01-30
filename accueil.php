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
        get_template_part('/templates/events');
    ?>

    <?php 
        get_template_part('/templates/map');
    ?>

</main>


<?php 
    get_footer(); 
?>

