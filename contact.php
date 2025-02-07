<?php 
/* 
Template Name: Contact
*/
?>

<?php get_header(); ?>

<main>

    <?php 
        get_template_part('/templates/contact_text');
    ?>

    <?php 
        get_template_part('/templates/contact_details');
    ?>
    
    <?php 
        get_template_part('/templates/banner_partners'); 
    ?>
    
</main>

<?php get_footer(); ?>