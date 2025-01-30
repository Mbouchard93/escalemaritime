<section class="paba-building">
    <h2 class="paba-building__title">
        <?php the_field('paba_title'); ?>
    </h2>
    <p class="paba-building__text">
        <?php the_field('paba_text_1'); ?>
    </p>
    <p class="paba-building__text">
        <?php the_field('paba_text_2'); ?>
    </p>
    <div class="paba-building__image-container">
    <?php
        $image = get_field('paba_img');
        if ($image) :
            $image_url = is_array($image) ? $image['url'] : $image;
        ?>                    
            <img class="paba-building__img" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>
    </div>
</section>