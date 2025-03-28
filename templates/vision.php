<section class="vision-section-wrapper" aria-labelledby="vision-heading">
    <div class="bg-top-vision-section">
        <!-- bg montagnes -->
    </div>
    <div class="vision-section">
        <div class="vision-text-container">
            <div class="vision-text">
                <h3 id="vision-heading">
                    <?php the_field('vision_title'); ?>
                </h3>
                <p>                    
                    <?php the_field('vision_text'); ?>
                </p>
            </div>
            <div class="vision-waves">
                <!-- waves / vagues -->
            </div>
        </div>
        <div class="vision-image-wrapper">
            <?php
            $image = get_field('vision_img');
            if ($image) :
                $image_id = is_array($image) ? $image['ID'] : $image;
                $image_url = is_array($image) ? $image['url'] : $image;
                $image_alt = get_acf_image_alt($image_id, 'vision_img');
            ?>                    
                <img 
                    class="vision-image" 
                    src="<?php echo esc_url($image_url); ?>" 
                    alt="<?php echo esc_attr($image_alt); ?>"
                    loading="lazy"
                    decoding="async"
                >
            <?php endif; ?>
        </div>    
    </div>
    <div class="bg-bottom-vision-section">
        <!-- bg bottom -->
    </div>
</section>