<?php 
/* 
Template Name: Événements
*/
?>

<?php get_header(); ?>

<main>
<?php 
    $events_limit = -1; // Affiche tout
    include get_template_directory() . '/templates/events.php'; 
?>
</main>

<?php get_footer(); ?>