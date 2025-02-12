<section class="vision-section">
    <div class="vision-text">
        <h3>
            <?php the_field('vision_title'); ?>
        </h3>
        <p>
            <?php the_field('vision_text'); ?>
        </p>
    </div>
    <div class="vision-image-wrapper">
        <?php
        $image = get_field('vision_img');
        if ($image) :
            $image_id = is_array($image) ? $image['ID'] : $image;
            $image_url = is_array($image) ? $image['url'] : $image;
            $image_alt = get_acf_image_alt($image_id, 'vision_img');
        ?>                    
            <img class="vision-image" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        <?php endif; ?>
    </div>
</section>