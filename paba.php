<?php 
/* 
Template Name: PABA
*/
?>

<?php get_header(); ?>

<main>

<?php 
        get_template_part('/templates/paba_building');
?>

<?php 
        get_template_part('/templates/looking_future');
?>
   <?php get_template_part('/templates/banner_partners') ?>
</main>

<?php get_footer(); ?>