<?php 
/* 
Template Name: Accueil
*/
?>

<?php 
    get_header();
?>
    

<main>

<?php 
    $events_limit = 6;
    include get_template_directory() . '/templates/events.php'; 
?>

    <?php 
        get_template_part('/templates/map');
    ?>

</main>


<?php 
    get_footer(); 
?>