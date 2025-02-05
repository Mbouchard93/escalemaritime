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
            $image_url = is_array($image) ? $image['url'] : $image;
        ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title(); ?>">
        <?php endif; ?>
    </div>
</section>