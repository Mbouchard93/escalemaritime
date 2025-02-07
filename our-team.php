<?php 
/* 
Template Name: Notre équipe
*/
?>

<?php get_header(); ?>

<main>

    <?php 
        get_template_part('/templates/module_teams') 
    ?>

    <?php 
        get_template_part('/templates/teams') 
    ?>

    <?php 
        get_template_part('/templates/partners') 
    ?>

</main>
<section class="banner_teams">
    <?php 
        get_template_part('/templates/banner') 
    ?>
</section>

<?php get_footer(); ?>