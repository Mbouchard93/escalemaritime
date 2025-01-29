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
            $image_url = is_array($image) ? $image['url'] : $image;
        ?>                    
            <img class="vision-img" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>
    </div>
</section>