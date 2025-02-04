<?php 
/* 
Template Name: Historique et mission
*/
?>

<?php get_header(); ?>
<main>
<?php 
        get_template_part('/templates/history');
?>

<?php 
        get_template_part('/templates/mission');
?>

<?php 
        get_template_part('/templates/value');
?>

<?php 
        get_template_part('/templates/vision');

?>
   <?php get_template_part('/templates/banner_partners') ?>
</main>

<?php get_footer(); ?>