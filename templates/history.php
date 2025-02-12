<section class="history">
    <div class="history__text-wrapper">
        <h2>
            <?php the_field('history_title'); ?>
        </h2>
        <p>
            <?php the_field('history_text_1'); ?>
        </p>
        <p>
            <?php the_field('history_text_2'); ?>
        </p>
    </div>
    <div class="history__image-wrapper">
        <?php
        $image = get_field('history_img');
        if ($image) :
            $image_id = is_array($image) ? $image['ID'] : $image;
            $image_url = is_array($image) ? $image['url'] : $image;
            $image_alt = get_acf_image_alt($image_id, 'history_img');
        ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        <?php endif; ?>
    </div>
</section>