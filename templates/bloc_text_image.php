<?php 
    function bloc_text_image() {
?>
        <div class="bloc-image">
            <?php 
            $image = get_field('bloc_image');
            if ($image) :
                $image_url = $image['url'];
            ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
        </div>
    <?php
}
?>

<section class="bloc_text_image">
    <?php if (get_field('image_position') == 0 ) bloc_text_image(); ?>
    <div>
        <h2><?php the_field('bloc_title')?></h2>
        <p><?php the_field('bloc_text')?></p>
    </div>
    <?php if (get_field('image_position') == 1 ) bloc_text_image(); ?>
    
</section>