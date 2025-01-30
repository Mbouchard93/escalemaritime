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
            $image_url = is_array($image) ? $image['url'] : $image;
        ?>                    
            <img class="mission-img" src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>
    </div>
</section>