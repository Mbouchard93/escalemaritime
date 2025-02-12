<section class="mission-section">
    <div class="mission-text">
        <h3>
            <?php the_field('mission_title'); ?>
        </h3>
        <p>
            <?php the_field('mission_text_1'); ?>
        </p>
        <p>
            <?php the_field('mission_text_2'); ?>
        </p>
    </div>
    <div class="mission-image-wrapper">
        <?php
        $image = get_field('mission_img_1');
        if ($image) :
            $image_id = is_array($image) ? $image['ID'] : $image;
            $image_url = is_array($image) ? $image['url'] : $image;
            $image_alt = get_acf_image_alt($image_id, 'mission_img_1');
        ?>                    
            <img class="mission-img" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        <?php endif; ?>
    </div>
</section>