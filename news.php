<?php 
/* 
Template Name: Actualités
*/
?>

<?php get_header(); ?>

<main class="main__news">

    <?php 
        juicer_feed("name=l-escale-maritime-de-trois-pistoles"); 
    ?>
    <?php 
        get_template_part('/templates/banner_partners') 
    ?>
    
</main>

<?php get_footer(); ?>