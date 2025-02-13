<section class="paba-building" aria-labelledby="paba-heading">
    <h2 class="paba-building__title">
        <?php the_field('paba_title'); ?>
    </h2>
    <p class="paba-building__text">
        <?php the_field('paba_text_1'); ?>
    </p>
    <p class="paba-building__text">
        <?php the_field('paba_text_2'); ?>
    </p>
    <div class="paba-building__image-container" aria-label="<?php echo esc_attr($image_alt); ?>">
    <?php
        $image = get_field('paba_img');
        if ($image) :
            $image_id = is_array($image) ? $image['ID'] : $image;
            $image_url = is_array($image) ? $image['url'] : $image;
            $image_alt = get_acf_image_alt($image_id, 'paba_img');
        ?>                    
            <img 
                class="paba-building__img" 
                src="<?php echo esc_url($image_url); ?>" 
                alt="<?php echo esc_attr($image_alt); ?>"
                loading="lazy"
                decoding="async"
            >
        <?php endif; ?>
    </div>
</section>