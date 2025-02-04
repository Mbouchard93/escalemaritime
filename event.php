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
   <?php get_template_part('/templates/banner_partners') ?>
</main>

<?php get_footer(); ?>